<?php

namespace App\Repositories\Product;

use App\Models\Product;
use App\Models\Tag;

class ProductRepository implements IProductRepository
{
    public function all()
    {
        return Product::all();
    }

    public function delete($id)
    {
        return Product::find($id)->delete();
    }

    public function allTags()
    {
        return Tag::pluck('name', 'id');
    }
}