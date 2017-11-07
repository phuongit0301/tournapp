<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TennisClubAreaMapping extends Model
{
	protected $table = 'tbl_tennis_club_area_mapping';
    /**
 * Indicates if the IDs are auto-incrementing.
 *
 * @var bool
 */
    public $incrementing = false;
    public $timestamps = true;

    protected $fillable = [];
}