<?php

namespace Database\Factories;

use App\Models\Item;
use Illuminate\Database\Eloquent\Factories\Factory;

class ItemFactory extends Factory
{

    protected $model = Item::class;

    
    public function definition()
    {
        return [
            'pro_title'=> $this->faker->name(),
            'price'=> $this->faker->numberBetween(300, 1999),
            'seller_name'=> $this->faker->name(),
            'seller_contact'=> $this->faker->phoneNumber(),
            'image'=> $this->faker->imageUrl(600,400),
            'desc'=> $this->faker->text(300),
            'category_id'=> $this->faker->numberBetween(1,50),
            'email' => $this->faker->email,
            'address' => $this->faker->address,
        ];
    }
}
