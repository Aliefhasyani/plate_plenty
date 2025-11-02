<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FoodType extends Model
{
    protected $table = 'food_types';

    protected $fillable = ['food_type'];

    public function foods(){
        return $this->belongsToMany(Food::class,'foods_food_types','type_id','food_id');
    }
}
