<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vehicle;

class VehicleController extends Controller
{ 
    
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
    $vehicle->name = $request->input('name');
    $vehicle->quantities = $request->input('quantity');
    $vehicle->color = $request->color;
    $vehicle->serial_no = $request->serial_no;   
    $vehicle->save(); 
    
    // return to vehicle index
    return redirect('/vehicles');
  }

  public function show(Vehicle $vehicle)
  {
    return view('vehicles.show', compact('vehicle'));
  }
}
