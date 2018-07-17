<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Local extends Model
{
	protected $guarded = ['id'];


	public function service(){

		return $this->belongsTo('App\Models\Service');

	}

	public function appareils()
	{
		return $this->hasMany('App\Models\Appareil');
	}

	public function pannes()
	{
		return $this->hasMany('App\Models\Appareil');
	}
}
