@props(['type' => 'link','icon'=>false, 'variant'=>'primary'])

@if($type==="submit")
    <button {{$attributes->merge(['type'=> $type, 'class' => 'btn btn-' . $variant])}}>
        @if($icon)
            <span class="{{$icon}}"></span>
        @endif
        {{$slot}}
    </button>
@elseif($type==="link")
    <a {{$attributes->merge(['class' => 'btn btn-' . $variant])}}>
        @if($icon)
            <span class="{{$icon}}"></span>
        @endif
        {{$slot}}
    </a>
@endif
