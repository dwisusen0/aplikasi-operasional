<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\KaryawanModel;

class Karyawan extends BaseController
{
    protected $karyawanModel;

    public function __construct()
    {
        $this->karyawanModel = new KaryawanModel();
    }

    public function index()
    {
        $data = [
            'title'    => 'Data Karyawan',
            'karyawan' => $this->karyawanModel->findAll()
        ];

        return view('karyawan/index', $data);
    }

    // --- TAMBAHKAN DUA METHOD DI BAWAH INI ---

    // Menampilkan Form Tambah Karyawan
    public function create()
    {
        $data = ['title' => 'Tambah Data Karyawan'];
        return view('karyawan/create', $data);
    }

    // Memproses simpan data dari Form
    public function store()
    {
        $this->karyawanModel->save([
            'username'  => $this->request->getPost('username'),
            'nama'      => $this->request->getPost('nama'),
            'password'  => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT),
            'jabatan'   => $this->request->getPost('jabatan'),
            'role'      => $this->request->getPost('role'),
            'created_at'=> $this->request->getPost('created_at'),
        ]);

        return redirect()->to('/karyawan')->with('success', 'Karyawan berhasil ditambahkan!');
    }
}