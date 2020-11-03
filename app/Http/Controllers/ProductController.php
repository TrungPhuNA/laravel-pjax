<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index($slug)
    {
        $id             = explode('-', $slug);
        $id             = array_pop($id);
        $productsDetail = \DB::table('products')
            ->where('id', $id)
            ->first();

        $products = \DB::table('products')
            ->paginate(20);

        $viewData = [
            'productsDetail' => $productsDetail,
            'products'       => $products
        ];
        return view('product', $viewData);
    }
}
