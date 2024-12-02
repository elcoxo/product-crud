<div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-dark">

    <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100 w-100">

        <a href="/"
           class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none">
            <span class="fs-5 d-none d-sm-inline">Menu</span>
        </a>
        <ul class="nav nav-pills  flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start w-100"
            id="menu">
            <x-nav-link href="/"
                        :active="request()->is('/')"
                        icon='bi-house'>
                Home
            </x-nav-link>
            <x-nav-link href="/admin/products"
                        :active="request()->is('admin/products*') && !request()->is('admin/products/categories*')"
                        icon='bi-box-seam'>
                Products
            </x-nav-link>
            <x-nav-link href="/admin/products/categories"
                        :active="request()->is('admin/products/categories*')"
                        icon='bi-grid'>
                Categories
            </x-nav-link>
            <x-nav-link href="/admin/users"
                        :active="request()->is('admin/users*')"
                        icon='bi-people'>
                Users
            </x-nav-link>

        </ul>
        <hr>
        <div class="dropdown pb-4">
            @guest
                @if (Route::has('login'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                @endif

                @if (Route::has('register'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                    </li>
                @endif
            @else
                <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle"
                   id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                    <span class="d-none d-sm-inline mx-1">
                        {{ Auth::user()->name }}
                    </span>
                </a>
                <ul class="dropdown-menu dropdown-menu-dark text-small shadow" aria-labelledby="dropdownUser1">
                    <li><a class="dropdown-item" href="#">Profile</a></li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li><a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                           document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                              class="d-none">
                            @csrf
                        </form>
                    </li>
                </ul>
            @endguest

        </div>

    </div>

</div>
