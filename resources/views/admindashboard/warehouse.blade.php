@extends('admindashboard.layout.app')

@section('content')
    <style>
        body,
        html {
            height: 100%;
            margin: 0;
            font-family: Arial, sans-serif;
        }


        /* Center the content container */
        .center-container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            /* Full viewport height */
        }

    </style>
    <noscript>
        <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5DDHKGP" height="0" width="0"
            style="display: none; visibility: hidden"></iframe>
    </noscript>


    <div class="center-container">
        <div class="track-form">
            <form class="col" action="{{route('warehouses.store')}}" method="POST">
                @csrf
                <div class="row-md-6">
                    <label for="warehouse" class="form-label">WareHouse Name</label>
                    <input type="text" class="form-control" id="warehouse" placeholder="WareHouse" name="warehouse">
                </div>
                <div class="row-md-4">
                    <label for="inputState" class="form-label">Type</label>
                   <select id="inputType" class="form-select" name="type">
                            <option value="air">Air</option>
                            <option value="martial">Martial</option>
                        </select>
                </div>
                <div class="row-12">
                    <label for="inputAddress2" class="form-label">Street No</label>
                    <input type="text" class="form-control" name="street_no" id="inputAddress2" placeholder="Apartment, studio, or floor">
                </div>
                <div class="row-md-6">
                    <label for="inputCity" class="form-label">Country</label>
                   <select id="inputCountry" class="form-select" name="country">
                            <option value="" selected>Choose...</option>
                            <option value="us">United States</option>
                            <option value="ca">Canada</option>
                            <option value="uk">United Kingdom</option>
                            <option value="au">Australia</option>
                            <!-- Add more countries as needed -->
                        </select>
                </div>
                <div class="row-md-6">
                    <label for="inputCity" class="form-label">City</label>
                    <select id="inputCity" class="form-select" name="city">
                            <option value="" selected>Choose...</option>
                            <option value="ny">New York</option>
                            <option value="la">Los Angeles</option>
                            <option value="ldn">London</option>
                            <option value="syd">Sydney</option>
                            <!-- Add more cities as needed -->
                        </select>
                </div>
                <div class="row-md-4">
                    <label for="inputState" class="form-label">State</label>
                   <select id="inputState" class="form-select" name="state">
                            <option value="" selected>Choose...</option>
                            <option value="ny">New York</option>
                            <option value="ca">California</option>
                            <option value="tx">Texas</option>
                            <option value="nsw">New South Wales</option>
                            <!-- Add more states as needed -->
                        </select>
                </div>
                <div class="row-md-2">
                    <label for="postal_code" class="form-label">Postal_code</label>
                        <input type="text" class="form-control" id="postal_code" placeholder="Zip" name="postal_code">
                </div>

                <div class="row-4">
                    <button type="submit" class="btn btn-primary" style="margin-top: 1rem;">Submit</button>
                </div>
            </form>
        </div>
    </div>
@endsection
