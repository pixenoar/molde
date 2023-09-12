<div class="sticky-top">

    <div>
        <div class="bg-dark vh-100 p-0 d-none d-lg-block">
            <div class="bg-primary d-flex justify-content-center align-items-center" style="height:4rem">
                <a href="{{ route('in-dashboard') }}" class="link-light fw-bold fs-4 text-decoration-none">CLIENTE</a>
            </div>
            <div class="px-lg-4 py-lg-5">
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a href="{{ route('in-dashboard') }}" class="nav-link px-0 @if(request()->routeIs('in-dashboard')) link-info fw-bold @else link-light @endif">
                            <i class="bi bi-arrow-right-short"></i> Dashboard
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

</div>
