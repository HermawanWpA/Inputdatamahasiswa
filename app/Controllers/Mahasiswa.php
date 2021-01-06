<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Modelmahasiswa;

class Mahasiswa extends Controller
{

    public function __construct()
    {
        // helper('form');
        // $this->validation = \Config\Services::validation();
        // $this->session = session();


        $this->model = new Modelmahasiswa;
    }

    public function index()
    {

        $data =
            [
                'title' => 'View Tables',
                'mahasiswa' => $this->model->getALLData()
            ];
        return view('mahasiswa/index', $data);
    }
    public function inputdata()
    {


        $data =
            [
                'title' => 'Input Data',
                'mahasiswa' => $this->model->getALLData()
            ];
        return view('mahasiswa/inputdata', $data);
    }
    public function tambah()
    {

        //validasi input
        if (isset($_POST['tambah'])) {
            $val = $this->validate([
                'mhs_nim' => [
                    'label' => 'Nomor Induk Mahasiswa',
                    'rules' => 'required|numeric|max_length[12]|is_unique[mahasiswa.mhs_nim]',
                    'errors' => [
                        'required' => '{field} tidak boleh kosong.',
                        'numeric' => '{field} hanya boleh angka',
                        'is_unique' => '{field} Sudah terdaftar.'
                    ]

                ],
                'mhs_nama' => [
                    'label' => 'Nama Mahasiswa',
                    'rules' => 'required|min_length[3][mahasiswa.mhs_nama]',
                    'errors' => [
                        'required' => '{field} minimal 3 digit.',
                    ]
                ],
                'mhs_jenisKelamin' => [
                    'label' => 'Jenis Kelamin',
                    'rules' => 'required|min_length[1][mahasiswa.mhs_jenisKelamin]',
                    'errors' => [
                        'required' => '{field} tidak boleh kosong.',
                    ]
                ],
                'mhs_tempatLahir' => [
                    'label' => 'Tempat Lahir',
                    'rules' => 'required|max_length[20][mahasiswa.mhs_tempatLahir]',
                    'errors' => [
                        'required' => '{field} tidak boleh kosong.',
                    ]
                ],
                'mhs_tanggalLahir' => [
                    'label' => 'Tanggal Lahir',
                    'rules' => 'required[mahasiswa.mhs_tanggalLahir]',
                    'errors' => [
                        'required' => '{field} tidak boleh kosong.',
                        'valid_date' => '{field} Sesuai dengan data.'
                    ]
                ],
                'mhs_alamat' => [
                    'label' => 'Alamat',
                    'rules' => 'required|min_length[5][mahasiswa.mhs_alamat]',
                    'errors' => [
                        'required' => '{field} minimal 5 digit.',
                    ]
                ],
                'mhs_telepon' => [
                    'label' => 'No Handphone',
                    'rules' => 'required|numeric|max_length[12][mahasiswa.mhs_telepon]',
                    'errors' => [
                        'required' => '{field} tidak boleh kosong.',
                        'numeric' => '{field} hanya boleh angka',
                    ]
                ],

            ]);
            if (!$val) {
                session()->setFlashdata('err', \Config\Services::validation()->listErrors());
                $data =
                    [
                        'title' => 'Input Data',
                        'mahasiswa' => $this->model->getALLData()
                    ];
                return view('mahasiswa/inputdata', $data);
            } else {

                $data = [
                    'mhs_nim' => $this->request->getPost('mhs_nim'),
                    'mhs_nama' => $this->request->getPost('mhs_nama'),
                    'mhs_jenisKelamin' => $this->request->getPost('mhs_jenisKelamin'),
                    'mhs_tempatLahir' => $this->request->getPost('mhs_tempatLahir'),
                    'mhs_tanggalLahir' => $this->request->getPost('mhs_tanggalLahir'),
                    'mhs_alamat' => $this->request->getPost('mhs_alamat'),
                    'mhs_telepon' => $this->request->getPost('mhs_telepon'),
                ];


                //insert data
                $success = $this->model->tambah($data);
                if ($success) {
                    session()->setflashdata('massage', 'Data Berhasil Ditambahkan');
                    return redirect()->to(base_url('mahasiswa/inputdata'));
                }
            }
        } else {
            return redirect()->to(base_url('mahasiswa/inputdata'));
        }
    }
    public function hapus($mhs_nim)
    {
        $success = $this->model->hapus($mhs_nim);
        if ($success) {
            session()->setflashdata('massage', 'Data Berhasil Dihapus');
            return redirect()->to(base_url('mahasiswa/inputdata'));
        }
    }
}
