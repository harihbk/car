<?php

namespace Database\Factories;

use App\Models\Car;
use Illuminate\Database\Eloquent\Factories\Factory;

class CarFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Car::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'price' => $this->faker->word,
        'make' => $this->faker->word,
        'modelc' => $this->faker->word,
        'kmdriven' => $this->faker->word,
        'transmission' => $this->faker->word,
        'fueltype' => $this->faker->word,
        'registrationyear' => $this->faker->word,
        'noofowner' => $this->faker->word,
        'insurancevalidity' => $this->faker->word,
        'insurancetype' => $this->faker->word,
        'rto' => $this->faker->word,
        'carlocation' => $this->faker->word,
        'makeyear' => $this->faker->word,
        'price' => $this->faker->word,
        'emi' => $this->faker->word,
        'address' => $this->faker->word,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
