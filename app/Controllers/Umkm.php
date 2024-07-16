<?php

namespace App\Controllers;

use App\Models\UmkmModel;

class Umkm extends BaseController
{
    public function index()
    {
        //cara 1 dengan query builder
        $builder = $this->db->table('umkm');
        $query   = $builder->get();

        //cara 2
        // $query = $this->db->query("SELECT * FROM umkm ");

        $model = model(UmkmModel::class);
        $data = [
            'umkm' => $model->paginate(5),
            'pager' => $model->pager,
        ];
        // $data['umkm'] = $query->getResult();
        return view('umkm/get', $data);
    }

    // public function create()
    // {
    //     return view('umkm/add');
    // }

    // public function store()
    // {
    //     //include helper form
    //     helper(['form']);
    //     //setting rules buat validasi form
    //     $rules = [
    //         'nik' => 'required|numeric',
    //         'nama' => 'required|min_length[3]|max_length[50]',
    //         'nama_usaha' => 'required|min_length[3]|max_length[50]',
    //         'alamat' => 'required|min_length[3]|max_length[50]',
    //         'kelurahan' => 'required|min_length[3]|max_length[50]',
    //         'kecamatan' => 'required|min_length[3]|max_length[50]',
    //         'alamat_usaha' => 'required|min_length[3]|max_length[50]',
    //         'bidang_usaha' => 'required|min_length[10]|max_length[50]',
    //         'nib' => 'required|min_length[6]|max_length[50]',
    //         'npwp' => 'required|min_length[6]|max_length[50]',
    //         'omzet_biaya' => 'required|min_length[6]|max_length[200]',
    //         'jumlah_tenaga_kerja' => 'required|numeric',
    //         'no_hp' => 'required|numeric',
    //     ];

    //     if ($this->validate($rules)){
    //     $modelumkm = new UmkmModel();
    //         $dataumkm = [
    //             'nik' => $this->request->getVar('nik'),
    //             'nama' => $this->request->getVar('nama'),
    //             'nama_usaha' => $this->request->getVar('nama_usaha'),
    //             'alamat' => $this->request->getVar('alamat'),
    //             'kelurahan' => $this->request->getVar('kelurahan'),
    //             'kecamatan' => $this->request->getVar('kecamatan'),
    //             'alamat_usaha' => $this->request->getVar('alamat_usaha'),
    //             'bidang_usaha' => $this->request->getVar('bidang_usaha'),
    //             'nib' => $this->request->getVar('nib'),
    //             'npwp' => $this->request->getVar('npwp'),
    //             'omzet_biaya' => $this->request->getVar('omzet_biaya'),
    //             'jumlah_tenaga_kerja' => $this->request->getVar('jumlah_tenaga_kerja'),
    //             'no_hp' => $this->request->getVar('no_hp'),
    //         ];
    //         $modelumkm->save($dataumkm);

    //     } else {
    //         // redirect and show list error message 
    //         $data['validation'] = $this->validator;
    //         echo view('umkm/add', $data);
    //     }

    //     if($this->db->affectedRows() > 0 ) {
    //         return redirect()->to(site_url('umkm'))->with('success', 'Data Berhasil Disimpan');
    //     }
    // }

    public function edit($id = null)
    {
        if($id != null){
            $query = $this->db->table('umkm')->getWhere(['id_umkm' => $id]);
            if($query->resultID->num_rows > 0) {
                $data['umkm'] = $query->getRow();
                return view('umkm/edit', $data);
            } else {
                throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
            }
        } else {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }
    }

    public function update($id)
    {
        // cara 1
        // $data =$this->request->getPost();
        // unset($data['_method']);

        //  cara 2 : name spesifik
        $data = [
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
        
        $this->db->table('umkm')->where(['id_umkm' => $id])->update($data);
        return redirect()->to(site_url('umkm'))->with('success', 'Data Berhasil Diupdate');
    }

    // public function destroy($id)
    // {
    //     $this->db->table('umkm')->where(['id_umkm' => $id])->delete();
    //     return redirect()->to(site_url('umkm'))->with('success', 'Data Berhasil Dihapus');
    // }
}