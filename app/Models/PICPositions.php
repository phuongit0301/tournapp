<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PICPositions extends Model
{
	protected $table = 'tbl_pic_positions';
    /**
 * Indicates if the IDs are auto-incrementing.
 *
 * @var bool
 */
    public $incrementing = false;
    public $timestamps = true;

    protected $fillable = ['position_name'];

}