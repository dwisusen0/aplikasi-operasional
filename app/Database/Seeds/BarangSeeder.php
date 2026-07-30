<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class BarangSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'kode_barang' => 'BRG-001',
                'nama_barang' => 'Beras Kepala Premium 10kg',
                'stok'        => 25,
                'satuan'      => 'Karung',
                'min_stok'    => 5,
                'created_at'  => date('Y-m-d H:i:s'),
                'updated_at'  => date('Y-m-d H:i:s'),
            ],
            [
                'kode_barang' => 'BRG-002',
                'nama_barang' => 'Minyak Goreng 2 Liter',
                'stok'        => 40,
                'satuan'      => 'Pouch',
                'min_stok'    => 10,
                'created_at'  => date('Y-m-d H:i:s'),
                'updated_at'  => date('Y-m-d H:i:s'),
            ],
            [
                'kode_barang' => 'BRG-003',
                'nama_barang' => 'Sarung Tangan Kerja Safety',
                'stok'        => 15,
                'satuan'      => 'Pasang',
                'min_stok'    => 5,
                'created_at'  => date('Y-m-d H:i:s'),
                'updated_at'  => date('Y-m-d H:i:s'),
            ],
            [
                'kode_barang' => 'BRG-004',
                'nama_barang' => 'Solar B35 (Industrial)',
                'stok'        => 500,
                'satuan'      => 'Liter',
                'min_stok'    => 100,
                'created_at'  => date('Y-m-d H:i:s'),
                'updated_at'  => date('Y-m-d H:i:s'),
            ],
        ];

        $this->db->table('barang')->insertBatch($data);
    }
}
