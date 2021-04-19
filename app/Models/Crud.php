<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Crud extends Model
{
    protected $table        = "loket";
    public $timestamps      = false;
    protected $fillable     = [ 
        'id', 
        'namaloket', 
        'deskripsi',
    ];
}
