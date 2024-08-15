<?php

namespace App\Controllers;

use App\Models\UmkmModel;

class Umkm extends BaseController
{
    public function index()
    {
        echo view('umkm/get');
    }

    public function create()
    {
        return view('umkm/add');
    }

    public function store()
    {
        //include helper form
        helper(['form']);
        //setting rules buat validasi form
        $rules = [
            'nik' => 'required|numeric',
            'nama' => 'required|min_length[3]|max_length[200]',
            'nama_usaha' => 'required|min_length[3]|max_length[200]',
            'alamat' => 'required|min_length[3]|max_length[200]',
            'kelurahan' => 'required|min_length[3]|max_length[200]',
            'kecamatan' => 'required|min_length[3]|max_length[200]',
            'alamat_usaha' => 'required|min_length[3]|max_length[200]',
            'bidang_usaha' => 'required|min_length[1]|max_length[200]',
            'nib' => 'required|min_length[6]|max_length[50]',
            'npwp' => 'required|min_length[6]|max_length[50]',
            'omzet_biaya' => 'required|min_length[6]|max_length[200]',
            'aset' => 'required|min_length[1]|max_length[200]',
            'jumlah_tenaga_kerja' => 'required|numeric',
            'no_hp' => 'required|numeric',
        ];

        if ($this->validate($rules)){
        $model= new UmkmModel();
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
                'aset' => $this->request->getVar('aset'),
                'jumlah_tenaga_kerja' => $this->request->getVar('jumlah_tenaga_kerja'),
                'no_hp' => $this->request->getVar('no_hp'),
            ];
            $model->save($dataumkm);
            $lastId = $model->insertID();

            return redirect()->to(site_url('umkm/success/' . $lastId));
        } else {
            $data['validation'] = $this->validator;
            return view('umkm/add', $data);
        }
    }

    public function success($id)
    {
        $model = new UmkmModel();
        $data['umkm'] = $model->find($id);

        return view('umkm/success', $data);
    }

    public function cetak($id)
    {
        $model = new UmkmModel();
        $data['umkm'] = $model->find($id);

        return view('umkm/cetak', $data);
    }
}