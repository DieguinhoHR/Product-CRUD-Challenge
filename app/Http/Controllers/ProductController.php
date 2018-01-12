<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
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

    public function create()
    {
        $tags = $this->repository->allTags();

        return view('products.create', compact('tags'));
    }

    public function store(ProductRequest $request)
    {
        $this->repository->save($request);

        $request->session()->flash('flash_message', 'Registro inserido com sucesso!');

        return redirect('products');
    }

    public function destroy($id)
    {
        $this->repository->delete($id);

        return redirect('products');
    }
}
