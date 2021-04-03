<?php

    namespace App\Http\Controllers\Front;

    use App\Http\Controllers\Controller;
    use Illuminate\Http\Request;
    use App\Models\Subscribe;
    use App\Models\Contact;
    use App\Models\Product;
    use App\Models\Category;
    use App\Models\Review;
    use App\Http\Requests\SubscribeRequest;
    use App\Http\Requests\ContactRequest;
    use DB;

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
            $email = $request->EMAIL;

            if(!empty($email) && $email != '' || $email != null){
                $curd = [
                        'email' => $email,
                        'created_at' => date('Y-m-d H:i:s'),
                        'updated_at' => date('Y-m-d H:i:s')
                ];

                $sub = Subscribe::insertGetId($curd);

                if($sub)
                    return response()->Json(['code' => 200, 'message' => "You've subscribed successfully."]);
                else
                    return response()->Json(['code' => 201, 'message' => "Faild to subscribe, Please try againa later !"]);
            }else{
                return response()->Json(['code' => 201, 'message' => "Somthing Went Wrong !"]);
            }
        }

        public function contact(Request $request){
            return view('front.contact');
        }

        public function contact_store(ContactRequest $request){
            if(!$request->ajax()){ exit('No direct script access allowed'); }

            $crud = [
                'name' => $request->name,
                'email' => $request->email,
                'phone' => $request->phone,
                'subject' => $request->subject,
                'message' => $request->message
            ];

            $contact = Contact::create($crud);

            if($contact)
                return response()->json(['code' => 200 ,'message' => 'Thanks For Contact us, we will take actions sortly.']);
            else
                return response()->json(['code' => 201 ,'message' => 'Something went wrong, please try again later.']);
        }
    }
