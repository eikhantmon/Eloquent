<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletes;

class Dogs extends Model
{

	use SoftDeletes;

	protected $dates = ['deleted_at','birthday'];

	// protected static function boot()
	// {
	// 	parent::boot();

	// 	static::addGlobalScope('age', function(Builder $builder) {
	// 		$builder->where('age', '>', 8);
	// 	});
	// }

	// function dogsRequiringAntiRabbitBiteShot(){
	// 	return $this->ageGreaterThan(6);
	// }

	// function scopeAgeGreaterThan($query, $age) {
	// 	return $query->where('age', '>', $age);
	// }

	function getNameAttribute($value){
		return strtoupper($value);
	}

	function getIdNameAttribute(){
	    return $this->attributes['id'] . ':' . $this->attributes['name'];
	}

	function setNameAttribute($value){
    	return $this->attributes['name'] = strtoupper($value);
	}
    
}
