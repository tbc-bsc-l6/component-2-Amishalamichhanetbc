<?php

namespace Database\Factories;
use App\Models\cd;
use Illuminate\Database\Eloquent\Factories\Factory;

class cdFactory extends Factory
{
    protected $model = cd::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'artist' => $this->faker->name,
            'title' => $this->faker->sentence,
            'durations' => $this->faker->randomNumber,
            'price' => $this->faker->randomFloat(3, 0, 100)
        ];
    }
}
