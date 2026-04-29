<?php

namespace App\Controllers;

class Latihan extends BaseController
{
   
    public function contoh_if()
    {
        $data = [
            'judul' => 'Tugas 1: Percabangan IF ELSE',
            'nilai_ujian' => 70 
        ];
        return view('view_if', $data);
    }

    public function contoh_for()
    {
        $data = [
            'judul' => 'Tugas 2: Perulangan FOR'
        ];
        return view('view_for', $data);
    }

    public function contoh_foreach()
    {
        $data = [
            'judul' => 'Tugas 3: Perulangan FOREACH',
            'daftar_mahasiswa' => ['Adhi', 'Daudy', 'Taufiq', 'Jonathan'] 
        ];
        return view('view_foreach', $data);
    }
}