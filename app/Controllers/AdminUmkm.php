<?php

namespace App\Controllers;

use App\Models\UmkmModel;

class AdminUmkm extends AdminBaseController
{
    public function __construct()
    {
        $this->model = new UmkmModel();
        $this->helpers = ['form', 'url'];
    }

    public function index()
    {
        //cara 1 dengan query builder
        // $builder = $this->db->table('umkm');
        // $query   = $builder->get();

        //cara 2
        // $query = $this->db->query("SELECT * FROM umkm");

        $model = model(UmkmModel::class);

        // Ambil keyword dari input pencarian
        $keyword = $this->request->getVar('keyword');
        
        // Cek apakah ada keyword yang diinputkan
        if ($keyword) {
            $model->like('nik', $keyword)
                  ->orLike('nama', $keyword)
                  ->orLike('nama_usaha', $keyword)
                  ->orLike('alamat', $keyword)
                  ->orLike('kelurahan', $keyword)
                  ->orLike('kecamatan', $keyword)
                  ->orLike('alamat_usaha', $keyword)
                  ->orLike('bidang_usaha', $keyword)
                  ->orLike('nib', $keyword)
                  ->orLike('npwp', $keyword)
                  ->orLike('omzet_biaya', $keyword)
                  ->orLike('aset', $keyword)
                  ->orLike('jumlah_tenaga_kerja', $keyword)
                  ->orLike('no_hp', $keyword);
        }

        // Hitung total hasil pencarian
        $totalResults = $model->countAllResults(false);

        $data = [
            'umkm' => $model->paginate(5),
            'pager' => $model->pager,
            'keyword' => $keyword, // Tambahkan keyword ke data untuk dikirim ke view
            'noResults' => ($totalResults == 0), // Cek jika tidak ada hasil
            'totalResults' => $totalResults // Kirim total hasil pencarian ke view
        ];

        return view('admin/umkm/get', $data);
    }

    public function create()
    {
        return view('admin/umkm/add');
    }

    public function store()
    {
        //include helper form
        helper(['form']);
        //setting rules buat validasi form
        $rules = [
            'nik' => 'required|numeric',
            'nama' => 'required|min_length[3]|max_length[200]',
            'nama_usaha' => 'required|min_length[3]|max_length[200]',
            'alamat' => 'required|min_length[3]|max_length[200]',
            'kelurahan' => 'required|min_length[3]|max_length[200]',
            'kecamatan' => 'required|min_length[3]|max_length[200]',
            'alamat_usaha' => 'required|min_length[3]|max_length[200]',
            'bidang_usaha' => 'required|min_length[1]|max_length[200]',
            'nib' => 'required|min_length[6]|max_length[200]',
            'npwp' => 'required|min_length[5]|max_length[200]',
            'omzet_biaya' => 'required|min_length[6]|max_length[200]',
            'aset' => 'required|min_length[1]|max_length[200]',
            'jumlah_tenaga_kerja' => 'required|numeric',
            'no_hp' => 'required|min_length[1]|max_length[20]',
        ];

        if ($this->validate($rules)){
        $modelumkm = new UmkmModel();
            $dataumkm = [
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
                'aset' => $this->request->getVar('aset'),
                'jumlah_tenaga_kerja' => $this->request->getVar('jumlah_tenaga_kerja'),
                'no_hp' => $this->request->getVar('no_hp'),
            ];
            $modelumkm->save($dataumkm);

        } else {
            // redirect and show list error message 
            $data['validation'] = $this->validator;
            echo view('admin/umkm/add', $data);
        }

        if($this->model->affectedRows() > 0 ) {
            return redirect()->to(site_url('admin/umkm'))->with('success', 'Data Berhasil Disimpan');
        }
    }

    public function edit($id = null)
    {
        if($id != null){
            $query = $this->model->table('umkm')->getWhere(['id_umkm' => $id]);
            if($query->resultID->num_rows > 0) {
                $data['umkm'] = $query->getRow();
                return view('admin/umkm/edit', $data);
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
            'aset' => $this->request->getVar('aset'),
            'jumlah_tenaga_kerja' => $this->request->getVar('jumlah_tenaga_kerja'),
            'no_hp' => $this->request->getVar('no_hp'),
        ];
        
        $this->model->table('umkm')->where(['id_umkm' => $id])->update($data);
        return redirect()->to(site_url('admin/umkm'))->with('success', 'Data Berhasil Diupdate');
    }

    public function destroy($id)
    {
        $this->model->table('umkm')->where(['id_umkm' => $id])->delete();
        return redirect()->to(site_url('admin/umkm'))->with('success', 'Data Berhasil Dihapus');
    }
}