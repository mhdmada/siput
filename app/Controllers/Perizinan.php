<?php

namespace App\Controllers;
use App\Models\PerizinanModel;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Perizinan extends BaseController
{
    public function index()
    {
         //cara 1 dengan query builder
         $builder = $this->db->table('izin_usaha');
         $query   = $builder->get();
 
         //cara 2
        //  $query = $this->db->query("SELECT * FROM izin_usaha");
        
 
         $data['izin_usaha'] = $query->getResult();
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

    // public function edit($id = null)
    // {
    //     if($id != null){
    //         $query = $this->db->table('izin_usaha')->getWhere(['id_izin' => $id]);
    //         if($query->resultID->num_rows > 0) {
    //             $data['izin_usaha'] = $query->getRow();
    //             return view('perizinan/edit', $data);
    //         } else {
    //             throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
    //         }
    //     } else {
    //         throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
    //     }
    // }

    // public function update($id)
    // {
    //     // cara 1
    //     // $data =$this->request->getPost();
    //     // unset($data['_method']);

    //     //  cara 2 : name spesifik
    //     $data = [
    //         'haki' => $this->request->getVar('haki'),
    //         'nib' => $this->request->getVar('nib'),
    //         'npwp' => $this->request->getVar('npwp'),
    //         'p_irt' => $this->request->getVar('p_irt'),
    //     ];
        
    //     $this->db->table('izin_usaha')->where(['id_izin' => $id])->update($data);
    //     return redirect()->to(site_url('perizinan'))->with('success', 'Data Berhasil Diupdate');
    // }

    // public function destroy($id)
    // {
    //     $this->db->table('izin_usaha')->where(['id_izin' => $id])->delete();
    //     return redirect()->to(site_url('perizinan'))->with('success', 'Data Berhasil Dihapus');
    // }
}
