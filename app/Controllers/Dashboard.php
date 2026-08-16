<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Dashboard extends BaseController
{
    public function index()
    {
        $db = \Config\Database::connect();

        $data = [
            'title'          => 'Dashboard Utama',
            'total_karyawan' => $db->table('karyawan')->countAllResults(),
            'total_barang'   => $db->table('barang')->countAllResults(),
        ];

        return view('dashboard/index', $data);
    }
}
