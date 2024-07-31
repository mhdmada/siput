<?php

namespace App\Controllers;
use App\Models\SyaratPelatihanModel;
use App\Models\PendaftaranModel;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class PelatihanDinas extends BaseController
{
    public function index()
    {
        $model = new SyaratPelatihanModel();
        $data['syarat_pelatihan'] = $model->findAll();

        return view('pelatihan_dinas/get',$data);
    }

    public function persyaratan()
    {
        $model = new SyaratPelatihanModel();
        $data['syarat_pelatihan'] = $model->findAll();

        return view('pelatihan_dinas/persyaratan',$data);
    }

    public function daftar()
    {
        return view('pelatihan_dinas/daftar');
    }

    public function save()
    {
        if (!$this->validate([
            'nama_lengkap' => 'required',
            'file_ktp' => [
                'rules' => 'uploaded[file_ktp]|mime_in[file_ktp,application/msword,application/vnd.openxmlformats-officedocument.wordprocessingml.document,application/pdf]|max_size[file_ktp,5120]',
                'errors' => [
                    'uploaded' => 'File KTP harus diupload',
                    'mime_in' => 'File KTP harus berformat PDF,DOC,DOCX',
                    'max_size' => 'Ukuran file KTP maksimal 5 MB'
                ]
            ],
            'file_kk' => [
                'rules' => 'uploaded[file_kk]|mime_in[file_kk,application/msword,application/vnd.openxmlformats-officedocument.wordprocessingml.document,application/pdf]|max_size[file_kk,5120]',
                'errors' => [
                    'uploaded' => 'File KK harus diupload',
                    'mime_in' => 'File KK harus berformat PDF,DOC,DOCX',
                    'max_size' => 'Ukuran file KK maksimal 5 MB'
                ]
            ],
            'file_nib' => [
                'rules' => 'uploaded[file_nib]|mime_in[file_nib,application/msword,application/vnd.openxmlformats-officedocument.wordprocessingml.document,application/pdf]|max_size[file_nib,5120]',
                'errors' => [
                    'uploaded' => 'File NIB harus diupload',
                    'mime_in' => 'File NIB harus berformat PDF,DOC,DOCX',
                    'max_size' => 'Ukuran file NIB maksimal 5 MB'
                ]
            ],
            'file_npwp' => [
                'rules' => 'uploaded[file_npwp]|mime_in[file_npwp,application/msword,application/vnd.openxmlformats-officedocument.wordprocessingml.document,application/pdf]|max_size[file_npwp,5120]',
                'errors' => [
                    'uploaded' => 'File NPWP harus diupload',
                    'mime_in' => 'File NPWP harus berformat PDF,DOC,DOCX',
                    'max_size' => 'Ukuran file NPWP maksimal 5 MB'
                ]
            ]
        ])) {
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->back()->withInput();
        }

        $pendaftaran = new PendaftaranModel();
        $nama_lengkap = $this->request->getVar('nama_lengkap');
        $files = ['file_ktp', 'file_kk', 'file_nib', 'file_npwp'];
        $fileNames = [];

        foreach ($files as $file) {
            $dataFile = $this->request->getFile($file);
            $fileName = $dataFile->getName();

            $targetPath = 'uploads/berkas/' . $fileName;
            if (file_exists($targetPath)) {
                $fileInfo = pathinfo($fileName);
                $baseName = $fileInfo['filename'];
                $extension = $fileInfo['extension'];
                $counter = 1;

                while (file_exists('uploads/berkas/' . $baseName . '_' . $counter . '.' . $extension)) {
                    $counter++;
                }

                $fileName = $baseName . '_' . $counter . '.' . $extension;
            }

            $dataFile->move('uploads/berkas/', $fileName);
            $fileNames[$file] = $fileName;
        }

        $pendaftaran->insert([
            'nama_lengkap' => $nama_lengkap,
            'file_ktp' => $fileNames['file_ktp'],
            'file_kk' => $fileNames['file_kk'],
            'file_nib' => $fileNames['file_nib'],
            'file_npwp' => $fileNames['file_npwp']
        ]);

        session()->setFlashdata('success', 'Pendaftaran berhasil');
        return redirect()->to(site_url('pelatihan_dinas/berhasil_daftar'));
    }

    public function berhasil()
    {
        $model = new SyaratPelatihanModel();
        $data['syarat_pelatihan'] = $model->findAll();

        return view('pelatihan_dinas/berhasil_daftar',$data);
    }
}
