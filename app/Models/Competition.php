<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Competition extends Model
{
    protected $table = 'tbl_competitions';
    public $incrementing = false;
    public $timestamps = true;

    protected $fillable = [];
}