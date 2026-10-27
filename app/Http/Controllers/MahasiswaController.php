<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function profil()
    {
        $nama = 'Budi';
        $nim = '242520114';
        $prodi = 'Teknologi Informasi';

        return view('mahasiswa.profil', compact('nama', 'nim', 'prodi'));
    }

    public function daftar()
    {
        $mahasiswa = [
            ['nama' => 'Budi', 'nim' => '242520114', 'ipk' => 3.95],
            ['nama' => 'Andi', 'nim' => '242520115', 'ipk' => 3.40],
            ['nama' => 'Siti', 'nim' => '242520116', 'ipk' => 3.70],
            ['nama' => 'Rina', 'nim' => '242520117', 'ipk' => 2.90],
            ['nama' => 'Doni', 'nim' => '242520118', 'ipk' => 1.13],
        ];

        return view('mahasiswa.daftar', compact('mahasiswa'));
    }

    public function detail($nim)
    {
        $mahasiswa = [
            ['nama' => 'Budi', 'nim' => '242520114', 'ipk' => 3.95],
            ['nama' => 'Andi', 'nim' => '242520115', 'ipk' => 3.40],
            ['nama' => 'Siti', 'nim' => '242520116', 'ipk' => 3.70],
            ['nama' => 'Rina', 'nim' => '242520117', 'ipk' => 2.90],
            ['nama' => 'Doni', 'nim' => '242520118', 'ipk' => 1.13],
        ];

        // Mencari mahasiswa berdasarkan NIM
        foreach ($mahasiswa as $m) {
            if ($m['nim'] == $nim) {
                return view('mahasiswa.detail', ['m' => $m]);
            }
        }

        // Jika NIM tidak ditemukan
        abort(404);
    }
}
