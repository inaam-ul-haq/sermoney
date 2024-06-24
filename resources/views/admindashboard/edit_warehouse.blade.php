@extends('admindashboard.layout.app')

@section('content')
    <div class="container">
        <h2>Edit Warehouse</h2>
        <form action="{{ route('warehouses.update', $warehouse->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="warehouse">Warehouse Name</label>
                <input type="text" class="form-control" id="warehouse" name="warehouse" value="{{ $warehouse->name }}"
                    required>
            </div>

            <div class="form-group">
                <label for="type">Type</label>
                <select class="form-control" id="type" name="type" required>
                    <option value="air" {{ $warehouse->type == 'air' ? 'selected' : '' }}>Air</option>
                    <option value="martial" {{ $warehouse->type == 'martial' ? 'selected' : '' }}>Martial</option>
                </select>
            </div>

            <div class="form-group">
                <label for="street_no">Street No</label>
                <input type="text" class="form-control" id="street_no" name="street_no" value="{{ $address->street }}"
                    required>
            </div>

            <div class="form-group">
                <label for="country">Country</label>
                <select class="form-control" id="country" name="country" required>
                    @foreach ($countries as $country)
                        <option value="{{ $country->id }}" {{ $country->id == $address->country_id ? 'selected' : '' }}>
                            {{ $country->name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="state">State</label>
                <select class="form-control" id="state" name="state" required>
                    @foreach ($states as $state)
                        <option value="{{ $state->id }}" {{ $state->id == $address->state_id ? 'selected' : '' }}>
                            {{ $state->name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="city">City</label>
                <select class="form-control" id="city" name="city">
                    @foreach ($cities as $city)
                        <option value="{{ $city->id }}" {{ $city->id == $address->city_id ? 'selected' : '' }}>
                            {{ $city->name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="postal_code">Postal Code</label>
                <input type="text" class="form-control" id="postal_code" name="postal_code"
                    value="{{ $address->postal_code }}" required>
            </div>

            <button type="submit" class="btn btn-primary">Update</button>
        </form>
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
