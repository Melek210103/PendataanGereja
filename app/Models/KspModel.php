<?php

namespace App\Models;

use CodeIgniter\Model;

class KspModel extends Model
{
    protected $table = 'ksp';
    protected $primaryKey = 'id';
    protected $allowedFields = ['nama', 'deskripsi'];

    // Uncomment if you want to use soft deletes
    // protected $useSoftDeletes = true;

    // Uncomment if you want to use timestamps
    // protected $useTimestamps = true;
}
