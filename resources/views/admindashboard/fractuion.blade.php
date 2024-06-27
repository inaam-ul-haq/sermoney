@extends('admindashboard.layout.app')

@section('content')
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .custom-close-button {
            background-color: red;
            border-radius: 90%;
            color: white;
            padding: 2px 10px;
        }

        .custom-close-button:hover {
            background-color: darkred;
        }
    </style>
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5DDHKGP" height="0" width="0"
            style="display: none; visibility: hidden"></iframe></noscript>

    <div class="layout-wrapper layout-content-navbar  ">
        <div class="layout-container">
            <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0   d-xl-none ">
                <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
                    <i class="bx bx-menu bx-md"></i>
                </a>
            </div>
            <div class="layout-page">
                <div class="content-wrapper">
                    <div class="container-xxl flex-grow-1 container-p-y">
                        <div class="row pt-3 pb-4">
                            <div class="col-12 mb-md-3 mt-xl-0 mt-5">
                                <div class="top-container">
                                    <h1 class="fw-bold">Historial de facturación</h1>
                                    <h5>Resumen de tu historial de pagos.</h5>
                                </div>
                            </div>
                        </div>
                        <div class="row justify-content-between">
                            <div class="col-sm-6">
                                <div>
                    <form class="d-flex" method="GET" action="{{ route('fractuion') }}">
                        <button class="btn btn-outline-dark me-2 px-3" type="submit">
                            <svg width="20" height="20" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12.5 11H11.71L11.43 10.73C12.4439 9.55402 13.0011 8.0527 13 6.5C13 5.21442 12.6188 3.95772 11.9046 2.8888C11.1903 1.81988 10.1752 0.986756 8.98744 0.494786C7.79973 0.00281635 6.49279 -0.125905 5.23192 0.124899C3.97104 0.375703 2.81285 0.994767 1.90381 1.90381C0.994767 2.81285 0.375703 3.97104 0.124899 5.23192C-0.125905 6.49279 0.00281635 7.79973 0.494786 8.98744C0.986756 10.1752 1.81988 11.1903 2.8888 11.9046C3.95772 12.6188 5.21442 13 6.5 13C8.11 13 9.59 12.41 10.73 11.43L11 11.71V12.5L16 17.49L17.49 16L12.5 11ZM6.5 11C4.01 11 2 8.99 2 6.5C2 4.01 4.01 2 6.5 2C8.99 2 11 4.01 11 6.5C11 8.99 8.99 11 6.5 11Z" fill="black" fill-opacity="0.6" />
                            </svg>
                        </button>
                        <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Search" name="search" value="{{ $search }}">
                    </form>
                                </div>
                            </div>
                            <div class="col-sm-5 d-flex justify-content-sm-end mt-sm-0 mt-3">
                                <div class="dropdown drop-container">
                                    <a class="btn  dropdown-toggle ps-2" href="#" role="button"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        Total Users
                                    </a>

                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#">Action</a></li>
                                        <li><a class="dropdown-item" href="#">Another action</a></li>
                                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                                    </ul>
                                </div>
                                <div class="dropdown drop-container ms-3">
                                    <a class="btn dropdown-toggle ps-2" href="#" role="button"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        {{ $Totaluser }}
                                    </a>

                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#">Action</a></li>
                                        <li><a class="dropdown-item" href="#">Another action</a></li>
                                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                                    </ul>
                                </div>
                            </div>

                        </div>
                        <div class="col-12">
                            <div class="card table-card mt-3">
                                <h5 class="card-header table-header">0 Resultado(s)</h5>
                                <div class="table-responsive text-nowrap">
                                    <table class="table">
                                        <thead>
                                            <tr class="text-nowrap">
                                                <th>ARTÍCULO</th>
                                                <th>NOMBRE</th>
                                                <th>EMAIL</th>
                                                <th>NOMBRE DE USUARIO</th>
                                                <th>PAÍS</th>
                                                <th>EMPRESA</th>
                                                <th>STATUS</th>
                                                <th>ACTION</th>
                                            </tr>
                                        </thead>
                                        <tbody class="table-border-bottom-0">
                                            @foreach ($users as $user)
                                                <tr>
                                                    {{-- <th scope="row">{{ $index + 1 }}</th> --}}
                                                    <td>{{ $user->id }}</td>
                                                    <td>{{ $user->name }}</td>
                                                    <td>{{ $user->email }}</td>
                                                    <td>{{ $user->registration->username ?? 'N/A' }}</td>
                                                    <td>{{ $user->registration->country ?? 'N/A' }}</td>
                                                    <td>{{ $user->registration->company ?? 'N/A' }}</td>
                                                    <td>{{ $user->status }}</td>
                                                    <td>
                                                        <a href="#" class="btn btn-primary view-user-btn"
                                                            data-user-id="{{ $user->id }}">View</a>


                                                    </td>
                                                </tr>
                                            @endforeach


                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                        <div class="row justify-content-center mt-5">
                            <div class="d-flex justify-content-center align-items-center">
                                <nav aria-label="..." class="slider-div d-flex justify-content-center align-items-center">
                                    <ul class="pagination slider-content mb-0">
                                        <li class="page-item page-link disabled">
                                            <span class="page-link slider-btn"><img
                                                    src="./assets/img/images/typcn_arrow-up.png"></span>
                                        </li>
                                        <li class="page-item page-link"><a class="page-link" href="#">Primera</a>
                                        </li>
                                        </li>
                                        <li class="page-item page-link"><a class="page-link" href="#">Última</a>
                                        </li>
                                        <li class="page-item page-link">
                                            <a class="page-link slider-btn" href="#"><img
                                                    src="./assets/img/images/typcn_arrow-up (1).png" alt=""></a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- User Details Modal -->
    <div class="modal fade" id="userDetailsModal" tabindex="-1" role="dialog" aria-labelledby="userDetailsModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="userDetailsModalLabel">User Details</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!-- User details will be loaded here -->
                    <div id="userDetailsContent"></div>
                    <form id="updateStatusForm">
                        @csrf
                        <div class="form-group">
                            <label for="status"><strong>Status</strong></label>
                            <select class="form-control" id="status" name="status">
                                <option value="accepted">Accepted</option>
                                <option value="pending">Pedning</option>
                                <option value="rejected">Rejected</option>
                                <!-- Add more status options as needed -->
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary" style="margin-top:1rem">Update Status</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function() {
            // Set up AJAX with CSRF token
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $('.view-user-btn').on('click', function(e) {
                e.preventDefault();
                var userId = $(this).data('user-id');
                $.ajax({
                    url: '/users/' + userId,
                    method: 'GET',
                    success: function(response) {
                        $('#userDetailsContent').html(`
                    <p><strong>Name:</strong> ${response.name}</p>
                    <p><strong>Email:</strong> ${response.email}</p>
                `);
                        $('#status').val(response.status);

                        // Show the modal
                        $('#userDetailsModal').modal('show');
                    },
                    error: function() {
                        alert('Failed to fetch user details.');
                    }
                });
            });

            $('#updateStatusForm').on('submit', function(e) {
                e.preventDefault();
                var userId = $('.view-user-btn').data('user-id');
                var newStatus = $('#status').val();
                $.ajax({
                    url: '/users/' + userId + '/status',
                    method: 'PUT',
                    data: {
                        status: newStatus
                    },
                    success: function(response) {
                        alert('Status updated successfully.');
                        $('#userDetailsModal').modal('hide');
                    },
                    error: function() {
                        alert('Failed to update status.');
                    }
                });
            });

            // Close modal when close button is clicked
            $('#userDetailsModal').on('click', '.close', function() {
                $('#userDetailsModal').modal('hide');
            });
        });
    </script>



    <!-- Overlay -->
    <div class="layout-overlay layout-menu-toggle"></div>


    </div>
    <!-- / Layout wrapper -->
@endsection
