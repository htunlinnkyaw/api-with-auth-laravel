<?php

namespace App\Repositories;

use App\Models\Product;
use App\Repositories\Contracts\BaseRepository;

class ProductRepository implements BaseRepository
{
    protected $model;
    public function find($id)
    {
        $this->model = Product::class;
    }
    public function create(array $data)
    {

    }
    public function update($id, array $data)
    {

    }
    public function delete($id)
    {

    }
}
