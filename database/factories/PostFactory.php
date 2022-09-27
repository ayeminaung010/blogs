<?php

namespace Database\Factories;

use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;


class PostFactory extends Factory
{

    public function definition()
    {   $address = ['yangon','mandalay','pyay','bago','pyin oo lwin','taung gyi ','inn lay'];
        return [
            'title' => $this ->faker->sentence(8),
            'description'=>$this->faker->text(200),
            'price'=> rand(2000,50000),
            'address'=> $address[array_rand($address)],
            'rating'=>rand(0,5),
        ];

        // post::factory([
        //     'title' => $this ->faker->sentence(8),
        //     'description'=>$this->faker->text(200)
        // ])->count(30)->create();
    }
}
