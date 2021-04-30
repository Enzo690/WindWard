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
        $quant = $this->faker->numberBetween(1,10);

        return [
            'firstname' => $this->faker->firstName,
            'lastname' => $this->faker->lastName,
            'adress' => $this->faker->address,
            'city' => $this->faker->city,
            'country' => $this->faker->country,
            'phone' => $this->faker->phoneNumber,
            'price' => $this->faker->numberBetween($quant*50),
            'quantity' => $quant,
            'user_id' => $this->faker->numberBetween(1,10),
        ];
    }
}
