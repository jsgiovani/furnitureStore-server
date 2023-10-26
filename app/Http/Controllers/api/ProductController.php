<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Http\Resources\ProductCollection;
use App\Http\Resources\ProductResource;
use App\Models\Product;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return new ProductCollection(Product::search()->filterByCategory()->filterByCompany()->limit()->get());
    }

    
    //find product by slug
    public function show($slug){
        return new ProductResource(Product::relations()->where('slug', $slug)->firstOrFail());
    }

    //search product(s) by keyword 
    public function search($search){
        return new ProductCollection(Product::relations()->where('name', 'like', '%' . $search . '%')->get());
    }
}
