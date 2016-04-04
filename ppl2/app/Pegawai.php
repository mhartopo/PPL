<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    //
    protected $table = 'pegawai';
    protected $primaryKey = 'nip';
    //public $timestamps = false; //tidak ada create_at dan update_at
    protected $connection = 'mysql2';
}
