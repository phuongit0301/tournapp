<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CompetitionTypes extends Model
{
	
	protected $table = 'tbl_competition_types';
    /**
 * Indicates if the IDs are auto-incrementing.
 *
 * @var bool
 */
    public $incrementing = false;
    public $timestamps = true;

    protected $fillable = [];
}