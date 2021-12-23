<?php

namespace App\Controllers;

use App\Models\GajiModel;
use App\Models\KaryawanModel;
use Irsyadulibad\DataTables\DataTables;

class Gaji extends BaseController
{
    function __construct()
    {
        $this->karyawanModel = new KaryawanModel();
        $this->gajiModel     = new GajiModel();
    }

    public function dt_index()
    {
        $datatables = DataTables::use('tb_gaji');
        return $datatables->make(true);
    }

    public function index()
    {
        $data['title']    = 'Gaji';
        $data['subtitle'] = 'Daftar Gaji';
        return view('gaji/index', $data);
    }
}
