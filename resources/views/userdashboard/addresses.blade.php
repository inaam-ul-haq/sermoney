@extends('admindashboard.layout.app')

@section('content')
    <noscript>
        <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5DDHKGP" height="0" width="0"
            style="display: none; visibility: hidden"></iframe>
    </noscript>


    <!-- Menu -->
    <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
        <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
            <i class="bx bx-menu bx-md"></i>
        </a>
    </div>
    <div class="container" style="margin-left:15rem;">
        <div class="row">
            <div class="col-lg-12 table-content p-3 mt-4 rounded">
                @php
                    $user = Auth::user();
                @endphp
                @if ($user->status === 'accepted')
                    @if ($warehouses->isEmpty())
                        <p>No warehouses found.</p>
                    @else
                        <div class="d-flex flex-wrap">
                            <!-- Loop through warehouses and add data-id attribute to the Update button -->
                            @foreach ($warehouses as $warehouse)
                                <div class="col-md-6 col-12 mb-3" style="width:100% !important;">
                                    <div class="card">
                                        <div class="card-header d-flex justify-content-between">
                                            <div>
                                                <h5>{{ $warehouse->name }}</h5>
                                            </div>
                                            <div>
                                                <button type="button" class="btn btn-sm btn-success"
                                                    onclick="copyToClipboard('address-{{ $warehouse->id }}')">
                                                    Copy
                                                </button>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            @if ($warehouse->addresses->isEmpty())
                                                <p>No addresses found for this warehouse.</p>
                                            @else
                                                <div id="address-{{ $warehouse->id }}" class="d-none">
                                                    @foreach ($warehouse->addresses as $address)
                                                        Country: {{ $address->country }},
                                                        State: {{ $address->state }},
                                                        City: {{ $address->city }},
                                                        Street: {{ $address->street }},
                                                        Postal Code: {{ $address->postal_code }}
                                                        <br>
                                                    @endforeach
                                                </div>
                                                <table class="table table-bordered">
                                                    <tbody>
                                                        <tr>
                                                            <td class="fw-bold">Type</td>
                                                            <td>{{ $user->name }}
                                                                @if ($warehouse->type == 'AIR')
                                                                    SIRM
                                                                @elseif ($warehouse->type == 'MARITIME')
                                                                    SIRM MAR
                                                                @endif
                                                                {{ $registration->pobox }}
                                                            </td>
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
                                                            <tr>
                                                                <td class="fw-bold">Telefono</td>
                                                                <td>{{ $address->Telefono }}</td>
                                                            </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    @endif
                @else
                    <div class="card bg-warning text-dark"
                        style="border-radius: 0.375rem !important; top: 12rem; margin-left: 25rem; width: 26rem;">
                        <div class="card-body">
                            @if ($user->status === 'pending')
                                <p class="card-text">Your profile is pending. Please wait for approval.</p>
                            @elseif ($user->status === 'rejected')
                                <p class="card-text">Your profile has been rejected. Please contact support
                                    for more information.</p>
                            @else
                                <p class="card-text">You are not authorized to view this content.</p>
                            @endif
                        </div>
                    </div>
                @endif
            </div>
        </div>


       
@endsection

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>

<!-- JavaScript function to copy text to clipboard -->
<script>
    function copyToClipboard(elementId) {
        var element = document.getElementById(elementId);
        if (element) {
            var text = element.innerText || element.textContent;
            var tempInput = document.createElement("textarea");
            tempInput.value = text;
            document.body.appendChild(tempInput);
            tempInput.select();
            document.execCommand("copy");
            document.body.removeChild(tempInput);
            alert("Address copied to clipboard!");
        } else {
            alert("Element not found!");
        }
    }
</script>
