@props(['crud','icon'=>false])

<div>
    @if($crud === 'index')
        <x-primary-button href="{{ url()->current() . '/create' }}" icon="bi-plus" variant="primary">Create
        </x-primary-button>
    @elseif($crud === 'show')
        <x-primary-button href="{{ url()->current() . '/edit' }}" icon="bi-plus" variant="primary">Edit
        </x-primary-button>
    @elseif($crud === 'create')
        <x-primary-button type="submit" icon="bi-check" variant="primary">Save</x-primary-button>
        <x-primary-button href="{{url()->previous()}}" icon="bi-x" variant="danger">Cancel</x-primary-button>
    @elseif($crud === 'edit')
        <x-primary-button type="submit" icon="bi-check" variant="primary">Save</x-primary-button>
        <x-primary-button href="{{url()->previous()}}" icon="bi-x" variant="danger">Cancel</x-primary-button>
    @endif
</div>

