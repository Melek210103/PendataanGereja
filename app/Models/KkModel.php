<?php

namespace App\Models;

use CodeIgniter\Model;

class KkModel extends Model
{
    protected $table = 'kk';
    protected $primaryKey = 'id';
    protected $allowedFields = ['nomor_kk', 'nama_kepala_keluarga', 'alamat'];

    // Uncomment if you want to use soft deletes
    // protected $useSoftDeletes = true;

    // Uncomment if you want to use timestamps
    // protected $useTimestamps = true;
}
