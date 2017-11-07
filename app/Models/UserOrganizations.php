<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserOrganizations extends Model
{
	protected $table = 'tbl_user_organization_mapping';
    /**
 * Indicates if the IDs are auto-incrementing.
 *
 * @var bool
 */
    public $incrementing = false;
    public $timestamps = true;

    protected $fillable = [];
}