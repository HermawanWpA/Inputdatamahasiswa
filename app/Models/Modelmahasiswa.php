<?php

namespace App\Models;

use CodeIgniter\Model;

class Modelmahasiswa extends Model
{
    public function __construct()
    {
        $this->connect = db_connect();
        // $this->validation = \Config\Services::validation();
        // $this->session = session();
    }
    public function getAllData()
    {
        return $this->connect->table('mahasiswa')->get();
    }

    public function tambah($data)
    {
        return $this->connect->table('mahasiswa')->insert($data);
    }
    public function hapus($id)
    {
        return $this->connect->table('mahasiswa')->delete(['mhs_nim' => $id]);
    }
}
