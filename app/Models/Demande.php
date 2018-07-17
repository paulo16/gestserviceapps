<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Demande extends Model
{

	public function panne(){

		return $this->belongsTo('App\Models\Panne');

	}

	public function user(){

		return $this->belongsTo('App\Models\User');

	}


	public function etatsdemande(){

		return $this->belongsTo('App\Models\Etatsdemande');

	}
}
