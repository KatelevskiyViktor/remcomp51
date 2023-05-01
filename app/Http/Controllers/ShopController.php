<?php

namespace App\Http\Controllers;

use App\Models\Page;
use App\Models\Product;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function index(){
        $pages = Page::where('slug', 'shop')->firstOrFail();
        $products = Product::orderBy('id','desc')->where('sold','1')->paginate(3, ['*'], 'pagefs');
        $products_arch = Product::orderBy('id','desc')->where('sold','0')->paginate(3, ['*'], 'pages');

        return view('shop', compact('pages', 'products', 'products_arch'));
    }
}
