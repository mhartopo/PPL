<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PendidikanFormal extends Model
{
    //
    protected $table = 'pendidikan_formal';
    protected $primaryKey = 'id';
    public $timestamps = false; //tidak ada create_at dan update_at
    protected $connection = 'mysql';

}
