<?php

namespace App\Models;

use CodeIgniter\Model;

class BaptisModel extends Model
{
    protected $table = 'baptis';
    protected $primaryKey = 'id _baptis';
    protected $allowedFields = ['nama', 'tanggal_baptis' ];

    // Uncomment if you want to use soft deletes
    // protected $useSoftDeletes = true;

    // Uncomment if you want to use timestamps
    // protected $useTimestamps = true;
}
