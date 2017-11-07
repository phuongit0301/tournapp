<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TennisCourtType extends Model
{
	protected $table = 'tbl_tennis_courttype';
    /**
 * Indicates if the IDs are auto-incrementing.
 *
 * @var bool
 */
    public $incrementing = false;
    public $timestamps = true;

    protected $fillable = [];
}