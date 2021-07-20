<?php
namespace App\Http\Controllers;
use App\Models\Medecin;
use App\Models\Patient;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Reservation as ModelsReservation;

class Reservation extends Controller
{
    public function index()
    {
        $reservations = new ModelsReservation();
        $reservations = $reservations::with(['medecins','patients'])->get();

        return view('admin',['reservations' => $reservations]);
    }
    public function store(Request $request)
    {
        $input = $request -> all();

        $validated = $request -> validate([
            'patientFirstName' => 'required|string',
            'patientLastName' => 'required|string',
            'patientMail' => 'required|email',
            'dateMeeting'=>'required|date|after:today',
            'hourMeeting' => 'required'
        ]);
        $patient = new Patient();
        $patient -> firstName = $input['patientFirstName'];
        $patient -> lastName = $input['patientLastName'];
        $patient -> email = $input['patientMail'];

        $patient -> save();

        $patientId = $patient -> id;

        $reservations = new ModelsReservation();
        $reservations -> dateMeeting = $input['dateMeeting'];
        $reservations -> hourMeeting = $input['hourMeeting'];
        $reservations -> idMedecin = $input['idMedecin'];
        $reservations -> idPatient = $patientId;

        $reservations -> save();

        $reservationId = $reservations -> id;

        $lastReservation = $reservations::find($reservationId);
        $lastPatient = $patient::find($patientId);
        
        return redirect() -> action([Reservation::class,'index']);
    }
    public function create()
    {
        $medecin = new Medecin();
        $medecin = $medecin::all();

        return view('reservation',['medecins' => $medecin]);
    }
}