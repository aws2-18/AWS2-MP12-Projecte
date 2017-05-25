<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Videos extends Model
{
	public function user()
	{
		return $this->belongsTo('App\User');
	}
	public function likes()
	{
		return $this->hasMany('App\Like');
	}

    protected $table = 'videos';
}
