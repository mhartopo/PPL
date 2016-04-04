<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Institusi extends Model
{
    //
    protected $table = 'institusi';
    protected $primaryKey = 'id';
    public $timestamps = false; //tidak ada create_at dan update_at
    protected $connection = 'mysql';
}
