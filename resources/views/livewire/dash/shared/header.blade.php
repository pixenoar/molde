<div class="sticky-top">

    <div>
        <div class="d-flex justify-content-between align-items-center bg-white shadow-sm px-4 px-lg-5" style="height:4rem">
            <div>
                <a href="{{ route('in-dashboard') }}" class="fw-bold fs-5 text-decoration-none d-lg-none">CLIENTE</a>
            </div>
            <div>
                <div class="d-flex justify-content-end align-items-center">
                    <div class="dropdown d-none d-lg-block">
                        <a href="#" class="dropdown-toggle link-dark small text-decoration-none" data-bs-toggle="dropdown" data-bs-offset="0,10" aria-expanded="false">
                            {{ Auth::user()->nombreCompleto() }}
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end shadow border-0">
                            <li class="small">
                                <a href="{{ route('in-perfil') }}" class="dropdown-item">Mi Perfil</a>
                            </li>
                            <li class="small">
                                <a href="javascript:void(0)" wire:click="logout()" class="dropdown-item">Cerrar sesión</a>
                            </li>
                        </ul>
                    </div>
                    <div class="d-lg-none">
                        <button type="button" class="btn p-0" data-bs-toggle="offcanvas" data-bs-target="#menu">
                            <i class="bi bi-list fs-1"></i>
                        </button> 
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="offcanvas offcanvas-end w-75 bg-dark" tabindex="-1" id="menu" aria-labelledby="menu">
        <div class="offcanvas-body px-4 py-5">
            <div class="text-light fw-bold fs-5">CLIENTE</div>
            <ul class="nav flex-column my-4">
                <li class="nav-item">
                    <a href="{{ route('in-dashboard') }}" class="nav-link px-0 @if(request()->routeIs('in-dashboard')) link-info fw-bold @else link-light @endif">
                        <i class="bi bi-arrow-right-short"></i> Dashboard
                    </a>
                </li>
            </ul>
            <div class="text-light fw-bold fs-5">
                {{ Str::upper(Auth::user()->nombreCompleto()) }}
            </div>
            <ul class="nav flex-column my-4">
                <li class="nav-item">
                    <a href="{{ route('in-perfil') }}" class="nav-link px-0 @if(request()->routeIs('in-perfil')) link-info fw-bold @else link-light @endif">
                        <i class="bi bi-arrow-right-short"></i> Mi Perfil
                    </a>
                </li>
                <li class="nav-item">
                    <a href="javascript:void(0)" wire:click="logout()" class="nav-link link-light px-0">
                        <i class="bi bi-arrow-right-short"></i> Cerrar sesión
                    </a>
                </li>
            </ul>
        </div>
    </div>

</div>