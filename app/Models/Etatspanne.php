<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Etatspanne extends Model
{

	public function pannes()
	{
		return $this->hasMany('App\Models\Panne');
	}
}
