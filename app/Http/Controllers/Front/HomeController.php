<?php

    namespace App\Http\Controllers\Front;

    use App\Http\Controllers\Controller;
    use Illuminate\Http\Request;
    use App\Models\Subscribe;
    use App\Models\Contact;
    use App\Models\Product;
    use App\Models\Category;
    use App\Models\Review;
    use App\Models\Timing;
    use App\Models\FAQs;
    use App\Http\Requests\SubscribeRequest;
    use App\Http\Requests\ContactRequest;
    use DB;

    class HomeController extends Controller{
        public function index(Request $request){
            $reviews_path = asset('/back/uploads/reviews/').'/';
            $reviews = Review::select('id', 'name', 'title' ,'status', 'message',
                                    DB::Raw("CASE
                                                WHEN ".'image'." != ''
                                                THEN CONCAT("."'".$reviews_path."'".", ".'image'.")
                                                ELSE CONCAT("."'".$reviews_path."'".", 'default.png')
                                            END as image")
                                )
                                ->get();

            $menu_path = asset('/back/uploads/category/').'/';
            $menu = Category::select('id', 'name', 'description',
                                        DB::Raw("CASE
                                            WHEN ".'image'." != ''
                                            THEN CONCAT("."'".$menu_path."'".", ".'image'.")
                                            ELSE CONCAT("."'".$menu_path."'".", 'default.png')
                                        END as image")
                                )
                                ->where(['status' => 'active'])
                                ->inRandomOrder()
                                ->limit(5)
                                ->get();

            if($menu->isNotEmpty()){
                foreach ($menu as $row) {
                    
                    $products = Product::select('id', 'name', 'description', 'price')->where(['category_id' => $row->id, 'status' => 'active'])->get();

                    if($products->isNotEmpty())
                        $row->products = $products;
                    else
                        $row->products = collect();
                }
            }

            $category_path = asset('/back/uploads/category/').'/';
            $categories = Category::select('id', 'name', 'description',
                                        DB::Raw("CASE
                                            WHEN ".'image'." != ''
                                            THEN CONCAT("."'".$category_path."'".", ".'image'.")
                                            ELSE CONCAT("."'".$category_path."'".", 'default.png')
                                        END as image")
                                )
                                ->where(['status' => 'active'])
                                ->get();

            $timing = Timing::get();

            return view('front.index', ['reviews' => $reviews, 'menu' => $menu, 'categories' => $categories, 'timing' => $timing]);
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
            $faq = FAQs::where('status','active')->get();

            return view('front.faq')->with('data', $faq);
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
                return response()->json(['code' => 200, 'message' => 'Thanks For Contact us, we will take actions sortly.']);
            else
                return response()->json(['code' => 201, 'message' => 'Something went wrong, please try again later.']);
        }
    }
