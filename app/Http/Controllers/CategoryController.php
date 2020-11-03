<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class CategoryController extends Controller
{
    public function index($slug)
    {
        $id = explode('-', $slug);
        $id = array_pop($id);
        $category = \DB::table('categories')->where('id', $id)->first();
        $products = \DB::table('products')
            ->where('pro_category_id', $id)
            ->paginate(20);
        $viewData = [
            'products' => $products,
            'category' => $category
        ];

        return view('category', $viewData);
    }
}
