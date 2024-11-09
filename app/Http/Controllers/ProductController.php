<?php

namespace App\Http\Controllers;

use App\Repositories\ProductRepository;
use Illuminate\Http\Request;


class ProductController extends Controller
{
    // protected $productRepository;
    // public function __construct(ProductRepository $productRepository)
    // {
    //     $this->productRepository = $productRepository;
    // }

    public function index()
    {

    }

    public function create()
    {
        return view('product.create');
    }

    public function store()
    {

    }

    public function show()
    {

    }

    public function edit()
    {

    }

    public function update()
    {

    }

    public function destroy()
    {

    }
}

