<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class Medecin extends Model
{
    use HasFactory;
    protected $table = 'medecin';
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
        // un medecin a plusieurs (hasMany) reservations
        return $this -> hasMany(Reservation::class,'idMedecin');
    }
}