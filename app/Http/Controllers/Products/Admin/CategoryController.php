<?php

namespace App\Http\Controllers\Products\Admin;

use App\Http\Controllers\Controller;
use App\Models\ProductCategory;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $paginator = app(ProductCategory::class)->toBase()->get();
        return view('products.admin.category.index',
            compact('paginator'));
    }

    public function create()
    {
        $item = ProductCategory::make();
        $categoryList = ProductCategory::all();
        return view('products.admin.category.create', compact('item', 'categoryList'));
    }

    public function store(Request $request)
    {
        $data = $request->input();
        $item = ProductCategory::create($data);
        if ($item) {
            return redirect()
                ->route('products.admin.category.edit', $item->id)
                ->with('success', 'Category created.');
        } else {
            return back()
                ->withErrors(['msg' => 'Store error'])
                ->withInput();
        }
    }

    public function show($id)
    {
        dd(__METHOD__, \request()->all());
    }

    public function edit(string $id)
    {
        $item = ProductCategory::findOrFail($id);
        if (empty($item)) {
            abort(404);
        }
        $categoryList = ProductCategory::all();
        return view('products.admin.category.edit', compact('item', 'categoryList'));
    }

    public function update(Request $request, $id)
    {
        $item = ProductCategory::find($id);
        if (empty($item)) {
            return back()
                ->withErrors(['msg' => "Item id=[{$id}] not found"])
                ->withInput();
        }

        $data = $request->all();
        $result = $item->update($data);

        if ($result) {
            return redirect()
                ->route('products.admin.category.edit', $item->id)
                ->with('success', 'Category updated.');
        } else {
            return back()
                ->withErrors(['msg' => 'Update error'])
                ->withInput();
        }
    }
}
