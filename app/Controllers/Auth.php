<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Auth extends BaseController
{
    public function index()
    {
        // Jika user sudah login, langsung lempar ke dashboard
        if (session()->get('isLoggedIn')) {
            return redirect()->to('/dashboard');
        }

        return view('auth/login');
    }

    public function loginProcess()
    {
        $session = session();
        $db      = \Config\Database::connect();

        $nama     = $this->request->getPost('nama');
        $password = $this->request->getPost('password');

        // Cari karyawan berdasarkan nama
        $user = $db->table('karyawan')->where('nama', $nama)->get()->getRowArray();

        if ($user) {
            // Verifikasi password hash
            if (password_verify($password, $user['password'])) {
                $sessionData = [
                    'id_karyawan' => $user['id'],
                    'nama'        => $user['nama'],
                    'role'        => $user['role'],
                    'jabatan'     => $user['jabatan'],
                    'isLoggedIn'  => true,
                ];
                $session->set($sessionData);

                return redirect()->to('/dashboard');
            } else {
                $session->setFlashdata('error', 'Password yang kamu masukkan salah!');
                return redirect()->to('/login');
            }
        } else {
            $session->setFlashdata('error', 'Nama akun tidak ditemukan!');
            return redirect()->to('/login');
        }
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/login');
    }
}
