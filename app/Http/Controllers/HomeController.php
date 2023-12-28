<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Banner;
use App\Models\Enquiry;
use App\Models\Blog;
use App\Models\Category;
use App\Models\Product;
use App\Models\Page;
use App\Models\Partner;

use Illuminate\Support\Facades\Session;

use Mail;

class HomeController extends Controller
{
    function index()
    {
        //$data['top_banner'] = Banner::orderBy('id', 'desc')->where('type', 'home')->first();
        $data['top_banner'] = Banner::orderBy('id', 'desc')->get();
        $data['blogs'] = Blog::orderBy('id', 'desc')->limit(3)->get();
        return view('frontend.index')->with($data);
    }
    function blog()
    {
        $data['blogs'] = Blog::orderBy('id', 'desc')->paginate(15);;
        return view('frontend.blog')->with($data);
    }
    function blogDetail(Request $request, $slug)
    {
        $data['blog'] = Blog::orderBy('id', 'desc')->where('slug', $slug)->first();
        return view('frontend.blog-details')->with($data);
    }
    function inspiration()
    {
        return view('frontend.inspiration');
    }

    function product(Request $request)
    {
        $data['categories'] = Category::where(['status' => 1, 'parent_id' => null])->orderby('title', 'asc')->get();
        return view('frontend.kategorien')->with($data);
    }
    function category(Request $request, $slug)
    {

        $categorySlugs = explode('/', $slug);
        $end_slug = end($categorySlugs);
        // $category = Category::where('slug', array_shift($categorySlugs))->whereNull('parent_id')->first();
        // if ($category) {
        //     foreach ($categorySlugs as $slug) {
        //         $category = $category->childs()->where('slug', $slug)->first();
        //         if (!$category) {
        //             // Handle invalid category or show a 404 page
        //             abort(404);
        //         }
        //     }
        // }

        $categories = Category::where(['status' => 1, 'slug' => $end_slug])->with('subcategory')->first();
        $product = Product::where(['status' => 1, 'slug' => $end_slug])->with('gallery')->first();
        //array_shift($categorySlugs); //dd($slug);

        $page = Page::where(['status' => 1, 'slug' => $end_slug])->first();
        if ($categories) {
            if (count($categories->subcategory) > 0) {
                return view('frontend.subcategory', compact('categories'));
            } else {
                $products = Product::where(['status' => 1, 'category_id' => $categories->id])->paginate(15);
                return view('frontend.produkte', compact('products'));
            }
        } else if ($product) {
            $latest_product = Product::where(['status' => 1])->latest()->take(4)->get();
            return view('frontend.produkte-details', compact('product', 'latest_product'));
        } else if ($page) {
            $template = $page->template_slug ? $page->template_slug : 'defaults';
            return view("frontend.{$template}", compact('page'));
        } else {
            abort(404);
        }
    }
    function productDetals($product_slug)
    {
        $product = Product::where(['status' => 1, 'slug' => $product_slug])->with('gallery')->first();
        return view('frontend.produkte-details', compact('product'));
    }
    function ueberUnsEdlesbad()
    {
        return view('frontend.ueber-uns-edlesbad');
    }
    function unsereLieferanten()
    {
        return view('frontend.unsere-lieferanten');
    }
    function dashbaord()
    {
        return view('frontend.user-dashboard');
    }
    public function saveEnquiry(Request $request)
    {
        $validate = $request->validate([
            'name' => 'regex:/^[a-zA-Z ]+$/',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required',
            'captcha' => 'required|captcha', // this will validate captcha
        ]);

        $enq = new Enquiry;
        $enq->name = $request->name;
        $enq->email = $request->email;
        $enq->mobile = $request->mobile;
        $enq->subject = $request->subject;
        $enq->message = $request->message;
        $enq->save();

        $arr = [
            'name' => $request->name,
            'email' => $request->email,
            'message' => $request->message,
        ];

        ///Mail::to('gaurav.kumar@infoicon.in')->send(new EnquiryMail($arr));


        return redirect()->back()->with('msg', 'Thank You for Your Inquiry.');
    }
}
