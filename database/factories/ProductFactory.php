<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;
use phpDocumentor\Reflection\DocBlock\Description;

class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->word,
            'price' => $this->faker->randomDigit(1,10),
            'in_stock' => $this->faker->boolean(50),
            'description' => $this->faker->paragraphs,
        ];
    }
}
