<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class AuthController extends BaseController
{
    protected $defaultUsername;
    protected $defaultPassword;

    public function __construct()
    {
        // Username dan password yang ditentukan
        $this->defaultUsername = 'admin';
        $this->defaultPassword = '123'; // Pastikan gunakan hashing untuk password yang sebenarnya
    }

    public function index()
    {
        // Tampilkan halaman login
        return view('auth/login');
    }

    public function login()
    {
        // Ambil data dari form login
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        // Validasi input
        if (!$this->validate([
            'username' => 'required',
            'password' => 'required'
        ])) {
            return redirect()->back()->with('error', 'Username dan password wajib diisi')->withInput();
        }

        // Periksa kredensial yang telah ditentukan
        if ($username === $this->defaultUsername && $password === $this->defaultPassword) {
            // Simpan data ke session
            session()->set([
                'isLoggedIn' => true,
                'username' => $username
            ]);

            return redirect()->to('/Home')->with('success', 'Berhasil login!');
        } else {
            return redirect()->back()->with('error', 'Username atau password salah')->withInput();
        }
    }

    public function logout()
    {
        // Hapus semua data di session
        session()->destroy();

        return redirect()->to('/auth')->with('success', 'Berhasil logout');
}
}