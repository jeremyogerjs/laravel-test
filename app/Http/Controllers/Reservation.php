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
        $reservations = $reservations::with(['medecins','patients'])->orderByRaw('dateMeeting DESC')->get();

        return view('admin',['reservations' => $reservations]);
    }
    public function store(Request $request)
    {
        $input = $request -> all();

        $validated = $request -> validate([
            'patientFirstName'  => 'required|string',
            'patientLastName'   => 'required|string',
            'patientMail' => 'required|email',
            'dateMeeting'=>'required|date|after:today',
            'hourMeeting' => 'required'
        ]);

        $patient = new Patient();

        $reservations = new ModelsReservation();
        $test = $request -> session() -> flash('input',$input);
        $reservationByMedecin = $reservations::all() -> where('idMedecin','=',$input['idMedecin']);
   
        dd($test);
        foreach ($reservationByMedecin as $reservation)
        {
            
            if($input['dateMeeting'] === $reservation -> dateMeeting && \Carbon\Carbon::parse($input['hourMeeting'])->isoFormat('H:mm:ss') === $reservation -> hourMeeting )
            {
                var_dump('Je suis pareil !');
                // dd($reservation -> hourMeeting,$input['hourMeeting']);
                // return redirect('reservation/create') ->  withInput($test);
            } 
        }
        die();
        $patient -> store($input);
        $patientId = $patient -> id;
        $reservations -> store($input,$patientId);

        return redirect() -> action([Reservation::class,'index']);
    }
    public function create()
    {
        $medecin = new Medecin();
        $medecin = $medecin::all();

        return view('reservation',['medecins' => $medecin]);
    }
}