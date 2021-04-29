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
            'description'=>$this->faker->sentence(210),
            'responsibilities'=>$this->faker->sentence(135),
            'perfect_candidate'=>$this->faker->sentence(100),
        ];
    }
}//zrób skrypt php aby wypełnić pivot table randomowymi wartościami
