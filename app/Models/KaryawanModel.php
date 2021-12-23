<?php

namespace App\Models;

use CodeIgniter\Model;

class KaryawanModel extends Model
{
    protected $table = 'tb_karyawan';
    protected $primaryKey = 'id';
    protected $protectFields = false;
}
