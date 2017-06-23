<?php namespace App;
 
use Illuminate\Database\Eloquent\Model;
 
class Place extends Model
{ 
 	protected $fillable = ['name', 'address', 'description'];	 

 	 public function meals()
    {
        return $this->hasMany('App\Meal');
    }
}
?>