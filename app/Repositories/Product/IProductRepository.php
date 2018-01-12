<?php

namespace App\Repositories\Product;

use App\Http\Requests\ProductRequest;

interface IProductRepository
{
    public function all();
    public function delete($id);
    public function allTags();
    public function save(ProductRequest $request);
    public function find($id);
    public function update($id, ProductRequest $request);
}