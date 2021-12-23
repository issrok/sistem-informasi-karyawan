<?php

namespace App\Controllers;

use App\Models\GajiModel;
use App\Models\KaryawanModel;
use Irsyadulibad\DataTables\DataTables;

class Karyawan extends BaseController
{
    function __construct()
    {
        $this->karyawanModel = new KaryawanModel();
        $this->gajiModel     = new GajiModel();
    }

    public function dt_index()
    {
        $tglDari    = $this->request->getVar('tgldari');
        $tglKe      = $this->request->getVar('tglke');
        $datatables = DataTables::use('tb_karyawan');
        if (isset($tglDari) && isset($tglKe)) {
            $datatables->where([
                'tgl_masuk >=' => date('d-m-Y', strtotime($tglDari)),
                'tgl_masuk <=' => date('d-m-Y', strtotime($tglKe))
            ]);
        }
        return $datatables->make(true);
    }

    public function index()
    {
        $data['title']    = 'Karyawan';
        $data['subtitle'] = 'Daftar Karyawan';
        return view('karyawan/index', $data);
    }

    public function store()
    {
        $data = [
            'nip'       => $this->request->getVar('inputNip'),
            'nama'      => $this->request->getVar('inputNama'),
            'gender'    => $this->request->getVar('inputGender'),
            'tgl_lahir' => $this->request->getVar('inputTglLahir'),
            'tgl_masuk' => $this->request->getVar('inputTglMasuk'),
            'grade'     => $this->request->getVar('inputGrade'),
            'gaji'      => $this->request->getVar('inputGaji'),
        ];

        $this->validation->setRules([
            'nip'       => 'required',
            'nama'      => 'required',
            'gender'    => 'required',
            'tgl_lahir' => 'required',
            'tgl_masuk' => 'required',
            'grade'     => 'required',
            'gaji'      => 'required',
        ]);

        if ($this->validation->run($data) === false) {
            session()->setFlashdata('notif_error', '<b>DATA BELUM LENGKAP</b> ');
            return redirect()->back()->withInput();
        }

        $tglLahir = strtotime($data['tgl_lahir']);
        $tglMasuk = strtotime($data['tgl_masuk']);

        if ($tglMasuk < $tglLahir) {
            session()->setFlashdata('notif_error', '<b>PROSES INPUT SALAH</b> ');
            return redirect()->back()->withInput();
        }

        $result = $this->karyawanModel->insert($data);
        if (!$result) {
            session()->setFlashdata('notif_error', '<b>GAGAL TAMBAH DATA</b> ');
            return redirect()->back()->withInput();
        }
        session()->setFlashdata('notif_success', '<b>SUKSES TAMBAH DATA</b> ');
        return redirect()->to(base_url('karyawan'));
    }

    public function tambah()
    {
        $data['title']    = 'Karyawan';
        $data['subtitle'] = 'Tambah Karyawan';
        $data['gaji']     = $this->gajiModel->findAll();
        return view('karyawan/tambah', $data);
    }
}
