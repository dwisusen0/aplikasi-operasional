<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\BarangModel;

class Barang extends BaseController
{
    protected $barangModel;

    public function __construct()
    {
        $this->barangModel = new BarangModel();
    }

    // Tampilkan daftar barang
    public function index()
    {
        $data = [
            'title' => 'Data Barang Logistik',
            'barang' => $this->barangModel->findAll()
        ];

        return view('barang/index', $data);
    }

    // Form Tambah Barang
    public function create()
    {
        $data = ['title' => 'Tambah Barang Baru'];
        return view('barang/create', $data);
    }

    // Proses Simpan Data
    public function store()
    {
        $this->barangModel->save([
            'kode_barang' => $this->request->getPost('kode_barang'),
            'nama_barang' => $this->request->getPost('nama_barang'),
            'stok'        => $this->request->getPost('stok'),
            'satuan'      => $this->request->getPost('satuan'),
            'keterangan'  => $this->request->getPost('keterangan'),
        ]);

        return redirect()->to('/barang')->with('success', 'Data barang berhasil ditambahkan!');
    }

    // Hapus Data
    public function delete($id)
    {
        $this->barangModel->delete($id);
        return redirect()->to('/barang')->with('success', 'Data barang berhasil dihapus!');
    }
}
