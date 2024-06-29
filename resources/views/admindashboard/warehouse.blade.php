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

        .main-box {
            width: 100%;
            max-width: 600px;
        }

        .card {
            background: lightgrey;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgb(129 123 123 / 39%);
        }


        .form-label {
            font-weight: bold;
        }

        .sub_btn {
            background-color: #f0bc74;
            border-color: #f0bc74;
            transition: background-color 0.3s, border-color 0.3s;
            color: black;
        }

        .sub_btn:hover {
            background-color: #f0bc74;
            border-color: #f0bc74;
        }
    </style>
    <noscript>
        <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5DDHKGP" height="0" width="0"
            style="display: none; visibility: hidden"></iframe>
    </noscript>

    <div class="center-container">
        <div class="main-box">
            <div class="card">
                <h4 class="card-title mb-4">Add New Warehouse</h4>
                <form class="row g-3" action="{{ route('warehouses.store') }}" method="POST">
                    @csrf
                    <div class="col-md-12">
                        <label for="warehouse" class="form-label">Warehouse Name</label>
                        <input type="text" class="form-control" id="warehouse" placeholder="Warehouse" name="warehouse">
                    </div>
                    <div class="col-md-12">
                        <label for="inputType" class="form-label">Type</label>
                        <select id="inputType" class="form-select" name="type">
                            <option value="AIR">AIR</option>
                            <option value="MARITIME">MARITIME</option>
                        </select>
                    </div>
                    <div class="col-md-12">
                        <label for="inputCountry" class="form-label">Country</label>
                        <select id="inputCountry" class="form-select" name="country">
                            <option value="" selected>Choose...</option>
                            @foreach ($countries as $country)
                                <option value="{{ $country->id }}">{{ $country->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-12">
                        <label for="inputState" class="form-label">State</label>
                        <select id="inputState" class="form-select" name="state" disabled>
                            <option value="" selected>Choose...</option>
                        </select>
                    </div>
                    <div class="col-md-12">
                        <label for="inputCity" class="form-label">City</label>
                        <select id="inputCity" class="form-select" name="city" disabled>
                            <option value="" selected>Choose...</option>
                        </select>
                    </div>
                    <div class="col-md-12">
                        <label for="inputAddress2" class="form-label">Street No</label>
                        <input type="text" class="form-control" name="street_no" id="inputAddress2"
                            placeholder="Apartment, studio, or floor">
                    </div>
                    <div class="col-md-12">
                        <label for="postal_code" class="form-label">Postal Code</label>
                        <input type="text" class="form-control" id="postal_code" placeholder="Postal Code" name="postal_code">
                    </div>
                      <div class="col-md-12">
                        <label for="Telefono" class="form-label">Telefono</label>
                        <input type="text" class="form-control" id="Telefono" placeholder="Telefono" name="Telefono">
                    </div>
                    <div class="col-12">
                        <button type="submit" class="btn w-100 sub_btn">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const countrySelect = document.getElementById('inputCountry');
            const stateSelect = document.getElementById('inputState');
            const citySelect = document.getElementById('inputCity');

            countrySelect.addEventListener('change', function() {
                const countryId = this.value;
                if (countryId) {
                    fetch(`/get-states/${countryId}`)
                        .then(response => response.json())
                        .then(states => {
                            stateSelect.innerHTML = '<option value="" selected>Choose...</option>';
                            states.forEach(state => {
                                stateSelect.innerHTML +=
                                    `<option value="${state.id}">${state.name}</option>`;
                            });
                            stateSelect.disabled = false;
                            citySelect.innerHTML = '<option value="" selected>Choose...</option>';
                            citySelect.disabled = true;
                        });
                } else {
                    stateSelect.innerHTML = '<option value="" selected>Choose...</option>';
                    stateSelect.disabled = true;
                    citySelect.innerHTML = '<option value="" selected>Choose...</option>';
                    citySelect.disabled = true;
                }
            });

            stateSelect.addEventListener('change', function() {
                const stateId = this.value;
                if (stateId) {
                    fetch(`/get-cities/${stateId}`)
                        .then(response => response.json())
                        .then(cities => {
                            citySelect.innerHTML = '<option value="" selected>Choose...</option>';
                            cities.forEach(city => {
                                citySelect.innerHTML +=
                                    `<option value="${city.id}">${city.name}</option>`;
                            });
                            citySelect.disabled = false;
                        });
                } else {
                    citySelect.innerHTML = '<option value="" selected>Choose...</option>';
                    citySelect.disabled = true;
                }
            });
        });
    </script>
@endsection
