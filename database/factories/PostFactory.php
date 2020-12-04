<?php

namespace Database\Factories;

use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class PostFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = \App\Models\Post::class;


    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        //$title = $faker->sentence(4);
        return [
           'category_id'=>rand(1,20), //crea id aleatorios
           'title' => $this->faker->text(20), //20 caracteres
           'body' => $this->faker->text(100),  //50 caracteres
           'file' => $this->faker->imageUrl($width = 1200, $height = 400),
           'status' => $this->faker->randomElement(['0','1'])
        ];
    }
}
