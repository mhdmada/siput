<?php

namespace App\Controllers;

class Pelatihan extends BaseController
{
    public function index()
    {
         //cara 1 dengan query builder
         $builder = $this->db->table('pelatihan');
         $query   = $builder->get();
 
         //cara 2
         // $query = $this->db->query("SELECT * FROM pelatihan");
 
         $data['pelatihan'] = $query->getResult();
         return view('pelatihan/get', $data);
    }
    
    public function create()
    {
        return view('pelatihan/add');
    }

    public function store()
    {
        $data =$this->request->getPost();

        $this->db->table('pelatihan')->insert($data);

        if($this->db->affectedRows() > 0 ) {
            return redirect()->to(site_url('pelatihan'))->with('success', 'Data Berhasil Disimpan');
        }
    }

    public function edit($id = null)
    {
        if($id != null){
            $query = $this->db->table('pelatihan')->getWhere(['id_pelatihan' => $id]);
            if($query->resultID->num_rows > 0) {
                $data['pelatihan'] = $query->getRow();
                return view('pelatihan/edit', $data);
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
            'nama_pelatihan' => $this->request->getVar('nama_pelatihan'),
            'jadwal_pelatihan' => $this->request->getVar('jadwal_pelatihan'),
            'lokasi_pelatihan' => $this->request->getVar('lokasi_pelatihan'),
        ];
        
        $this->db->table('pelatihan')->where(['id_pelatihan' => $id])->update($data);
        return redirect()->to(site_url('pelatihan'))->with('success', 'Data Berhasil Diupdate');
    }

    public function destroy($id)
    {
        $this->db->table('pelatihan')->where(['id_pelatihan' => $id])->delete();
        return redirect()->to(site_url('pelatihan'))->with('success', 'Data Berhasil Dihapus');
    }
}
