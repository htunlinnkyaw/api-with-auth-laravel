<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Repositories\ProductRepository;
use Illuminate\Http\Request;


class ProductController extends Controller
{
    protected $productRepository;
    public function __construct(ProductRepository $productRepository)
    {
        $this->productRepository = $productRepository;
    }

    public function index()
    {
        $products = $this->productRepository->all();
        return view('product.index', compact('products'));
    }

    public function create()
    {
        return view('product.create');
    }

    public function store(Request $request)
    {
        $this->productRepository->create([
            "name" => $request->name,
            "price" => $request->price,
            "stock" => $request->stock,
            "description" => $request->description,
        ]);

        return back();
        // return $request;
    }

    public function show($id)
    {
        $product = $this->productRepository->find($id);
        return view('product.detail', compact('product'));
    }

    public function edit($id)
    {
        $product = $this->productRepository->find($id);
        return view('product.edit', compact('product'));
    }

    public function update($id, Request $request)
    {
        $this->productRepository->update($id, [
            "name" => $request->name,
            "price" => $request->price,
            "stock" => $request->stock,
            "description" => $request->description
        ]);

        return redirect()->route('product.index');
    }

    public function destroy($id)
    {
        $this->productRepository->delete($id);
        return back();
    }
}

