<?php
namespace App\Http\Controllers;
use App\Models\Medecin;
use App\Models\Patient;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Reservation as ModelsReservation;
use Illuminate\Http\RedirectResponse;

class Reservation extends Controller
{
    public function index()
    {
        $reservations = new ModelsReservation();
        $reservations = $reservations::all();

        return view('admin',['reservations' => $reservations]);
    }
    public function create(Request $request)
    {
        $input = $request -> all();

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

        return view('/admin',['reservations'=> $lastReservation,'patient' => $lastPatient]);
    }
    public function getMedecins()
    {
        $medecin = new Medecin();
        $medecin = $medecin::all();

        return view('reservation',['medecins' => $medecin]);
    }
}