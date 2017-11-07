<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Continents extends Model
{
	protected $table = 'tbl_continents';
    /**
 * Indicates if the IDs are auto-incrementing.
 *
 * @var bool
 */
    public $incrementing = false;
    public $timestamps = true;

    protected $fillable = [];
}