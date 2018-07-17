<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{


	public function pannes()
	{
		return $this->hasMany('App\Models\Panne');
	}
}
