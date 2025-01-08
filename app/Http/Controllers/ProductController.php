<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\Brand;
use App\Models\Category;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function showListProduct()
    {
        return view('list_products');
    }
}
