<?php

namespace App\Repositories\Product;

interface IProductRepository
{
    public function all();
    public function delete($id);
    public function allTags();
}