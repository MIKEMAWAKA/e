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
            'name' => $this->faker->word,
        'price' => $this->faker->word,
        'regular_price' => $this->faker->word,
        'sale_price' => $this->faker->word,
        'category_id' => $this->faker->randomDigitNotNull,
        'subcategory_id' => $this->faker->randomDigitNotNull,
        'tag_id' => $this->faker->randomDigitNotNull,
        'vendor_id' => $this->faker->randomDigitNotNull,
        'quantity' => $this->faker->randomDigitNotNull,
        'stock' => $this->faker->word,
        'viewer' => $this->faker->randomDigitNotNull,
        'sku' => $this->faker->word,
        'location' => $this->faker->word,
        'region' => $this->faker->word,
        'shortdescription' => $this->faker->word,
        'font_image' => $this->faker->word,
        'discount' => $this->faker->word,
        'parent' => $this->faker->randomDigitNotNull,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s'),
        'deleted_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
