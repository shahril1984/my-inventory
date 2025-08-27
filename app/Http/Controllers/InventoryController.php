<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Inventory;

class InventoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        // querry all inventories from the table 'inventories'using model.

        $inventories = Inventory::latest()->get();

        // return to view with $inventories.(resource/views/inventories/index.blade.php)

        return view('inventories.index', compact('inventories'));



    }

    public function create()
    {
         return view('inventories.create');
        
    }
     public function store(Request $request)
  {
    // store in the table 'inventories' using model
    //POPO - Plain old PHP Object

    $inventory = new Inventory();
    $inventory->name = $request->input('name');
    $inventory->quantities = $request->input('quantity');
    $inventory->color = $request->color;
    $inventory->serial_no = $request->serial_no;   
    $inventory->user_id = auth()->user()->id;
    $inventory->save(); 
    
    // return to inventory index
    return redirect('/inventories');
  }

  public function show(Inventory $inventory)
  {
    return view('inventories.show', compact('inventory'));
  }

  public function edit(Inventory $inventory)
  {
    return view('inventories.edit', compact('inventory'));
  }

  public function update(Request $request, Inventory $inventory)
  {
    // update using model
    //POPO - Plain old PHP Object

    $inventory->name = $request-> name ;
    $inventory->quantities = $request-> quantity ;
    $inventory->serial_no = $request->serial_no;   
    $inventory->save(); 
    
    // return to inventory index
    return redirect('/inventories');
  }

    public function destroy(Inventory $inventory)
    {
        $inventory->delete();
        return redirect('/inventories');
    }
}
