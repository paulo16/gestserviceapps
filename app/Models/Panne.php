<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Panne extends Model
{

	public function categorie(){

		return $this->belongsTo('App\Models\Categorie');

	}

	public function local(){

		return $this->belongsTo('App\Models\Local');

	}

	public function demandes()
	{
		return $this->hasMany('App\Models\Demande');
	}

	public function etatspanne(){

		return $this->belongsTo('App\Models\Etatspanne');

	}
}
