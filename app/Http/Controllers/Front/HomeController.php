<?php

    namespace App\Http\Controllers\Front;

    use App\Http\Controllers\Controller;
    use Illuminate\Http\Request;
    use App\Models\Subscribe;
    use App\Http\Requests\SubscribeRequest;

    class HomeController extends Controller{
        public function index(Request $request){
            return view('front.index');
        }

        public function menu(Request $request){
            return view('front.menu');
        }

        public function gallery(Request $request){
            return view('front.gallery');
        }

        public function about(Request $request){
            return view('front.about');
        }

        public function contact(Request $request){
            return view('front.contact');
        }
        
        public function testimonial(Request $request){
            return view('front.testimonial');
        }
        
        public function faq(Request $request){
            return view('front.faq');
        }

        public function terms(Request $request){
            return view('front.terms');
        }

        public function privacy(Request $request){
            return view('front.privacy');
        }

        public function cart(Request $request){
            return view('front.cart');
        }

        public function shop(Request $request){
            return view('front.shop');
        }
        
        public function product_detail(Request $request){
            return view('front.product-detail');
        }

        public function checkout(Request $request){
            return view('front.checkout');
        }

        public function error(Request $request){
            return view('front.error');
        }

        public function subscribe(SubscribeRequest $request){
            dd($request->all());
        }
    }
