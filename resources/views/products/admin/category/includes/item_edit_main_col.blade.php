@php use App\Models\ProductCategory; @endphp
@php
    /** @var $item \App\Models\ProductCategory  */
     /** @var \Illuminate\Support\Collection $categoryList */
@endphp
<div class="row justify-content-center">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#maindata" role="tab">Main data</a>
                    </li>
                </ul>
                <br>
                <div class="tab-content">
                    <div class="tab-pane active" id="maindata" role="tabpanel">
                        <div class="form-group mb-3">
                            <x-form-label for="title">Title</x-form-label>
                            <div class="mt-2">
                                <input name="title"
                                       value="{{ $item->title }}"
                                       id="title"
                                       type="text"
                                       class="form-control"
                                       minlength="3"
                                       required>
                                <x-form-error name="title"/>
                            </div>
                        </div>
                        <div class="form-group mb-3">
                            <x-form-label for="slug">Slug</x-form-label>
                            <input name="slug"
                                   value="{{ $item->slug }}"
                                   id="slug"
                                   type="text"
                                   class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <x-form-label for="parent_id">Parent category</x-form-label>
                            <select name="parent_id"
                                    id="parent_id"
                                    class="form-select"
                                    required>
                                @foreach($categoryList as $categoryOption)
                                    <option value="{{ $categoryOption->id }}"
                                            @if($categoryOption->id == $item->parent_id) selected @endif>
                                        {{ $categoryOption->id }} . {{ $categoryOption->title }}
                                        {{--                                        {{ $categoryOption->id_title }}--}}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
