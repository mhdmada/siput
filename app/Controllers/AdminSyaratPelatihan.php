<?php

namespace App\Controllers;
use App\Models\SyaratPelatihanModel;

use App\Controllers\AdminBaseController;
use CodeIgniter\HTTP\ResponseInterface;

class AdminSyaratPelatihan extends AdminBaseController
{
    public function index()
    {
        $model = new SyaratPelatihanModel();
        $data['syarat_pelatihan'] = $model->findAll();

        return view('admin/syarat_pelatihan/get',$data);
    }

    public function edit($id)
    {
        $model = new SyaratPelatihanModel();
        $data['syarat_pelatihan'] = $model->find($id);

        return view('admin/syarat_pelatihan/edit', $data);
    }

    public function update($id)
    {
        $model = new SyaratPelatihanModel();
        $data = [
            'judul' => $this->request->getPost('judul'),
            'info_1' => $this->request->getPost('info_1'),
            'info_2' => $this->request->getPost('info_2'),
            'info_3' => $this->request->getPost('info_3'),
            'info_4' => $this->request->getPost('info_4'),
            'info_5' => $this->request->getPost('info_5'),
            'lokasi' => $this->request->getPost('lokasi'),
            'jadwal' => $this->request->getPost('jadwal'),
        ];

        $model->update($id, $data);

        return redirect()->to(site_url('admin/syarat_pelatihan'))->with('success', 'Data Berhasil Diupdate');
    }
}
