<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sports extends Model
{
	protected $table = 'tbl_sports';
    /**
 * Indicates if the IDs are auto-incrementing.
 *
 * @var bool
 */
    public $incrementing = false;
    public $timestamps = true;

    protected $fillable = [];
}