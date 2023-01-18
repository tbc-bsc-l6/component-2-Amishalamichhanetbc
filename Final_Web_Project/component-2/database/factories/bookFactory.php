<?php

namespace Database\Factories;
use App\Models\book;
use Illuminate\Database\Eloquent\Factories\Factory;
class bookFactory extends Factory
{
    protected $model=book::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */

    public function definition()
    {
        return [
           
            'author' => $this->faker->name,
            'title' => $this->faker->sentence,
            'pages' => $this->faker->randomNumber,
            'price' => $this->faker->randomFloat(3, 0, 100)
           
        ];
    }
}
