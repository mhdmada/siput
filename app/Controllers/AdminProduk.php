<?php

namespace App\Controllers;

use App\Models\ProdukModel;

class AdminProduk extends AdminBaseController
{
    public function index()
    {
         //cara 1 dengan query builder
         $builder = $this->db->table('produk');
         $query   = $builder->get();
 
         //cara 2
         // $query = $this->db->query("SELECT * FROM produk");

        $model = model(ProdukModel::class);
        $data = [
            'produk' => $model->paginate(5),
            'pager' => $model->pager,
        ];
 
        //  $data['produk'] = $query->getResult();
         return view('admin/produk/get', $data);
    }
    
    public function create()
    {
        return view('admin/produk/add');
    }

    public function store()
    {
        //include helper form
        helper(['form']);
        //setting rules buat validasi form
        $rules = [
            'nama_usaha' => 'required|min_length[3]|max_length[50]',
            'foto_produk' => 'required|min_length[3]|max_length[200]',
            'lokasi_usaha' => 'required|min_length[3]|max_length[200]',
            'nama_pemilik' => 'required|min_length[3]|max_length[50]',
            'no_hp' => 'required|numeric',
        ];

        if ($this->validate($rules)){
        $modelproduk = new ProdukModel();
            $dataproduk = [
                'nama_usaha' => $this->request->getVar('nama_usaha'),
                'foto_produk' => $this->request->getVar('foto_produk'),
                'lokasi_usaha' => $this->request->getVar('lokasi_usaha'),
                'nama_pemilik' => $this->request->getVar('nama_pemilik'),
                'no_hp' => $this->request->getVar('no_hp'),
            ];
            $modelproduk->save($dataproduk);

        } else {
            // redirect and show list error message 
            $data['validation'] = $this->validator;
            echo view('admin/produk/add', $data);
        }

        if($this->db->affectedRows() > 0 ) {
            return redirect()->to(site_url('admin/produk'))->with('success', 'Data Berhasil Disimpan');
        }
    }

    public function edit($id = null)
    {
        if($id != null){
            $query = $this->db->table('produk')->getWhere(['id_produk' => $id]);
            if($query->resultID->num_rows > 0) {
                $data['produk'] = $query->getRow();
                return view('admin/produk/edit', $data);
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
        
        $this->db->table('produk')->where(['id_produk' => $id])->update($data);
        return redirect()->to(site_url('admin/produk'))->with('success', 'Data Berhasil Diupdate');
    }

    public function destroy($id)
    {
        $this->db->table('produk')->where(['id_produk' => $id])->delete();
        return redirect()->to(site_url('admin/produk'))->with('success', 'Data Berhasil Dihapus');
    }
}
