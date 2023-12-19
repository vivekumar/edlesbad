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
    function kategorien()
    {
        return view('frontend.kategorien');
    }
    function product(Request $request)
    {

        $data['products'] = Product::where(['status' => 1])->get();
        return view('frontend.produkte')->with($data);
    }
    function productDetals(Request $request, $slug)
    {
        $data['product'] = Product::where(['status' => 1])->first();
        return view('frontend.produkte-details')->with($data);
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
