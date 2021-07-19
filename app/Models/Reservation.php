<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class Reservation extends Model
{
    use HasFactory;
    protected $table = 'reservation';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'dateMeeting',
        'hourMeeting',
        'idMedecin',
        'idPatient'
    ];

    public function medecins()
    {
        return $this -> hasMany(Medecin::class,'foreign_key');
    }

    public function patients()
    {
        return $this -> hasMany(Patient::class,'foreign_key');
    }
}
