<?php

namespace App\Controllers;

class Penjualan extends BaseController
{
    public function index()
    {
         //cara 1 dengan query builder
         $builder = $this->db->table('penjualan');
         $query   = $builder->get();
 
         //cara 2
         // $query = $this->db->query("SELECT * FROM pelatihan");
 
         $data['penjualan'] = $query->getResult();
         return view('penjualan/get', $data);
    }
    
    public function create()
    {
        return view('penjualan/add');
    }

    public function store()
    {
        $data =$this->request->getPost();

        $this->db->table('penjualan')->insert($data);

        if($this->db->affectedRows() > 0 ) {
            return redirect()->to(site_url('penjualan'))->with('success', 'Data Berhasil Disimpan');
        }
    }

    public function edit($id = null)
    {
        if($id != null){
            $query = $this->db->table('penjualan')->getWhere(['id_penjualan' => $id]);
            if($query->resultID->num_rows > 0) {
                $data['penjualan'] = $query->getRow();
                return view('penjualan/edit', $data);
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
            'nama_usaha' => $this->request->getVar('nama_usaha'),
            'foto_produk' => $this->request->getFile('foto_produk'),
            'lokasi_usaha' => $this->request->getVar('lokasi_usaha'),
            'nama_pemilik' => $this->request->getVar('nama_pemilik'),
            'no_hp' => $this->request->getVar('no_hp'),
        ];
        
        $this->db->table('penjualan')->where(['id_penjualan' => $id])->update($data);
        return redirect()->to(site_url('penjualan'))->with('success', 'Data Berhasil Diupdate');
    }

    public function destroy($id)
    {
        $this->db->table('penjualan')->where(['id_penjualan' => $id])->delete();
        return redirect()->to(site_url('penjualan'))->with('success', 'Data Berhasil Dihapus');
    }
}
