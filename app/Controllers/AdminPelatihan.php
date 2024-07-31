<?php

namespace App\Controllers;

use App\Models\PelatihanModel;

class AdminPelatihan extends AdminBaseController
{
    public function index()
    {
         //cara 1 dengan query builder
        //  $builder = $this->db->table('pelatihan');
        //  $query   = $builder->get();
 
         //cara 2
        //  $query = $this->db->query("SELECT * FROM pelatihan");

        $model = model(PelatihanModel::class);

        // Ambil keyword dari input pencarian
        $keyword = $this->request->getVar('keyword');
        
        // Cek apakah ada keyword yang diinputkan
        if ($keyword) {
            $model->like('nama_pelatihan', $keyword)
                  ->orLike('jadwal_pelatihan', $keyword)
                  ->orLike('lokasi_pelatihan', $keyword)
                  ->orLike('link_pendaftaran', $keyword)
                  ->orLike('deskripsi_pelatihan', $keyword);
        }

        // Hitung total hasil pencarian
        $totalResults = $model->countAllResults(false);

        $data = [
            'pelatihan' => $model->paginate(5),
            'pager' => $model->pager,
            'noResults' => ($totalResults == 0), // Cek jika tidak ada hasil
            'totalResults' => $totalResults // Kirim total hasil pencarian ke view
        ];
 
        //  $data['pelatihan'] = $query->getResult();
         return view('admin/pelatihan/get', $data);
    }
    
    public function create()
    {
        return view('admin/pelatihan/add');
    }

    public function store()
    {
         //include helper form
         helper(['form']);
         //setting rules buat validasi form
         $rules = [
             'nama_pelatihan' => 'required|min_length[3]|max_length[50]',
             'jadwal_pelatihan' => 'required|date',
             'lokasi_pelatihan' => 'required|min_length[3]|max_length[100]',
             'link_pendaftaran' => 'required|min_length[3]|max_length[100]',
             'deskripsi_pelatihan' => 'required|min_length[3]|max_length[225]',
         ];
 
         if ($this->validate($rules)){
         $modelpelatihan = new PelatihanModel();
             $datapelatihan = [
                 'nama_pelatihan' => $this->request->getVar('nama_pelatihan'),
                 'jadwal_pelatihan' => $this->request->getVar('jadwal_pelatihan'),
                 'lokasi_pelatihan' => $this->request->getVar('lokasi_pelatihan'),
                 'link_pendaftaran' => $this->request->getVar('link_pendaftaran'),
                 'deskripsi_pelatihan' => $this->request->getVar('deskripsi_pelatihan'),
             ];
             $modelpelatihan->save($datapelatihan);
 
         } else {
             // redirect and show list error message 
             $data['validation'] = $this->validator;
             echo view('admin/pelatihan/add', $data);
         }

        if($this->db->affectedRows() > 0 ) {
            return redirect()->to(site_url('admin/pelatihan'))->with('success', 'Data Berhasil Disimpan');
        }
    }

    public function edit($id = null)
    {
        if($id != null){
            $query = $this->db->table('pelatihan')->getWhere(['id_pelatihan' => $id]);
            if($query->resultID->num_rows > 0) {
                $data['pelatihan'] = $query->getRow();
                return view('admin/pelatihan/edit', $data);
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
            'link_pendaftaran' => $this->request->getVar('link_pendaftaran'),
            'deskripsi_pelatihan' => $this->request->getVar('deskripsi_pelatihan'),
        ];
        
        $this->db->table('pelatihan')->where(['id_pelatihan' => $id])->update($data);
        return redirect()->to(site_url('admin/pelatihan'))->with('success', 'Data Berhasil Diupdate');
    }

    public function destroy($id)
    {
        $this->db->table('pelatihan')->where(['id_pelatihan' => $id])->delete();
        return redirect()->to(site_url('admin/pelatihan'))->with('success', 'Data Berhasil Dihapus');
    }
}
