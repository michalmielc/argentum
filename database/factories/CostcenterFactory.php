<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Costcenter;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Costcenter>
 */
class CostcenterFactory extends Factory
{
    protected $model = Costcenter::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
     public function definition(): array
    {
        return [
            'name'=> $this->faker->word,
            'code'=> $this->faker->unique()->randomNumber(5)
        ];
    }
}
