<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Organization extends Model
{
    /*
    Timestamps

By default, Eloquent expects created_at and updated_at columns to exist on your tables. If you do not wish to have these columns automatically managed by Eloquent, set the  $timestamps property on your model to false
    */
	public $timestamps = true;
    
	protected $table = 'tbl_organization';

	/**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['organization_name','organization_logo','sport_id','pic_fullname','pic_position','pic_email','pic_jobtitle','pic_phone','
pic_phone_other','organization_email','organization_website','organization_phone','organization_address','organization_city','organization_state','organization_country','organization_fax','parent_organization'];

    /**
 * Indicates if the IDs are auto-incrementing.
 *
 * @var bool
 */
    public $incrementing = false;

    public function user_organization_mapping()
    {
        return $this->hasMany(UserOrganizations::class, 'organization_id');
    }

    public function country()
    {
        return $this->hasOne(Countries::class, 'id', 'organization_country');
    }
}