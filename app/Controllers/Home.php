<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('welcome_message');
    }

    public function belajar_segment()
    {
        $uri = service('uri');
        $parameter1 = $uri->getSegment(3);
        $parameter2 = $uri->getSegment(4);
        $parameter3 = $uri->getSegment(5);

        $data['p1'] = $parameter1;
        $data['p2'] = $parameter2;
        $data['p3'] = $parameter3;

        return view('segment_view', $data);
    }

    public function tugas()
{
    $data = [
        'mhs' => [
            ['nama' => 'Adhi', 'nilai' => 85],
            ['nama' => 'daoa', 'nilai' => 90],
            ['nama' => 'Daudy', 'nilai' => 75],
            ['nama' => 'Jonathan', 'nilai' => 65],
            ['nama' => 'Zain', 'nilai' => 95],
            ['nama' => 'tegar', 'nilai' => 70],
            ['nama' => 'Taufiq', 'nilai' => 40]
        ]
    ];

    return view('foreach', $data);
}

public function nilai()
{
    $data = ['nilai' => null];

    if ($this->request->getMethod() === 'POST') {
        $nilai = $this->request->getPost('nilai');
        
        if ($nilai >= 80) {
            $grade = 'A';
        } elseif ($nilai >= 70) {
            $grade = 'B';
        } elseif ($nilai >= 60) {
            $grade = 'C';
        } else {
            $grade = 'D';
        }

        if ($nilai >= 70) {
            $status = 'Lulus';
        } else {
            $status = 'Tidak Lulus';
        }

        $data = [
            'nilai'  => $nilai,
            'grade'  => $grade,
            'status' => $status
        ];
    }

    return view('halaman_nilai', $data);
}

}
