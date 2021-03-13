<?php

namespace Database\Factories;

use App\Models\Feedback;
use Illuminate\Database\Eloquent\Factories\Factory;

class FeedbackFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Feedback::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name'=>$this->faker->name,
            'email'=>$this->faker->email,
            'phone_number'=>$this->faker->phoneNumber,
            'org_name'=>$this->faker->catchPhrase,
            'body'=>$this->faker->realText($maxNbChars = 200, $indexSize = 2)
        ];
    }
}
