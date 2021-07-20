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
        // une reservation a un seul medecin sa clef etrangere provient du model medecin et le champs de jointure c'est idMedecin
        return $this -> belongsTo(Medecin::class,'idMedecin');
    }

    public function patients()
    {
        // une reservation a plusieurs patients sa clef etrangere provient du model patient et le champs de jointure c'est idPatient
        return $this -> belongsTo(Patient::class,'idPatient');
    }
}
