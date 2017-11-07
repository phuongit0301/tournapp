<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TennisClubs extends Model
{
	protected $table = 'tbl_clubs';
    /**
 * Indicates if the IDs are auto-incrementing.
 *
 * @var bool
 */
    public $incrementing = false;
    public $timestamps = true;

    protected $fillable = [];
}