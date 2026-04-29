<?php

namespace App\Controllers;
use App\Models\M_Admin;

class Admin extends BaseController
{
    public function login()
    {
        return view('Backend/Login/login');
    }
    public function autentikasi()
    {
        $modelAdmin = new M_Admin();
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        $cekUsername = $modelAdmin->getDataAdmin(['username_admin' => $username, 'is_delete_admin' => '0'])->getNumRows();

        if($cekUsername == 0) {
            session()->setFlashdata('error', 'Username Tidak Ditemukan!');
            ?>
            <script>history.go(-1);</script>
            <?php
        } else {
            $dataUser = $modelAdmin->getDataAdmin(['username_admin' => $username, 'is_delete_admin' => '0'])->getRowArray();
            $passwordUser = $dataUser['password_admin'];

            
            $verifikasiPassword = password_verify($password, $passwordUser);

            if(!$verifikasiPassword) {
                session()->setFlashdata('error', 'Password Tidak Sesuai!');
                ?>
                <script>history.go(-1);</script>
                <?php
            } else {
                $dataSession = [
                    'ses_id'    => $dataUser['id_admin'],
                    'ses_user'  => $dataUser['nama_admin'],
                    'ses_level' => $dataUser['akses_level']
                ];
                session()->set($dataSession);
                session()->setFlashdata('success', 'Login Berhasil!');
                ?>
                <script>document.location = "<?= base_url('admin/dashboard-admin'); ?>";</script>
                <?php
            }
        }
    }
    public function dashboard()
    {
       if (session()->get('ses_id') == "" or session()->get('ses_user') == "" or session()->get('ses_level') == "") {
            session()->setFlashdata('error', 'Silakan login terlebih dahulu!');
            ?>
            <script>document.location = "<?= base_url('admin/login-admin'); ?>";</script>
            <?php
        } else {
            echo view('Backend/Template/header');
            echo view('Backend/Template/sidebar');
            echo view('Backend/Login/dashboard_admin');
            echo view('Backend/Template/footer');
    }
    }

    public function logout()
    {
        session()->remove('ses_id');
        session()->remove('ses_user');
        session()->remove('ses_level');
        session()->setFlashdata('info', 'Logout Berhasil!');
        ?>
        <script>document.location = "<?= base_url('admin/login-admin'); ?>";</script>
        <?php
    }

}