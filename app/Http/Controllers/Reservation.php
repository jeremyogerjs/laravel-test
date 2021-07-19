<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;

class Reservation extends Controller
{
    public function create()
    {
        return view('reservation',['test' => 'je suis le test']);
    }
}