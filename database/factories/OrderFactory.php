<?php

namespace Database\Factories;

use App\Models\Order;
use Illuminate\Database\Eloquent\Factories\Factory;

class OrderFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Order::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->word,
        'fname' => $this->faker->word,
        'lname' => $this->faker->word,
        'phone' => $this->faker->word,
        'address' => $this->faker->word,
        'location' => $this->faker->word,
        'city' => $this->faker->word,
        'productname' => $this->faker->word,
        'itemprice' => $this->faker->word,
        'totalprice' => $this->faker->word,
        'product_id' => $this->faker->word,
        'user_id' => $this->faker->word,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s'),
        'deleted_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
