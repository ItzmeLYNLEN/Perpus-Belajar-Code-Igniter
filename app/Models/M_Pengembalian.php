<?php

namespace App\Models;
use CodeIgniter\Model;

class M_Pengembalian extends Model
{
    protected $table = 'tbl_pengembalian';

    public function getDataPengembalian($where = false)
    {
        $builder = $this->db->table($this->table);
        $builder->select('*');
        $builder->join('tbl_peminjaman', 'tbl_peminjaman.no_peminjaman = tbl_pengembalian.no_peminjaman', 'LEFT');
        $builder->join('tbl_anggota', 'tbl_anggota.id_anggota = tbl_peminjaman.id_anggota', 'LEFT');
        $builder->join('tbl_admin', 'tbl_admin.id_admin = tbl_pengembalian.id_admin', 'LEFT');
        
        if ($where !== false) {
            $builder->where($where);
        }
        
        $builder->orderBy('tbl_pengembalian.tgl_pengembalian', 'DESC');
        return $builder->get();
    }

    public function saveDataPengembalian($data)
    {
        $builder = $this->db->table($this->table);
        return $builder->insert($data);
    }
}