<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Flight extends Model
{
    //
    protected $table = 'user';
    protected $primaryKey = 'id';
    public $incrementing = false;
    public $timestamps = false;
}
