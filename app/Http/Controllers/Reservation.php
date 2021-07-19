<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\Medecin;
use App\Models\Reservation as ModelsReservation;

class Reservation extends Controller
{
    public function index()
    {
        $reservations = new ModelsReservation();
        $reservations = $reservations::all();

        return view('admin',['reservations' => $reservations]);
    }
    public function create()
    {
        $reservations = new ModelsReservation();
        $reservations = $reservations::create();

        return view('reservation',['reservations' => $reservations]);
    }

    public function getMedecins()
    {
        $medecin = new Medecin();
        $medecin = $medecin::all();

        return view('reservation',['medecins' => $medecin]);
    }
}