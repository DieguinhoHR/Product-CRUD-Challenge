<?php

namespace App\Repositories\Product;

use App\Models\Product;

class ProductRepository implements IProductRepository
{
    public function all()
    {
        return Product::all();
    }
}