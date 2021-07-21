<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class Patient extends Model
{
    use HasFactory;
    protected $table = 'patient';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'lastName',
        'firstName',
        'email',
    ];

    public function reservation()
    {
        // un patient a plusieurs (hasMany) reservations
        return $this -> hasMany(Reservation::class,'idPatient');
    }

    public function store($input)
    {
        
        $this -> firstName = $input['patientFirstName'];
        $this -> lastName = $input['patientLastName'];
        $this -> email = $input['patientMail'];

        $this -> save();
    }
}