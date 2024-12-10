<?php

namespace App\Models;

use CodeIgniter\Model;

class JemaatModel extends Model
{
    protected $table = 'jemaat';
    protected $primaryKey = 'id';
    protected $allowedFields = ['nama', 'alamat', 'tanggal_lahir', 'jenis_kelamin', 'no_telepon'];

    // Jika Anda ingin menggunakan fitur soft deletes, uncomment baris berikut
    // protected $useSoftDeletes = true;

    // Jika Anda ingin menggunakan fitur timestamps, uncomment baris berikut
    // protected $useTimestamps = true;
}
