<?php

namespace Database\Factories;

use App\Models\course;
use Illuminate\Database\Eloquent\Factories\Factory;

class courseFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = course::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name'=>$this->faker->sentence(),
            'desc'=>$this->faker->paragraph(),
            'categories'=>$this->faker->randomElement(['Web Development', 'Programming'])
        ];
    }
}
