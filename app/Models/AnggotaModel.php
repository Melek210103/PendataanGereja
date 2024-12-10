<?php

namespace App\Models;

use CodeIgniter\Model;

class AnggotaModel extends Model
{
    protected $table = 'anggota_jemaat';
    protected $primaryKey = 'id';
    protected $allowedFields = ['nama', 'alamat', 'tanggal_lahir', 'jenis_kelamin', 'no_telepon'];

    // Uncomment if you want to use soft deletes
    // protected $useSoftDeletes = true;

    // Uncomment if you want to use timestamps
    // protected $useTimestamps = true;
}
