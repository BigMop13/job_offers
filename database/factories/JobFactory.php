<?php

namespace Database\Factories;

use App\Models\Job;
use Illuminate\Database\Eloquent\Factories\Factory;

class JobFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Job::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title'=>$this->faker->sentence(2),
            'description'=>$this->faker->sentence(50),
            'responsibilities'=>$this->faker->sentence(25),
            'perfect_candidate'=>$this->faker->sentence(15),
            'tag_id'=>$this->faker->numberBetween(1,6)
        ];
    }
}
