<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use App\Repositories\Product\IProductRepository;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    private $repository;

    public function __construct(IProductRepository $repository)
    {
        $this->middleware('auth');

        $this->repository = $repository;
    }

    public function index(Request $request)
    {
        $query = $request->input('query');

        $products = $query ? $this->repository->searchProduct($query)
                           : $this->repository->all();

        return view('products.index', compact('products'));
    }

    public function create()
    {
        $tags = $this->repository->allTags();

        return view('products.create', compact('tags'));
    }

    public function edit($id)
    {
        $product = $this->repository->find($id);
        $tags = $this->repository->allTags();

        return view('products.edit', compact('product', 'tags'));
    }

    public function update($id, ProductRequest $request)
    {
        $this->repository->update($id, $request);

        $request->session()->flash('flash_message', 'Registro atualizado com sucesso!');

        return redirect('products');
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

        session()->flash('flash_message', 'Registro excluido com sucesso!');

        return redirect('products');
    }
}
