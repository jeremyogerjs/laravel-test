<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\Medecin;

class Reservation extends Controller
{
    public function create()
    {
        $medecin = new Medecin();
        $medecin = $medecin::all();
        return view('reservation',['test' => $medecin]);
    }
}