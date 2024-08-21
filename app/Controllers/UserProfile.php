<?php

namespace App\Controllers;
use App\Models\UserModel;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class UserProfile extends BaseController
{
    public function index()
    {
        $userModel = new UserModel();
        $userId = session()->get('id_user');
        $users = $userModel->find($userId);

        if (!$users) {
            return redirect()->to('profile')->with('error', 'User tidak ditemukan.');
        }

        $data = [
            'users' => $users
        ];

        return view('profile', $data);
    }

    public function upload()
    {
        $userModel = new UserModel();
        $userId = session()->get('id_user');
        $file = $this->request->getFile('foto_profil');
    
        if ($file->isValid() && !$file->hasMoved()) {
            $user = $userModel->find($userId);
            $oldPhoto = $user['foto_profil'];
    
            // Delete old photo if it exists and is not the default one
            if ($oldPhoto && $oldPhoto !== 'avatar-1.png') {
                $oldPhotoPath = ROOTPATH . 'public/uploads/profile' . $oldPhoto;
                if (file_exists($oldPhotoPath)) {
                    unlink($oldPhotoPath);
                }
            }
    
            // Generate a new random name for the file
            $newName = $file->getRandomName();
            $file->move(ROOTPATH . 'public/uploads/profile', $newName);
    
            // Update foto_profil field in users table
            $userModel->update($userId, ['foto_profil' => $newName]);
    
            return redirect()->to('/userprofile')->with('success', 'Foto profil berhasil diunggah.');
        }
    
        return redirect()->to('/userprofile')->with('error', 'Gagal mengunggah foto.');
    }
}
