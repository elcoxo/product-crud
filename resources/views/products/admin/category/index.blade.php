<x-layout crud="index">
    {{--    <x-topbar>Categories</x-topbar>--}}
    <x-slot:heading>
        Categories
    </x-slot:heading>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <nav class="navbar navbar-toggleable-md navbar-light bg-faded">
                    <a class="btn btn-primary" href="{{route('products.admin.categories.create')}}">Добавить</a>
                </nav>
                <div class="card">
                    <div class="card-body">
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Категория</th>
                                <th>Родитель</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($paginator as $item)
                                @php /** @var \App\Models\ProductCategory $item */@endphp
                                <tr>
                                    <td>{{$item->id}}</td>
                                    <td>
                                        <a href="{{route('products.admin.categories.edit', $item->id)}}">
                                            {{$item->title}}
                                        </a>
                                    </td>
                                    <td>
                                        {{ $item->parent_id }}
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>
</x-layout>
