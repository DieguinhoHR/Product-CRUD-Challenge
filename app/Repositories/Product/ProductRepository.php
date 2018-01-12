<?php

namespace App\Repositories\Product;

use App\Http\Requests\ProductRequest;
use App\Models\Product;
use App\Models\Tag;
use GuzzleHttp\Psr7\Request;

class ProductRepository implements IProductRepository
{
    public function all()
    {
        return Product::all();
    }

    public function allTags()
    {
        return Tag::pluck('name', 'id');
    }

    public function find($id)
    {
        return Product::where('id', $id)->first();
    }

    public function save(ProductRequest $request)
    {
        return Product::create($request->all());
    }

    public function update($id, ProductRequest $request)
    {
        return Product::findOrFail($id)->update($request->all());
    }

    public function delete($id)
    {
        return Product::find($id)->delete();
    }
}