<?php

namespace App\Controllers;

use App\Models\RekapModel;

use App\Controllers\AdminBaseController;
use CodeIgniter\HTTP\ResponseInterface;

class AdminRekap extends AdminBaseController
{
    public function __construct()
    {
        $this->model = new RekapModel();
        $this->helpers = ['form', 'url'];
    }

    public function index()
    {
        $model = model(RekapModel::class);

        // Ambil keyword dari input pencarian
        $keyword = $this->request->getVar('keyword');
        
        // Cek apakah ada keyword yang diinputkan
        if ($keyword) {
            $model->like('nama_pelatihan', $keyword)
                  ->orLike('jadwal_pelatihan', $keyword)
                  ->orLike('lokasi_pelatihan', $keyword)
                  ->orLike('jumlah_peserta', $keyword);
        }

        // Hitung total hasil pencarian
        $totalResults = $model->countAllResults(false);

        $data = [
            'rekap' => $model->paginate(10),
            'pager' => $model->pager,
            'keyword' => $keyword, // Tambahkan keyword ke data untuk dikirim ke view
            'noResults' => ($totalResults == 0), // Cek jika tidak ada hasil
            'totalResults' => $totalResults // Kirim total hasil pencarian ke view
        ];
 
        //  $data['pelatihan'] = $query->getResult();
         return view('admin/rekap/get', $data);
    }

    public function create()
    {
        return view('admin/rekap/add');
    }

    public function store()
    {
        // Include helper form
        helper(['form']);
        
        // Setting rules buat validasi form
        $rules = [
            'nama_pelatihan' => 'required|min_length[3]|max_length[50]',
            'jadwal_pelatihan' => 'required|valid_date',
            'lokasi_pelatihan' => 'required|min_length[3]|max_length[100]',
            'jumlah_peserta' => 'required|integer|max_length[1000]',
        ];

        if ($this->validate($rules)) {
            $model = new RekapModel();
            $datarekap = [
                'nama_pelatihan' => $this->request->getVar('nama_pelatihan'),
                'jadwal_pelatihan' => $this->request->getVar('jadwal_pelatihan'),
                'lokasi_pelatihan' => $this->request->getVar('lokasi_pelatihan'),
                'jumlah_peserta' => $this->request->getVar('jumlah_peserta'),
            ];
            $model->save($datarekap);

            return redirect()->to(site_url('admin/rekap'))->with('success', 'Data Berhasil Disimpan');
        } else {
            // Redirect and show list error message 
            $data['validation'] = $this->validator;
            return view('admin/rekap/add', $data);
        }
    }

    public function edit($id)
    {
        $model = new RekapModel();
        $data['rekap'] = $model->find($id);

        return view('admin/rekap/edit', $data);
    }

    public function update($id)
    {
        helper(['form']);

        $rules = [
            'nama_pelatihan' => 'required|min_length[3]|max_length[50]',
            'jadwal_pelatihan' => 'required|valid_date',
            'lokasi_pelatihan' => 'required|min_length[3]|max_length[100]',
            'jumlah_peserta' => 'required|integer|max_length[1000]',
        ];

        if ($this->validate($rules)) {
            $model = new RekapModel();
            $datarekap = [
                'nama_pelatihan' => $this->request->getVar('nama_pelatihan'),
                'jadwal_pelatihan' => $this->request->getVar('jadwal_pelatihan'),
                'lokasi_pelatihan' => $this->request->getVar('lokasi_pelatihan'),
                'jumlah_peserta' => $this->request->getVar('jumlah_peserta'),
            ];
            $model->update($id, $datarekap);

            return redirect()->to(site_url('admin/rekap'))->with('success', 'Data Berhasil Diupdate');
        } else {
            // Redirect and show list error message 
            $data['validation'] = $this->validator;
            $data['rekap'] = $model->find($id);
            return view('admin/rekap/edit', $data);
        }
    }
    public function destroy($id)
    {
        $model = new RekapModel();
        $model->delete($id);

        return redirect()->to(site_url('admin/rekap'))->with('success', 'Data Berhasil Dihapus');
    }
}
