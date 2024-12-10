@props(['icon'=>null, 'active'=>false, 'href'=>'#'])

<li class="nav-item w-100">
    <a href="{{$href}}"
       class="{{ $active ? 'nav-link active px-2 align-middle w-100' : 'nav-link px-2 align-middle'}}"
       aria-current="{{$active ? 'page' : false}}">
        @if(!is_null($icon))
            <i class="fs-4 {{$icon}}"></i>
        @endif
        <span class="ms-1 d-none d-sm-inline">
            {{$slot}}
        </span>
    </a>
</li>
