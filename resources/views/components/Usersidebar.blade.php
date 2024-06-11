<div id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">


    <div class="app-brand demo ">
        <a href="index-2.html" class="app-brand-link">
            <span class="app-brand-logo demo logo-span">

                <img src="../assets/img/images/profile-img-Photoroom 1.png" alt="">

            </span>
            <div class="d-flex flex-column align-items-start justify-content-start">
                <h6 class="app-brand-text demo menu-text fw-bold ms-2 mb-1">cristofer</h6>
                <span class="ms-2 sub-heading">pacifc22</span>

            </div>
            <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-xl-none">
                <i class="bx bx-chevron-left bx-sm align-middle"></i>
            </a>
        </a>

    </div>
    <li class="line menu-item my-2"></li>
    <li class="menu-item">
        <a href="{{ route('perfil') }}" class="menu-link">
            <svg width="24" height="22" viewBox="0 0 22 12" fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M11 6.6875C12.4942 6.6875 13.8142 7.045 14.8867 7.5125C15.8767 7.9525 16.5 8.9425 16.5 10.015V11.5H5.5V10.0242C5.5 8.9425 6.12333 7.9525 7.11333 7.52167C8.18583 7.045 9.50583 6.6875 11 6.6875ZM3.66667 6.91667C4.675 6.91667 5.5 6.09167 5.5 5.08333C5.5 4.075 4.675 3.25 3.66667 3.25C2.65833 3.25 1.83333 4.075 1.83333 5.08333C1.83333 6.09167 2.65833 6.91667 3.66667 6.91667ZM4.7025 7.925C4.36333 7.87 4.02417 7.83333 3.66667 7.83333C2.75917 7.83333 1.8975 8.02583 1.11833 8.365C0.786236 8.50695 0.50318 8.74337 0.30435 9.04488C0.10552 9.34638 -0.000315046 9.69967 7.04453e-07 10.0608V11.5H4.125V10.0242C4.125 9.26333 4.33583 8.54833 4.7025 7.925ZM18.3333 6.91667C19.3417 6.91667 20.1667 6.09167 20.1667 5.08333C20.1667 4.075 19.3417 3.25 18.3333 3.25C17.325 3.25 16.5 4.075 16.5 5.08333C16.5 6.09167 17.325 6.91667 18.3333 6.91667ZM22 10.0608C22 9.31833 21.56 8.65833 20.8817 8.365C20.0779 8.01427 19.2103 7.83327 18.3333 7.83333C17.9758 7.83333 17.6367 7.87 17.2975 7.925C17.6642 8.54833 17.875 9.26333 17.875 10.0242V11.5H22V10.0608ZM11 0.5C12.5217 0.5 13.75 1.72833 13.75 3.25C13.75 4.77167 12.5217 6 11 6C9.47833 6 8.25 4.77167 8.25 3.25C8.25 1.72833 9.47833 0.5 11 0.5Z"
                    fill="white" fill-opacity="0.7" />
            </svg>

            <div data-i18n="Dashboards" class="ms-2">Mi perfil</div>
        </a>
    </li>
    <li class="menu-item">
        <a href="{{ route('misl') }}" class="menu-link">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M0 1.45645C0 1.45645 4.09761 0.0591514 6.85714 0.00427078C9.05791 -0.0394973 10.2994 0.256676 12.4286 0.730361C14.6833 1.23197 15.6767 2.38356 18 2.54559C20.3883 2.71214 24 1.45645 24 1.45645V21.787C24 21.787 21.2484 23.1891 19.2857 23.6022C16.6868 24.1492 15.0369 24.1158 12.4286 23.6022C10.0945 23.1426 9.20607 21.8257 6.85714 21.4239C4.22712 20.974 0 21.787 0 21.787V1.45645Z"
                    fill="white" fill-opacity="0.7" />
                <path d="M7.71423 5.08691V17.0674" stroke="#1F2937" stroke-linecap="round" />
                <path d="M16.2858 5.08691V17.0674" stroke="#1F2937" stroke-linecap="round" />
            </svg>

            <div data-i18n="Dashboards" class="ms-2">Mis direcciones</div>
        </a>
    </li>

    <li class="menu-item button-list mt-2">
<form method="POST" action="{{ route('logout') }}">
       @csrf
        <button><span class="me-2"><svg width="22" height="18" viewBox="0 0 22 18" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M14 5.25V3.375C14 2.87772 13.8025 2.40081 13.4508 2.04917C13.0992 1.69754 12.6223 1.5 12.125 1.5H3.125C2.62772 1.5 2.15081 1.69754 1.79917 2.04917C1.44754 2.40081 1.25 2.87772 1.25 3.375V14.625C1.25 15.1223 1.44754 15.5992 1.79917 15.9508C2.15081 16.3025 2.62772 16.5 3.125 16.5H12.125C12.6223 16.5 13.0992 16.3025 13.4508 15.9508C13.8025 15.5992 14 15.1223 14 14.625V12.75M17 5.25L20.75 9M20.75 9L17 12.75M20.75 9H7.95312"
                        stroke="#483823" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                </svg></span>Cerrar sesión</button>
</form>
    </li>
    <li class="menu-item mt-4">
        <div class="d-flex justify-content-center align-items-center flex-column">
            <div class="d-flex justify-content-center align-items-center"><svg width="42" height="57"
                    viewBox="0 0 42 57" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M7.01328 11.2112L6.30884 23.8912L18.2844 16.8467L7.01328 11.2112Z" fill="#F0BC74" />
                    <path d="M19.6934 57V33.7533L36.6 45.0244L19.6934 57Z" fill="#F0BC74" />
                    <g filter="url(#filter0_dd_8_1307)">
                        <path d="M4.90002 23.8911L36.6 45.0245V4.16669L4.90002 23.8911Z" fill="#F0BC74" />
                    </g>
                    <defs>
                        <filter id="filter0_dd_8_1307" x="2.43187e-05" y="0.266687" width="41.5"
                            height="52.7578" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" type="matrix"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
                            <feOffset dy="1" />
                            <feGaussianBlur stdDeviation="2.45" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend mode="normal" in2="BackgroundImageFix"
                                result="effect1_dropShadow_8_1307" />
                            <feColorMatrix in="SourceAlpha" type="matrix"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend mode="normal" in2="effect1_dropShadow_8_1307"
                                result="effect2_dropShadow_8_1307" />
                            <feBlend mode="normal" in="SourceGraphic" in2="effect2_dropShadow_8_1307"
                                result="shape" />
                        </filter>
                    </defs>
                </svg>

                <h6 class="mb-0 text-white ">ElizaApp</h6>
            </div>
            <span class="version-span mt-2">v0.1.5.1</span>
        </div>
    </li>

</ul>


</div>
