<?php

namespace App\Http\Controllers;

use App\Repositories\Product\IProductRepository;

class ProductController extends Controller
{
    private $repository;

    public function __construct(IProductRepository $repository)
    {
        $this->repository = $repository;
    }

    public function index()
    {
        $products = $this->repository->all();

        return view('products.index', compact('products'));
    }

    public function destroy()
    {
        
    }
}
