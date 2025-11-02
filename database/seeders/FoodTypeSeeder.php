<?php

namespace Database\Seeders;

use App\Models\FoodType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FoodTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $food_types = [
            ['food_type' => 'Vegetarian'],
            ['food_type' => 'Dinner'],
            ['food_type' => 'Lunch'],
            ['food_type' => 'Breakfast'],
            ['food_type' => 'Family Meals'],
            ['food_type' => 'Breakfast'],
            ['food_type' => 'Holiday Meals'],
            ['food_type' => 'Cravings'],
            ['food_type' => 'Healthy'],
        ];

        foreach($food_types as $food_type){
            FoodType::create($food_type);
        }
    }
}
