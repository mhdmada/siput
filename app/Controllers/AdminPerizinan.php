<?php

namespace App\Controllers;
use App\Models\PerizinanModel;

use App\Controllers\AdminBaseController;
use CodeIgniter\HTTP\ResponseInterface;

class AdminPerizinan extends AdminBaseController
{
    public function index()
    {
        $PerizinanModel = new PerizinanModel();
        $data['izin_usaha'] = $PerizinanModel->orderBy('id_izin', 'ASC')->findAll();

        return view('admin/perizinan/get', $data);
    }

    public function edit($id)
    {
        $PerizinanModel = new PerizinanModel();
        $data['izin'] = $PerizinanModel->find($id);

        return view('admin/perizinan/edit', $data);
    }

    public function update()
    {
        // cara 1
        // $data =$this->request->getPost();
        // unset($data['_method']);

        //  cara 2 : name spesifik
        $PerizinanModel = new PerizinanModel();
        $id = $this->request->getVar('id_izin');
        $data = [
            'info_1' => $this->request->getVar('info_1'),
            'info_2' => $this->request->getVar('info_2'),
            'info_3' => $this->request->getVar('info_3'),
            'info_4' => $this->request->getVar('info_4'),
            'info_5' => $this->request->getVar('info_5'),
            'info_6' => $this->request->getVar('info_6'),
            'info_7' => $this->request->getVar('info_7'),
            'info_8' => $this->request->getVar('info_8'),
            'info_9' => $this->request->getVar('info_9'),
            'info_10' => $this->request->getVar('info_10')
        ];
        $PerizinanModel->update($id, $data);

        return redirect()->to(site_url('admin/perizinan'))->with('success', 'Data Berhasil Diupdate');
    }

}
