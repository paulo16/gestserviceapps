<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Appareil extends Model
{

	public function local()
	{
		return $this->belongsTo('App\Models\Local');
	}
}
