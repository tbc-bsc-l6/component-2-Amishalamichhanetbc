<?php

namespace Database\Factories;
use App\Models\game;
use Illuminate\Database\Eloquent\Factories\Factory;

class gameFactory extends Factory
{
    protected $model=game::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'console' => $this->faker->name,
            'title' => $this->faker->sentence,
            'pegi' => $this->faker->randomNumber,
            'price' => $this->faker->randomFloat(3, 0, 100)
        ];
    }
}
