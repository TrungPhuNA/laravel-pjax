<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class CategoryController extends Controller
{
    public function index($slug, Request $request)
    {
        $id = explode('-', $slug);
        $id = array_pop($id);
        if ($request->c) $id = $request->c;

        $category = \DB::table('categories')->where('id', $id)->first();
        $products = \DB::table('products')
            ->where('pro_category_id', $id);
        if ($name = $request->n) {
            $products->where('pro_name', 'like', '%' . $name . '%');
        }

        $products = $products->paginate(5);

        $categoriesAll = \DB::table('categories')->get();
        $viewData      = [
            'products'      => $products,
            'category'      => $category,
            'query'         => $request->query(),
            'categoriesAll' => $categoriesAll
        ];

        return view('category', $viewData);
    }
}
