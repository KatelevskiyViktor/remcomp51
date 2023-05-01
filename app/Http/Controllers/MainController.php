<?php

namespace App\Http\Controllers;

use App\Models\Page;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index(){
        $slug = 'home';
        $pages = Page::where('slug', $slug)->firstOrFail();
        return view('home', compact( 'slug','pages'));
    }

    public function show($slug){
            $pages = Page::where('slug', $slug)->firstOrFail();
            return view('remont', compact( 'pages'));

    }

    public function show_sec($slug){
        $pages = Page::where('slug', $slug)->firstOrFail();
        return view('problem', compact( 'pages'));

    }

    public function show_thi($slug){
        $pages = Page::where('slug', $slug)->firstOrFail();
        return view('usluga', compact( 'pages'));

    }

    public function show_fou($slug){
        $pages = Page::where('slug', $slug)->firstOrFail();
        return view('home', compact( 'pages'));

    }

    public function about(){

        $pages = Page::where('slug', 'about')->firstOrFail();
        return view('about', compact( 'pages'));
    }

    public function price(){

        $pages = Page::where('slug', 'price')->firstOrFail();
        return view('price', compact( 'pages'));
    }

    public function send()
    {
        if (!array_diff(array_keys($_POST), ['numPh','_token']) && $_POST['numPh'] != '') {
            $to = 'empirikk@gmail.com';
            $subject = $_POST['numPh'];
            $message = 'Сладкий, нужна твоя помощь, телефон: ' . $subject;

            return mail($to, $subject, $message);

        }else{
            return null;
        }
    }


}
