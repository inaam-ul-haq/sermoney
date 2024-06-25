<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\State;
use App\Models\Address;
use App\Models\Country;
use App\Models\Warehouse;
use Illuminate\Http\Request;

class WarehouseController extends Controller
{
    public function index()
    {
        $warehouses = Warehouse::with('addresses')->get();
        $countries = Country::all();


        return view('admindashboard/misl', compact('warehouses', 'countries'));
    }

    public function show()
    {
        $countries = Country::all();
        return view('admindashboard.warehouse', compact('countries'));
    }
    public function store(Request $request)
    {
        // dd('23456789');
        $validated = $request->validate([
            'warehouse' => 'required|string|max:255',
            'type' => 'required|string|in:air,martial',
            'street_no' => 'required|string|max:255',
            'country' => 'required|string|max:255',
            'city' => 'nullable|string|max:255',
            'state' => 'required|string|max:255',
            'postal_code' => 'required|string|max:20',
        ]);
        $country = Country::find($validated['country']);
        $state = State::find($validated['state']);
        $city = City::find($validated['city']);

        $warehouse = Warehouse::create([
            'name' => $validated['warehouse'],
            'type' => $validated['type'],
        ]);

        Address::create([
            'warehouse_id' => $warehouse->id,
            'street' => $validated['street_no'],
            'city' => $city->name,
            'state' => $state->name,
            'country' => $country->name,
            'postal_code' => $validated['postal_code'],
        ]);

        return redirect()->route('misl')->with('success', 'Warehouse and Address saved successfully');
    }
    public function getStates($country_id)
    {
        $states = State::where('country_id', $country_id)->get();
        return response()->json($states);
    }

    public function getCities($state_id)
    {
        $cities = City::where('state_id', $state_id)->get();
        return response()->json($cities);
    }
    public function display()
    {
        $warehouses = Warehouse::with('addresses')->get();
        return view('userdashboard.addresses', compact('warehouses'));
    }


    public function edit($id)
    {
        $warehouse = Warehouse::with('addresses')->find($id);
        $address = Address::where('warehouse_id', $id)->first();
        $states = State::where('country_id', $address->country)->get();
        $cities = City::where('state_id', $address->state)->get();
        $countries = Country::all();

        return response()->json([
            'warehouse' => $warehouse,
            'address' => $address,
            'states' => $states,
            'cities' => $cities,
            'countries' => $countries,
        ]);
    }


    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'warehouse' => 'required|string|max:255',
            'type' => 'required|string|in:air,martial',
            'street_no' => 'required|string|max:255',
            'country' => 'required|string|max:255',
            'city' => 'nullable|string|max:255',
            'state' => 'required|string|max:255',
            'postal_code' => 'required|string|max:20',
        ]);
        $country = Country::find($validated['country']);
        $state = State::find($validated['state']);
        $city = City::find($validated['city']);

        $warehouse = Warehouse::find($id);
        $warehouse->update([
            'name' => $validated['warehouse'],
            'type' => $validated['type'],
        ]);

        $address = $warehouse->addresses->first();
        $address->update([
            'street' => $validated['street_no'],
            'city' => $city->name,
            'state' => $state->name,
            'country' => $country->name,
            'postal_code' => $validated['postal_code'],
        ]);

        return redirect()->route('misl')->with('success', 'Warehouse and Address updated successfully');
    }
    public function destroy($id)
    {
        $warehouse = Warehouse::find($id);
        $warehouse->addresses()->delete();
        $warehouse->delete();

        return redirect()->route('misl')->with('success', 'Warehouse deleted successfully');
    }

    public function getStatesByCountry($countryId)
    {
        $states = State::where('country_id', $countryId)->get();
        return response()->json(['states' => $states]);
    }

    // Method to get cities by state ID
    public function getCitiesByState($stateId)
    {
        $cities = City::where('state_id', $stateId)->get();
        return response()->json(['cities' => $cities]);
    }
}
