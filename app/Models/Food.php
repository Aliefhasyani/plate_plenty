<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
    protected $table = 'foods';

    protected $fillable =['name','recipes','ingredients','image_path','description'];

    public function types(){
        return $this->belongsToMany(FoodType::class,'foods_food_types','food_id','type_id');
    }
}
