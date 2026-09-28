<?php

namespace App\Controllers;

use App\Models\UserModel;

class Users extends BaseController
{
    public function index()
    {
        $userModel = new UserModel();

        $data = [
            'users' => $userModel
                ->orderBy('id', 'ASC')
                ->findAll()
        ];

        return view('users/index', $data);
    }


    public function new()
    {
        return view('users/new');
    }


    public function add()
    {
        $userModel = new UserModel();

        $username = trim($this->request->getPost('username'));
        $fullName = trim($this->request->getPost('full_name'));

        $validation = service('validation');

        $validation->setRules([
            'username' => [
                'rules' => 'required|is_unique[users.username]',
                'errors' => [
                    'required'  => 'Username is required.',
                    'is_unique' => 'Username already exists.'
                ]
            ],

            'full_name' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Full name is required.'
                ]
            ]
        ]);

        if (!$validation->run([
            'username'  => $username,
            'full_name' => $fullName
        ])) {

            return redirect()
                ->back()
                ->withInput()
                ->with('errors', $validation->getErrors());
        }

        $userModel->insert([
            'username'   => $username,
            'full_name'  => $fullName,
            'created_at' => date('Y-m-d H:i:s')
        ]);

        return redirect()->to('/users');
    }


    public function edit($id)
    {
        $userModel = new UserModel();

        $user = $userModel->find($id);

        if (!$user) {
            return redirect()->to('/users');
        }

        return view('users/edit', [
            'user' => $user
        ]);
    }


    public function update($id)
    {
        $userModel = new UserModel();

        $user = $userModel->find($id);

        if (!$user) {
            return redirect()->to('/users');
        }

        $username = trim($this->request->getPost('username'));
        $fullName = trim($this->request->getPost('full_name'));

        /*
        |--------------------------------------------------------------------------
        | Validate Username and Full Name
        |--------------------------------------------------------------------------
        */

        $validation = service('validation');

        $validation->setRules([
            'username' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Username is required.'
                ]
            ],

            'full_name' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Full name is required.'
                ]
            ]
        ]);

        if (!$validation->run([
            'username'  => $username,
            'full_name' => $fullName
        ])) {

            return redirect()
                ->back()
                ->withInput()
                ->with('errors', $validation->getErrors());
        }


        /*
        |--------------------------------------------------------------------------
        | User Data
        |--------------------------------------------------------------------------
        */

        $data = [
            'username'  => $username,
            'full_name' => $fullName
        ];


        /*
        |--------------------------------------------------------------------------
        | Avatar Upload
        |--------------------------------------------------------------------------
        */

        $avatar = $this->request->getFile('avatar');

        if ($avatar && $avatar->isValid() && !$avatar->hasMoved()) {

            /*
            |--------------------------------------------------------------------------
            | Validate File Size
            |--------------------------------------------------------------------------
            */

            if ($avatar->getSize() > 2 * 1024 * 1024) {

                return redirect()
                    ->back()
                    ->withInput()
                    ->with('error', 'Avatar must not be larger than 2 MB.');
            }


            /*
            |--------------------------------------------------------------------------
            | Validate MIME Type
            |--------------------------------------------------------------------------
            */

            $mimeType = $avatar->getMimeType();

            $allowedTypes = [
                'image/jpeg',
                'image/png'
            ];

            if (!in_array($mimeType, $allowedTypes)) {

                return redirect()
                    ->back()
                    ->withInput()
                    ->with('error', 'Avatar must be a JPG or PNG image.');
            }


            /*
            |--------------------------------------------------------------------------
            | Create Avatar Folder
            |--------------------------------------------------------------------------
            */

            $uploadPath = FCPATH . 'uploads/avatars/';

            if (!is_dir($uploadPath)) {
                mkdir($uploadPath, 0777, true);
            }


            /*
            |--------------------------------------------------------------------------
            | Generate Filename
            |--------------------------------------------------------------------------
            */

            $fileName = 'avatar_' . $id . '_' . time() . '.jpg';

            $destination = $uploadPath . $fileName;


            /*
            |--------------------------------------------------------------------------
            | Create Image Resource
            |--------------------------------------------------------------------------
            */

            if ($mimeType === 'image/jpeg') {

                $sourceImage = imagecreatefromjpeg($avatar->getTempName());

            } else {

                $sourceImage = imagecreatefrompng($avatar->getTempName());
            }


            /*
            |--------------------------------------------------------------------------
            | Check Image Creation
            |--------------------------------------------------------------------------
            */

            if (!$sourceImage) {

                return redirect()
                    ->back()
                    ->withInput()
                    ->with('error', 'The uploaded image could not be processed.');
            }


            /*
            |--------------------------------------------------------------------------
            | Get Original Dimensions
            |--------------------------------------------------------------------------
            */

            $originalWidth = imagesx($sourceImage);
            $originalHeight = imagesy($sourceImage);


            /*
            |--------------------------------------------------------------------------
            | Thumbnail Size
            |--------------------------------------------------------------------------
            */

            $thumbnailSize = 150;


            /*
            |--------------------------------------------------------------------------
            | Crop to Square
            |--------------------------------------------------------------------------
            */

            $cropSize = min($originalWidth, $originalHeight);

            $sourceX = ($originalWidth - $cropSize) / 2;
            $sourceY = ($originalHeight - $cropSize) / 2;


            /*
            |--------------------------------------------------------------------------
            | Create Thumbnail Canvas
            |--------------------------------------------------------------------------
            */

            $thumbnail = imagecreatetruecolor(
                $thumbnailSize,
                $thumbnailSize
            );


            /*
            |--------------------------------------------------------------------------
            | White Background
            |--------------------------------------------------------------------------
            */

            $white = imagecolorallocate(
                $thumbnail,
                255,
                255,
                255
            );

            imagefill(
                $thumbnail,
                0,
                0,
                $white
            );


            /*
            |--------------------------------------------------------------------------
            | Resize Image to 150 x 150
            |--------------------------------------------------------------------------
            */

            imagecopyresampled(
                $thumbnail,
                $sourceImage,
                0,
                0,
                $sourceX,
                $sourceY,
                $thumbnailSize,
                $thumbnailSize,
                $cropSize,
                $cropSize
            );


            /*
            |--------------------------------------------------------------------------
            | Save Prepared Thumbnail
            |--------------------------------------------------------------------------
            */

            imagejpeg(
                $thumbnail,
                $destination,
                85
            );


            /*
            |--------------------------------------------------------------------------
            | Free Image Memory
            |--------------------------------------------------------------------------
            */

            imagedestroy($sourceImage);
            imagedestroy($thumbnail);


            /*
            |--------------------------------------------------------------------------
            | Delete Previous Avatar
            |--------------------------------------------------------------------------
            */

            if (!empty($user['avatar'])) {

                $oldAvatar = $uploadPath . $user['avatar'];

                if (is_file($oldAvatar)) {
                    unlink($oldAvatar);
                }
            }


            /*
            |--------------------------------------------------------------------------
            | Save Only Filename
            |--------------------------------------------------------------------------
            */

            $data['avatar'] = $fileName;
        }


        /*
        |--------------------------------------------------------------------------
        | Update User
        |--------------------------------------------------------------------------
        */

        $userModel->update($id, $data);

        return redirect()->to('/users');
    }


    public function delete($id)
    {
        $userModel = new UserModel();

        $user = $userModel->find($id);

        if (!$user) {
            return redirect()->to('/users');
        }


        /*
        |--------------------------------------------------------------------------
        | Delete Avatar
        |--------------------------------------------------------------------------
        */

        if (!empty($user['avatar'])) {

            $avatarPath = FCPATH . 'uploads/avatars/' . $user['avatar'];

            if (is_file($avatarPath)) {
                unlink($avatarPath);
            }
        }


        /*
        |--------------------------------------------------------------------------
        | Delete User
        |--------------------------------------------------------------------------
        */

        $userModel->delete($id);

        return redirect()->to('/users');
    }
}