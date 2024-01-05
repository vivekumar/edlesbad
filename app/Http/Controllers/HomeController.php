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
use App\Models\PagePdf;
use Illuminate\Support\Facades\Session;
use App\Helpers\Helper;
use Mail;

class HomeController extends Controller
{
    function index()
    {
        //$data['top_banner'] = Banner::orderBy('id', 'desc')->where('type', 'home')->first();
        $data['top_banner'] = Banner::orderBy('id', 'desc')->get();
        $data['blogs'] = Blog::orderBy('id', 'desc')->limit(3)->get();
        $data['latestProduct'] = Product::orderBy('id', 'desc')->limit(8)->get();
        $data['bestSeller'] = Product::orderBy('id', 'desc')->where('best_seller', 1)->limit(4)->get();
        $data['topRated'] = Product::orderBy('id', 'desc')->where('top_rated', 1)->limit(4)->get();
        $data['seo'] = [
            'meta_title' => Helper::getSettingData('default_meta_title'),
            'meta_keyword' => Helper::getSettingData('default_meta_keywords'),
            'meta_description' => Helper::getSettingData('default_meta_description')
        ];
        return view('frontend.index')->with($data);
    }
    // function blog()
    // {
    //     $data['blogs'] = Blog::orderBy('id', 'desc')->paginate(15);
    //     return view('frontend.blog')->with($data);
    // }
    function blogDetail(Request $request, $slug)
    {
        $data['blog'] = Blog::orderBy('id', 'desc')->where('slug', $slug)->first();
        $data['seo'] = [
            'meta_title' => $data['blog']->meta_title,
            'meta_keyword' => $data['blog']->meta_keyword,
            'meta_description' => $data['blog']->meta_description
        ];
        return view('frontend.blog-details')->with($data);
    }

    // function product(Request $request)
    // {
    //     $data['categories'] = Category::where(['status' => 1, 'parent_id' => null])->orderby('title', 'asc')->get();
    //     return view('frontend.kategorien')->with($data);
    // }
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
        $product = Product::where(['status' => 1, 'slug' => $end_slug])->with('gallery', 'pdfs')->first();
        //array_shift($categorySlugs); //dd($slug);

        $page = Page::where(['status' => 1, 'slug' => $end_slug])->first();
        if ($categories) {
            $seo = [
                'meta_title' => $categories->meta_title,
                'meta_keyword' => $categories->meta_keyword,
                'meta_description' => $categories->meta_description
            ];
            if (count($categories->subcategory) > 0) {
                return view('frontend.subcategory', compact('categories'));
            } else {
                $products = Product::where(['status' => 1, 'category_id' => $categories->id])->paginate(15);
                return view('frontend.produkte', compact('products', 'seo'));
            }
        } else if ($product) {
            $seo = [
                'meta_title' => $product->meta_title,
                'meta_keyword' => $product->meta_keyword,
                'meta_description' => $product->meta_description
            ];
            $latest_product = Product::where(['status' => 1])->latest()->take(4)->get();
            return view('frontend.produkte-details', compact('product', 'latest_product', 'seo'));
        } else if ($page) {
            $template = $page->template_slug ? $page->template_slug : 'defaults';
            $seo = [
                'meta_title' => $page->meta_title,
                'meta_keyword' => $page->meta_keyword,
                'meta_description' => $page->meta_description
            ];

            $data_array = ['page', 'seo'];

            if ($template == 'unsere-lieferanten') {
                $partners = Partner::where(['status' => 1])->orderby('title', 'asc')->get();
                $data_array[] = 'partners';
            } else if ($template == 'prospekte-download') {
                $pdfs = PagePdf::where(['status' => 1])->orderby('title', 'asc')->paginate(20);
                $data_array[] = 'pdfs';
            } else if ($template == 'kategorien') {
                $categories = Category::where(['status' => 1, 'parent_id' => null])->orderby('title', 'asc')->get();
                $data_array[] = 'categories';
            } else if ($template == 'blog') {
                $blogs = Blog::orderBy('id', 'desc')->paginate(15);
                $data_array[] = 'blogs';
            }

            return view("frontend.{$template}", compact($data_array));
        } else {
            abort(404);
        }
    }
    // function productDetals($product_slug)
    // {
    //     $product = Product::where(['status' => 1, 'slug' => $product_slug])->with('gallery')->first();
    //     return view('frontend.produkte-details', compact('product'));
    // }

    // function dashbaord()
    // {
    //     return view('frontend.user-dashboard');
    // }
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
