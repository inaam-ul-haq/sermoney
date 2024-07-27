<section class="topbar p-3">
    <div class="container-fluid d-flex justify-content-end container-info">
        <a class="text-white me-4" href="https://dev.sirmoney.net/login">Alerta tu paquete</a>
        <!-- <a class="text-white me-4" href="#"id="trackPackageLink">Rastrea tu paquete</a> -->
         
                    <a class="text-white me-4" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Rastrea tu paquete
                       
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#" onclick="openTracking('miamiPanama')">Rastrear Paquete Miami – Panama</a></li>
                        <li><a class="dropdown-item" href="#" onclick="openTracking('globalMiami')">Rastrear Paquete Global – Miami</a></li>
                    </ul>
                


        <a class="text-white me-4" href="https://api.whatsapp.com/send?phone=50766700607&text=Guarda%20nuestro%20n%C3%BAmero
%20en%20tus%20contactos%20para%20recibir%20nuestra%20promociones.%20Y%20despu%C3%A
9s%20env%C3%ADa%20este%20mensaje%20para%20comenzar.">WhatsApp</a>
        <a class="text-white me-4" href="#" data-target="#metodo-de-pago">Método de Pago</a>
        {{-- <a href="{{route('login')}}" type="button" class="text-white me-4">
                Login
        </a> --}}
        <img src="assets/images/topbar/panama 2 (1).png" class="img-fluid me-3" />
        <img src="assets/images/topbar/united-states 2 (2).png" class="img-fluid me-3" />
    </div>
</section>

<!-- =============navbar================= -->
<nav class="navbar navbar-expand-lg bg-white">
    <div class="container-fluid mx-lg-5 mx-0">
        <a class="navbar-brand headerlogo" href="{{ url('/') }}"><img src="assets/images/navbar/navbar-logo.png"
                class="logo-img img-fluid ms-3" alt="logo" /></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
            aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"><i class="bi bi-list"></i></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav m-auto">
                <li class="nav-item">
                    <a class="nav-link  " aria-current="page" href="{{ url('plan') }}">PLANES</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link  " href="{{ url('service') }}">SERVICIO</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link  " href="{{ url('Beneficious') }}">BENEFICIOS</a>
                </li>


                <li class="nav-item dropdown">
                    <a class="nav-link " href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        NOSOTROS
                        <svg width="9" height="7" viewBox="0 0 9 7" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M3.9917 6.34229L0.272949 2.62354C-0.000488281 2.3501 -0.000488281 1.93994 0.272949 1.69385L0.874512 1.06494C1.14795 0.818848 1.55811 0.818848 1.8042 1.06494L4.4292 3.71729L7.08154 1.06494C7.32764 0.818848 7.73779 0.818848 8.01123 1.06494L8.61279 1.69385C8.88623 1.93994 8.88623 2.3501 8.61279 2.62354L4.89404 6.34229C4.64795 6.58838 4.23779 6.58838 3.9917 6.34229Z"
                                fill="#474747" />
                        </svg>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </li>

            </ul>


            <a href="{{route('login')}}" typw="button" class="navbar-button btn p-3 px-3" style="    width: 13%;
    height: 50px;">
              Mi Cuenta
            </a>

        </div>
    </div>
</nav>
<!-- =============modal================= -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.11.6/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.min.js"></script>
    <script>
        function openTracking(option) {
            let url;
            if (option === 'miamiPanama') {
                url = 'https://fastcargotracking.com/tracking';
            } else if (option === 'globalMiami') {
                url = 'https://parcelsapp.com/widget';
            }
            window.open(url, '_blank', 'width=800,height=600');
        }
    </script>



<script>
        document.querySelector('a[data-target]').addEventListener('click', function(event) {
            event.preventDefault();
            const targetId = this.getAttribute('data-target');
            document.querySelector(targetId).scrollIntoView({ behavior: 'smooth' });
        });
    </script>