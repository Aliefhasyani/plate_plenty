<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Food;

class FoodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $foods = [
            [
                'name' => 'Spaghetti Bolognese',
                'description' => 'A classic Italian pasta dish with rich meat sauce.',
                'recipe' => 'Cook pasta, sauté minced beef with tomato sauce, mix together, and serve hot.',
                'ingredients' => 'Spaghetti, minced beef, tomato sauce, onion, garlic, olive oil, salt, pepper',
                'image_path' => null,
            ],
            [
                'name' => 'Chicken Fried Rice',
                'description' => 'Fried rice with diced chicken and mixed vegetables.',
                'recipe' => 'Stir-fry chicken, add rice, soy sauce, and vegetables. Mix well and serve.',
                'ingredients' => 'Rice, chicken, soy sauce, egg, peas, carrots, onions, garlic',
                'image_path' => null,
            ],
            [
                'name' => 'Vegetable Curry',
                'description' => 'A hearty curry packed with vegetables and spices.',
                'recipe' => 'Sauté vegetables with curry paste, add coconut milk, and simmer until tender.',
                'ingredients' => 'Carrots, potatoes, cauliflower, coconut milk, curry paste, salt',
                'image_path' => null,
            ],
            [
                'name' => 'Beef Steak',
                'description' => 'Tender beef steak grilled to perfection.',
                'recipe' => 'Season beef, grill on both sides until desired doneness, serve with sauce.',
                'ingredients' => 'Beef steak, salt, pepper, olive oil, butter, garlic',
                'image_path' => null,
            ],
            [
                'name' => 'Caesar Salad',
                'description' => 'Fresh romaine lettuce with Caesar dressing and croutons.',
                'recipe' => 'Toss lettuce, dressing, croutons, and parmesan cheese. Serve chilled.',
                'ingredients' => 'Lettuce, Caesar dressing, croutons, parmesan cheese',
                'image_path' => null,
            ],
        ];

        foreach ($foods as $food) {
            Food::create($food);
        }
    }
}
