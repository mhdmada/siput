<?php

namespace App\Controllers;

class Umkm extends BaseController
{
    public function index()
    {
        //cara 1 dengan query builder
        $builder = $this->db->table('umkm');
        $query   = $builder->get();

        //cara 2
        // $query = $this->db->query("SELECT * FROM umkm");

        $data['umkm'] = $query->getResult();
        return view('umkm/get', $data);
    }

    public function create()
    {
        return view('umkm/add');
    }

    public function store()
    {
        $data =$this->request->getPost();

        $this->db->table('umkm')->insert($data);

        if($this->db->affectedRows() > 0 ) {
            return redirect()->to(site_url('umkm'))->with('success', 'Data Berhasil Disimpan');
        }
    }

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
            'no_hp' => $this->request->getVar('no_hp'),
        ];
        
        $this->db->table('umkm')->where(['id_umkm' => $id])->update($data);
        return redirect()->to(site_url('umkm'))->with('success', 'Data Berhasil Diupdate');
    }

    public function destroy($id)
    {
        $this->db->table('umkm')->where(['id_umkm' => $id])->delete();
        return redirect()->to(site_url('umkm'))->with('success', 'Data Berhasil Dihapus');
    }
}