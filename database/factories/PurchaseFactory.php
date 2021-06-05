<?php

namespace Database\Factories;

use App\Models\Customer;
use App\Models\Purchase;
use Illuminate\Database\Eloquent\Factories\Factory;

class PurchaseFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Purchase::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'customer_id' =>  Customer::factory(),
            'bank_acc_number' => $this->faker->regexify('[0-9]{' . mt_rand(10, 11) . '}'),
            'company' => $this->faker->name(),
        ];
    }
}
