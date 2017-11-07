<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TennisClassifications extends Model
{
	protected $table = 'tbl_tennis_classifications';
    /**
 * Indicates if the IDs are auto-incrementing.
 *
 * @var bool
 */
    public $incrementing = false;
    public $timestamps = true;

    protected $fillable = [];
}