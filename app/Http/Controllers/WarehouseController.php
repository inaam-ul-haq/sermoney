<?php

namespace App\Http\Controllers;

use App\Models\Address;
use App\Models\Warehouse;
use Illuminate\Http\Request;

class WarehouseController extends Controller
{
    public function index()
    {
        $warehouses = Warehouse::with('addresses')->get();
               return view('admindashboard/misl',compact('warehouses'));
    }
    public function store(Request $request)
    {

        $validated = $request->validate([
            'warehouse' => 'required|string|max:255',
            'type' => 'required|string|in:air,martial',
            'street_no' => 'required|string|max:255',
            'country' => 'required|string|max:255',
            'city' => 'required|string|max:255',
            'state' => 'required|string|max:255',
            'postal_code' => 'required|string|max:20',
        ]);

        // Save to warehouses table
        $warehouse = Warehouse::create([
            'name' => $validated['warehouse'],
            'type' => $validated['type'],
        ]);

        // Save to addresses table
        Address::create([
            'warehouse_id' => $warehouse->id,
            'street' => $validated['street_no'],
            'city' => $validated['city'],
            'state' => $validated['state'],
            'country' => $validated['country'],
            'postal_code' => $validated['postal_code'],
        ]);

        return redirect()->route('misl')->with('success', 'Warehouse and Address saved successfully');
    }
}
