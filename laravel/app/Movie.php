<?php

namespace Cinema;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
class Movie extends Model
{
    protected $table = "movies";
    protected $fillable = ['name','path','cast','direction','duration','genre_id'];

    public function setPathAttribute($path){
		$name = Carbon::now()->second.$path->getClientOriginalName();
		$this->attributes['path'] = $name;
		\Storage::disk('local')->put($name, \File::get($path));
	}
}
