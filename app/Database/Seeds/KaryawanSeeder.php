<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class KaryawanSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'nama'       => 'Administrator Utama',
                'jabatan'    => 'IT Support / Admin',
                'role'       => 'admin',
                'password'   => password_hash('admin123', PASSWORD_BCRYPT),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'nama'       => 'Budi Santoso',
                'jabatan'    => 'Staff Logistik',
                'role'       => 'staff',
                'password'   => password_hash('staff123', PASSWORD_BCRYPT),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
        ];

        $this->db->table('karyawan')->insertBatch($data);
    }
}
