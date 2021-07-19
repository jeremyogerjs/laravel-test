<?php
namespace Database\Factories;

use App\Models\Patient as ModelsPatient;
use Faker\Factory;

class PatientFactory extends Factory
{

    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = ModelsPatient::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'lastName' => $this->faker->firstName(),
            'firstName' => $this->faker->lastName(),
            'email' => $this->faker->unique()->safeEmail(),
        ];
    }
}