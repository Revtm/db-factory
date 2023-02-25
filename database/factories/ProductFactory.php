<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

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
			'name' => $this->faker->word(),
			'description' => $this->faker->catchPhrase(),
			'stock_total' => $this->faker->randomNumber(3, false),
			'vendor_price' => $this->faker->randomNumber(6, true),
			'selling_price' => $this->faker->randomNumber(6, true)
        ];
    }
}
