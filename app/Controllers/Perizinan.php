<?php

namespace App\Controllers;
use App\Models\PerizinanModel;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Perizinan extends BaseController
{
    public function index()
    {
        $PerizinanModel = new PerizinanModel();
        $data['izin_usaha'] = $PerizinanModel->orderBy('id_izin', 'ASC')->findAll();

        return view('perizinan/get', $data);
    }

    // public function create()
    // {
    //     return view('perizinan/add');
    // }

    // public function store()
    // {
    //      //include helper form
    //      helper(['form']);
    //      //setting rules buat validasi form
    //      $rules = [
    //         'haki' => 'required|min_length[3]|max_length[500]',
    //         'nib' => 'required|min_length[3]|max_length[500]',
    //         'npwp' => 'required|min_length[3]|max_length[500]',
    //         'p_irt' => 'required|min_length[3]|max_length[500]',
    //      ];
 
    //      if ($this->validate($rules)){
    //      $modelperizinan = new PerizinanModel();
    //          $dataperizinan = [
    //              'haki' => $this->request->getVar('haki'),
    //              'nib' => $this->request->getVar('nib'),
    //              'npwp' => $this->request->getVar('npwp'),
    //              'p_irt' => $this->request->getVar('p_irt'),
    //          ];
    //          $modelperizinan->save($dataperizinan);
 
    //      } else {
    //          // redirect and show list error message 
    //          $data['validation'] = $this->validator;
    //          echo view('perizinan/add', $data);
    //      }

    //     if($this->db->affectedRows() > 0 ) {
    //         return redirect()->to(site_url('perizinan'))->with('success', 'Data Berhasil Disimpan');
    //     }
    // }

    // public function edit($id)
    // {
    //     $PerizinanModel = new PerizinanModel();
    //     $data['izin'] = $PerizinanModel->find($id);

    //     return view('perizinan/edit', $data);
    // }

    // public function update($id)
    // {
    //     // cara 1
    //     // $data =$this->request->getPost();
    //     // unset($data['_method']);

    //     //  cara 2 : name spesifik
    //     $PerizinanModel = new PerizinanModel();
    //     $id = $this->request->getVar('id_izin');
    //     $data = [
    //         'info_1' => $this->request->getVar('info_1'),
    //         'info_2' => $this->request->getVar('info_2'),
    //         'info_3' => $this->request->getVar('info_3'),
    //         'info_4' => $this->request->getVar('info_4'),
    //         'info_5' => $this->request->getVar('info_5'),
    //         'info_6' => $this->request->getVar('info_6'),
    //         'info_7' => $this->request->getVar('info_7'),
    //         'info_8' => $this->request->getVar('info_8'),
    //         'info_9' => $this->request->getVar('info_9'),
    //         'info_10' => $this->request->getVar('info_10')
    //     ];
    //     $PerizinanModel->update($id, $data);

    //     return redirect()->to(site_url('perizinan'))->with('success', 'Data Berhasil Diupdate');
    // }

    // public function destroy($id)
    // {
    //     $this->db->table('izin_usaha')->where(['id_izin' => $id])->delete();
    //     return redirect()->to(site_url('perizinan'))->with('success', 'Data Berhasil Dihapus');
    // }
}
