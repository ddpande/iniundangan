<?php

namespace App\Models;

use CodeIgniter\Model;

class ThemeModel extends Model
{
    protected $table = 'guestbook';
    protected $allowedFields = ['slug', 'nama', 'status', 'pesan'];
}
