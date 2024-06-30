<?php

namespace App\Controllers;

use App\Models\UserModel;
use App\Models\UmkmModel;

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
        //setting rules buat validasi form
        $rules = [
            'nik' => 'required|numeric',
            'name_user' => 'required|min_length[3]|max_length[20]',
            'username' => 'required|min_length[6]|max_length[50]',
            'password' => 'required|min_length[6]|max_length[200]',
            'password_confirmation' => 'required|min_length[6]|max_length[200]|matches[password]',
            'no_hp' => 'required|numeric',
        ];

        if ($this->validate($rules)) {
            //insert data user
            $modeluser = new UserModel();
            $datauser = [
                'nik' => $this->request->getVar('nik'),
                'name_user' => $this->request->getVar('name_user'),
                'username' => $this->request->getVar('username'),
                'password' => password_hash($this->request->getVar('password'), PASSWORD_BCRYPT),
                'roles' => "UMKM"
            ];
            $modeluser->save($datauser);


            //insert data umkm
            $modelumkm = new UmkmModel();
            $dataumkm = [
                'nik' => $this->request->getVar('nik'),
                'nama' => $this->request->getVar('nama'),
                'nama_usaha' => $this->request->getVar('nama_usaha'),
                'alamat' => $this->request->getVar('alamat'),
                'kelurahan' => $this->request->getVar('kelurahan'),
                'kecamatan' => $this->request->getVar('kecamatan'),
                'alamat_usaha' => $this->request->getVar('alamat_usaha'),
                'bidang_usaha' => $this->request->getVar('bidang_usaha'),
                'nib' => $this->request->getVar('nib'),
                'npwp' => $this->request->getVar('npwp'),
                'omzet_biaya' => $this->request->getVar('omzet_biaya'),
                'jumlah_tenaga_kerja' => $this->request->getVar('jumlah_tenaga_kerja'),
                'no_hp' => $this->request->getVar('no_hp'),
            ];
            $modelumkm->save($dataumkm);
            
            //redirect with message
            return redirect()->to(site_url('login'))->with('success', 'User Berhasil Terdaftar');

        } else {
            // redirect and show list error message 
            $data['validation'] = $this->validator;
            echo view('register/daftar', $data);
        }
    }
}
