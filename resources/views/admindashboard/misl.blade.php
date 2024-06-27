@extends('admindashboard.layout.app')

@section('content')
    <!-- ?PROD Only: Google Tag Manager (noscript) (Default ThemeSelection: GTM-5DDHKGP, PixInvent: GTM-5J3LMKC) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5DDHKGP" height="0" width="0"
            style="display: none; visibility: hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar  ">
        <div class="layout-container">
            <!-- Menu -->
            <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0   d-xl-none ">
                <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
                    <i class="bx bx-menu bx-md"></i>
                </a>
            </div>

            <!-- / Menu -->



            <!-- Layout container -->
            <div class="layout-page">
                <div class="wrapper mt-xl-0 mt-5">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-12">
                                <h1 class="first-heading mt-5">Mis direcciones</h1>
                                <h5 class="second-h">Resumen de las direcciones de tus casilleros.</h5>
                            </div>
                            <div class="row">

                                <a class="button" href="{{ route('warehouse') }}"
                                    style="background-color: gray; color: black; padding: 10px 20px; text-decoration: none; border-radius: 5px;width: 14%">
                                    Warehouse
                                </a>
                            </div>
                        </div>

                        <div class="row my-2">
                            <div class="col-lg-9 table-content p-3 mt-4 rounded">
                                @if ($warehouses->isEmpty())
                                    <p>No warehouses found.</p>
                                @else
                                    <div class="row">
                                        <!-- Loop through warehouses and add data-id attribute to the Update button -->
                                        @foreach ($warehouses as $warehouse)
                                            <div class="col-md-6 col-12 mb-3">
                                                <div class="card">
                                                    <div class="card-header d-flex justify-content-between">
                                                        <div class="">
                                                            <h5>{{ $warehouse->name }}</h5>
                                                        </div>
                                                        <div class="">
                                                            <!-- Button trigger modal -->
                                                            <button type="button" class="btn btn-sm btn-success"
                                                                data-id="{{ $warehouse->id }}" data-bs-toggle="modal"
                                                                data-bs-target="#editWarehouseModal">
                                                                Update
                                                            </button>

                                                            <!-- Delete button and form -->
                                                            <form action="{{ route('warehouses.destroy', $warehouse->id) }}"
                                                                method="POST" style="display:inline;">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button type="submit"
                                                                    class="btn btn-sm btn-danger">Delete</button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                    <div class="card-body">
                                                        @if ($warehouse->addresses->isEmpty())
                                                            <p>No addresses found for this warehouse.</p>
                                                        @else
                                                            <table class="table table-bordered">
                                                                <tbody>
                                                                    <tr>
                                                                        <td class="fw-bold">Type</td>
                                                                        <td>{{ $warehouse->type }}</td>
                                                                    </tr>
                                                                    @foreach ($warehouse->addresses as $address)
                                                                        <tr>
                                                                            <td class="fw-bold">Country</td>
                                                                            <td>{{ $address->country }}</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="fw-bold">State</td>
                                                                            <td>{{ $address->state }}</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="fw-bold">City</td>
                                                                            <td>{{ $address->city }}</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="fw-bold">Street No</td>
                                                                            <td>{{ $address->street }}</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="fw-bold">Postal Code</td>
                                                                            <td>{{ $address->postal_code }}</td>
                                                                        </tr>
                                                                    @endforeach
                                                                </tbody>
                                                            </table>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                        <!-- Modal for editing warehouse -->
                                        <div class="modal fade" id="editWarehouseModal" tabindex="-1"
                                            aria-labelledby="editWarehouseModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h2 class="modal-title" id="editWarehouseModalLabel">Edit Warehouse
                                                        </h2>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="container edit_cont p-3">
                                                            {{-- <h2>Edit Warehouse</h2> --}}
                                                            <form id="editWarehouseForm" action="" method="POST">
                                                                @csrf
                                                                @method('PUT')

                                                                <div class="form-group">
                                                                    <label for="warehouse">Warehouse Name</label>
                                                                    <input type="text" class="form-control"
                                                                        id="warehouse" name="warehouse" required>
                                                                </div>

                                                                <div class="form-group">
                                                                    <label for="type">Type</label>
                                                                    <select class="form-control" id="type"
                                                                        name="type" required>
                                                                        <option value="air">Air</option>
                                                                        <option value="martial">Martial</option>
                                                                    </select>
                                                                </div>

                                                                <div class="form-group">
                                                                    <label for="street_no">Street No</label>
                                                                    <input type="text" class="form-control"
                                                                        id="street_no" name="street_no" required>
                                                                </div>

                                                                <div class="form-group">
                                                                    <label for="country">Country</label>
                                                                    <select class="form-control" id="country"
                                                                        name="country" required>
                                                                        <option value="">Choose Country...</option>
                                                                    </select>
                                                                </div>

                                                                <div class="form-group">
                                                                    <label for="state">State</label>
                                                                    <select class="form-control" id="state"
                                                                        name="state" required>
                                                                        <option value="">Choose State...</option>
                                                                    </select>
                                                                </div>

                                                                <div class="form-group">
                                                                    <label for="city">City</label>
                                                                    <select class="form-control" id="city"
                                                                        name="city">
                                                                        <option value="">Choose City...</option>
                                                                    </select>
                                                                </div>

                                                                <div class="form-group">
                                                                    <label for="postal_code">Postal Code</label>
                                                                    <input type="text" class="form-control"
                                                                        id="postal_code" name="postal_code" required>
                                                                </div>
                                                                 <div class="form-group">
                                                                    <label for="postal_code">Telefono</label>
                                                                    <input type="text" class="form-control"
                                                                        id="Telefono" name="Telefono" required>
                                                                </div>

                                                                <button type="submit"
                                                                    class="btn btn-success">Update</button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary"
                                                            data-bs-dismiss="modal">Close</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                @endif
                            </div>
                        </div>



                    </div>

                </div>

            </div>
            <!-- Content wrapper -->
        </div>
        <!-- / Layout page -->
    </div>



    <!-- Overlay -->
    <div class="layout-overlay layout-menu-toggle"></div>


    </div>
    <!-- / Layout wrapper -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            // Function to load states based on the selected country
            function loadStates(countryId) {
                var url = '{{ route('getStatesByCountry', ':id') }}';
                url = url.replace(':id', countryId);

                $.ajax({
                    url: url,
                    method: 'GET',
                    success: function(data) {
                        var stateOptions = '<option value="">Choose State...</option>';
                        $.each(data.states, function(index, state) {
                            stateOptions += '<option value="' + state.id + '">' + state.name +
                                '</option>';
                        });
                        $('#state').html(stateOptions);
                        $('#city').html(
                            '<option value="">Choose City...</option>'); // Clear city dropdown
                    }
                });
            }

            // Function to load cities based on the selected state
            function loadCities(stateId) {
                var url = '{{ route('getCitiesByState', ':id') }}';
                url = url.replace(':id', stateId);

                $.ajax({
                    url: url,
                    method: 'GET',
                    success: function(data) {
                        var cityOptions = '<option value="">Choose City...</option>';
                        $.each(data.cities, function(index, city) {
                            cityOptions += '<option value="' + city.id + '">' + city.name +
                                '</option>';
                        });
                        $('#city').html(cityOptions);
                    }
                });
            }

            $('.btn-success').on('click', function() {
                var warehouseId = $(this).data('id');
                var url = '{{ route('warehouses.getWarehouse', ':id') }}';
                url = url.replace(':id', warehouseId);

                $.ajax({
                    url: url,
                    method: 'GET',
                    success: function(data) {
                        $('#editWarehouseForm').attr('action',
                            '{{ route('warehouses.update', ':id') }}'.replace(':id',
                                warehouseId));
                        $('#warehouse').val(data.warehouse.name);
                        $('#type').val(data.warehouse.type);
                        $('#street_no').val(data.address.street);
                        $('#street_no').val(data.address.street);

                        // Populate the country select
                        var countryOptions = '<option value="">Choose Country...</option>';
                        $.each(data.countries, function(index, country) {
                            countryOptions += '<option value="' + country.id + '"' + (
                                country.id == data.address.country ? ' selected' :
                                '') + '>' + country.name + '</option>';
                        });
                        $('#country').html(countryOptions);

                        // Populate the state select
                        loadStates(data.address.country);

                        // Populate the city select
                        loadCities(data.address.state);

                        $('#postal_code').val(data.address.postal_code);

                        $('#editWarehouseModal').modal('show');
                    }
                });
            });

            // Add change event listener for country select
            $('#country').on('change', function() {
                var countryId = $(this).val();
                if (countryId) {
                    loadStates(countryId);
                } else {
                    $('#state').html('<option value="">Choose State...</option>');
                    $('#city').html('<option value="">Choose City...</option>');
                }
            });

            // Add change event listener for state select
            $('#state').on('change', function() {
                var stateId = $(this).val();
                if (stateId) {
                    loadCities(stateId);
                } else {
                    $('#city').html('<option value="">Choose City...</option>');
                }
            });
        });
    </script>

@endsection
