<?php

namespace App\Controllers;

use App\Models\UserModel;

class Register extends BaseController
{
    public function index()
    {
        return view('register/daftar');
    }

    public function save()
    {
        //include helper form
        helper(['form']);
        //set rules validation form
        $rules = [
            'name_user'     => 'required|min_length[3]|max_length[20]',
            'username'      => 'required|min_length[6]|max_length[50]',
            'password'      => 'required|min_length[6]|max_length[200]'
        ];
         
        if($this->validate($rules)){
            $model = new UserModel();
            $data = [
                'name_user'     => $this->request->getVar('name_user'),
                'username'    => $this->request->getVar('username'),
                'password' => password_hash($this->request->getVar('password'), PASSWORD_BCRYPT)
            ];
            $model->save($data);
            $this->db->table('users')->insert($data);
            return redirect()->to('login');
        }else{
            $data['validation'] = $this->validator;
            echo view('register/daftar', $data);
        }
         
    }

    public function store()
    {
        $data =$this->request->getPost();
        
        $this->db->table('umkm')->insert($data);

        if($this->db->affectedRows() > 0 ) {
            return redirect()->to(site_url('login'))->with('success', 'Data Berhasil Disimpan');
        }
    }
}