<?php

namespace Database\Factories;

use App\Models\News;
use Illuminate\Database\Eloquent\Factories\Factory;

class NewsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = News::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title'=>$this->faker->realText($maxNbChars=50),
            'image'=>'https://picsum.photos/300/300?random='.$this->faker->randomDigit,
            'status'=>true,
            'body'=>$this->faker->realText() 
        ];
    }
}
