<?php

namespace App\Http\Controllers;

use App\Flight;
use App\Http\Controllers\Controller;

class FlightController extends Controller
{
    /**
   * Показать список всех доступных рейсов.
   *
   *@ return Response
   
   */
  public function index()
  {
    $flights = Flight::all();

    return view('flight.index', ['flights' => $flights]);
  }
}