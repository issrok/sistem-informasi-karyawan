<?php

namespace App\Models;

use CodeIgniter\Model;

class GajiModel extends Model
{
    protected $table = 'tb_gaji';
    protected $primaryKey = 'id';
    protected $protectFields = false;
}
