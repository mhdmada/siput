<?php

namespace App\Controllers;
use App\Models\UserModel;

class Auth extends BaseController
{
    public function index()
    {
        return redirect()->to(site_url('login'));
    }

    public function login()
    {
        if(session('id_user')) {
            return redirect()->to(site_url());
        }
        return view('auth/login');
    }

    public function loginProcess()
    {
        $post =$this->request->getPost();
        $query = $this->db->table('users')->getWhere(['username' => $post['username']]);
        $user = $query->getRow();
        if($user) {
            if(password_verify($post['password'], $user->password)) {
                $params = [
                
                'id_user' => $user->id_user,
                'username' => $user->username
                
                ];
                
                session()->set($params);
                if($user->roles== 'SUPER_ADMIN'){
                    return redirect()->to(site_url('admin'));
                } else {
                    return redirect()->to(site_url('dashboard'));
                }
            } else {
                return redirect()->back()->with('error', 'Password tidak sesuai');
            }
        } else {
            return redirect()->back()->with('error', 'Username tidak ditemukan');
        }
    }

    public function logout()
    {
        session()->remove('id_user');
        return redirect()->to(site_url('login'));
    }

    // public function forgotPassword()
    // {
    // return view('auth/forgot_password');
    // }

    // public function processForgotPassword()
    // {
    //     $email = $this->request->getPost('email');
    
    //     $userModel = new UserModel();
    //     $users = $userModel->where('email', $email)->first();
    
    //     if ($users) {
    //         $token = bin2hex(random_bytes(50));
        
    //         $resetLink = site_url('auth/resetPassword?token=' . $token);
        
    //         session()->setFlashdata('success', 'Email reset password telah dikirim!');
    //         return redirect()->to('auth/forgotPassword');
    //     } else {
    //         session()->setFlashdata('error', 'Email tidak ditemukan.');
    //         return redirect()->to('auth/forgotPassword');
    //     }
    // }
        
}