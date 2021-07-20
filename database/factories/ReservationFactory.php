<?php
namespace Database\Factories;

use App\Models\Medecin;
use App\Models\Patient;
use App\Models\Reservation;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Eloquent\Factories\Sequence;

class ReservationFactory extends Factory
{
        /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Reservation::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'dateMeeting'   => $this->faker->date(),
            'hourMeeting'   => $this->faker->time('H:i:s'),
            'idMedecin'     => Medecin::all('id') -> random(),
            'idPatient'     => Patient::all('id')->random(),

        ];
    }
}