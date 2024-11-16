<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Product extends Model
{
    protected $fillable = [
        'name',
        'price',
        'stock',
        'description',
    ];

    // accessor
    public function name(): Attribute
    {
        return Attribute::make(get: fn(string $value) => ucfirst($value) . "-fruit");
    }


    // accessor and mutator
    public function price(): Attribute
    {
        return Attribute::make(
            get: fn(string $value) => number_format($value),
            set: fn(string $value) => $value * 0.95, // Mutator
        );
    }
    // accessor
    public function stock(): Attribute
    {
        return Attribute::make(get: fn(string $value) => ucfirst($value));
    }
    // accessor
    public function description(): Attribute
    {
        return Attribute::make(get: fn(string $value) => Str::limit($value, 5));
    }
}
