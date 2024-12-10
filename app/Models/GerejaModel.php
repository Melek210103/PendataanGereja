<?php

namespace App\Models;

use CodeIgniter\Model;

class GerejaModel extends Model
{
    protected $table = 'gereja';
    protected $primaryKey = 'id';
    protected $allowedFields = ['nama', 'alamat', 'no_telepon'];

    // Uncomment if you want to use soft deletes
    // protected $useSoftDeletes = true;

    // Uncomment if you want to use timestamps
    // protected $useTimestamps = true;
}
