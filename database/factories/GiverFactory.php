<?php

namespace Database\Factories;

use App\Models\Giver;
use Illuminate\Database\Eloquent\Factories\Factory;

class GiverFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Giver::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'giver_name' => $this->faker->name,
            'date' => $this->faker->dateTimeBetween('-1 year', 'now'),
            'tithe' => $this->faker->randomFloat(2, 0, 100),
            'offering' => $this->faker->randomFloat(2, 0, 100),
            'mission' => $this->faker->randomFloat(2, 0, 100),
            'sanctuary' => $this->faker->randomFloat(2, 0, 100),
            'love_gift' => $this->faker->randomFloat(2, 0, 100),
            'dance_ministry' => $this->faker->randomFloat(2, 0, 100),
            'total' => $this->faker->randomFloat(2, 0, 100),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
