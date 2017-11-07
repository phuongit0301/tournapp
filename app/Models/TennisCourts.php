<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TennisCourts extends Model
{
	protected $table = 'tbl_courts';
    /**
 * Indicates if the IDs are auto-incrementing.
 *
 * @var bool
 */
    public $incrementing = false;
    public $timestamps = true;

    protected $fillable = [];
}