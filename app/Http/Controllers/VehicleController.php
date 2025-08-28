<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vehicle;

class VehicleController extends Controller
{ 
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        // querry all vehicles from the table 'vehicle'using model.

        $vehicles = Vehicle::all();

        // return to view with $vehicle.(resource/views/vehicles/index.blade.php)

        return view('vehicles.index', compact('vehicles'));
    //
    }

     public function create()
    {
         return view('vehicles.create');
        
    }

     public function store(Request $request)
  {
    // store in the table 'vehicles' using model
    //POPO - Plain old PHP Object

    $vehicle = new Vehicle();
    $vehicle->car_model = $request->input('car_model');
    $vehicle->quantities = $request->input('quantities');
    $vehicle->no_plate = $request->no_plate; 
    $vehicle->save(); 
    
    // return to vehicle index
    return redirect('/vehicles');
  }

  public function show(Vehicle $vehicle)
  {
    return view('vehicles.show', compact('vehicle'));
  }
  public function edit(Vehicle $vehicle)
  {
    return view('vehicles.edit', compact('vehicle'));
  }
    public function update(Request $request, Vehicle $vehicle)
    {
        $vehicle->car_model = $request->input('car_model');
        $vehicle->quantities = $request->input('quantities');
        $vehicle->no_plate = $request->no_plate; 
        $vehicle->save(); 
        
        // return to vehicle index
        return redirect('/vehicles');
    }   
    public function destroy(Vehicle $vehicle)
    {
        $vehicle->delete();
        return redirect('/vehicles');
    }
}