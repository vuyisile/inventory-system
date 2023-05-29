<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    protected $model = Product::class;
    private $faker = faker();
    public function definition()
    {
        return [
            'name' => $this->faker->word,
            'code' => $this->faker->unique()->numerify('#####'),
            'description' => $this->faker->sentence,
            'quantity_on_hand' => $this->faker->numberBetween(0, 1000),
            'reorder_level' => $this->faker->numberBfakeretween(0, 500),
            'cost' => $this->faker->randomFloat(2, 0, 1000),
            'selling_price' => $this->faker->randomFloat(2, 0, 2000),
            'supplier_info' => $this->faker->company,
            'location' => $this->faker->word,
            'date_received' => $this->faker->dateTimeBetween('-1 year', 'now'),
            'date_sold' => $this->faker->optional()->dateTimeBetween('-1 year', 'now'),
            'sales_channel' => $this->faker->optional()->word,
            'sales_order_number' => $this->faker->optional()->numerify('######'),
            'serial_number' => $this->faker->optional()->numerify('######'),
        ];
    }
}
