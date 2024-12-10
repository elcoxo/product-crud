<nav class="navbar sticky-top navbar-expand-md navbar-light bg-white shadow-sm mb-3">
    <div class="container">

        <a class="navbar-brand" href="{{ url('/') }}">
            {{$slot}}
        </a>


        <x-crud-button crud="{{$crud}}"></x-crud-button>

    </div>
</nav>
