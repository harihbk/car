<?php

namespace Database\Factories;

use App\Models\Carmaster;
use Illuminate\Database\Eloquent\Factories\Factory;

class CarmasterFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Carmaster::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'year' => $this->faker->word,
        'make' => $this->faker->word,
        'model' => $this->faker->word,
        'kmdriven' => $this->faker->word,
        'fueltype' => $this->faker->word,
        'transmission' => $this->faker->word,
        'saleprice' => $this->faker->word,
        'emi' => $this->faker->word,
        'address' => $this->faker->word,
        'registrationyear' => $this->faker->word,
        'noofowner' => $this->faker->word,
        'insurancevalidity' => $this->faker->word,
        'insurancetype' => $this->faker->word,
        'rto' => $this->faker->word,
        'carlocation' => $this->faker->word,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
