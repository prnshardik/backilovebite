<?php

    namespace App\Http\Controllers\Front;

    use App\Http\Controllers\Controller;
    use Illuminate\Http\Request;

    class HomeController extends Controller{
        public function index(Request $request){
            return view('front.index');
        }

        public function menu(Request $request){
            return view('front.menu');
        }
    }