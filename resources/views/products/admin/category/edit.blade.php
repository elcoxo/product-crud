<x-layout crud="edit" title="{{$item->title}} - Edit">
    <x-slot:heading>
        {{$item->title}} - Edit
    </x-slot:heading>
    {{--    @include('blog.admin.category.includes.result_messages')--}}
    @if($item->exists)
        <form method="POST" id="store" action="{{route('products.admin.categories.update', $item->id)}}">
            @method('PATCH')
            @else

                <form method="POST" id="store" action="{{route('products.admin.categories.store')}}">
                    @endif
                    @csrf
                    <div class="container">
                        @php
                            /** @var \Illuminate\Support\ViewErrorBag $errors */
                        @endphp

                        @include('products.admin.category.includes.item_edit_main_col')
                        <br>

                        @if($item->exists)
                            <div class="row">
                                <div class="d-flex text-secondary gap-4">
                                    <x-form-label>ID: {{ $item->id }}</x-form-label>
                                    @if($item->created_at)
                                        <x-form-label>Created At: {{ $item->created_at }}</x-form-label>
                                    @endif
                                    @if($item->updated_at)
                                        <x-form-label>Updated At: {{ $item->created_at }}</x-form-label>
                                    @endif
                                    @if($item->deleted_at )
                                        <x-form-label>Deleted At: {{ $item->deleted_at  }}</x-form-label>
                                    @endif
                                </div>
                            </div>

                            <br>
                        @endif
                        <x-primary-button type="submit">Save</x-primary-button>
                    </div>
                </form>
        </form>
</x-layout>
