<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\ProductGallery;
use App\Models\Category;
use App\Helpers\Helper;
use Illuminate\Support\Str;
use Exception;
use File;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        $data['products'] = Product::orderBy('id', 'desc')->paginate(15);
        return view('admin.product.index')->with($data);
    }

    public function create(Request $request)
    {
        $data['categories'] = Category::where('parent_id', null)->orderby('id', 'desc')->get();
        return view('admin.product.product-form')->with($data);
    }


    public function save(Request $request)
    {
        $validated = $request->validate([
            'category_id' => 'required|max:255',
            'title' => 'required|max:255',
            'price' => 'required|max:255',
            'thumbnail' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'status' => 'required'
        ]);

        if (!$request->product_id) {
            $product = new Product();
            $msg = "Product Added Successfully.";
        } else {
            $product = Product::findOrFail($request->product_id);
            $msg = "Product updated Successfully.";
        }
        try {
            $product->category_id = $request->category_id;
            $product->title = $request->title;
            $product->slug = Str::slug($request->title, '-');
            $product->price = $request->price;
            $product->sell_price = $request->sell_price;
            $product->description = $request->descriptions;
            $product->content = $request->content;
            $product->technical_data = $request->technical_data;
            $product->top_rated = $request->top_rated;
            $product->best_seller = $request->best_seller;
            $product->sku = $request->sku;
            $product->status = $request->status;

            $product->meta_title = $request->meta_title;
            $product->meta_keyword = $request->meta_keyword;
            $product->meta_description = $request->meta_description;


            if ($request->hasFile('thumbnail')) {
                $file_path = public_path('storage/products/');

                (!file_exists($file_path)) && mkdir($file_path, 0777, true);
                $name = $request->thumbnail->getClientOriginalName();
                $filename =  date('ymdgis') .  Helper::cleanString($name);
                $request->thumbnail->move($file_path, $filename);
                $product->thumbnail = $filename;
            }
            //dd($product);
            $product->save();

            // if ($request->hasFile('images')) {
            //     foreach ($request->file('images') as $image) {
            //         $file_path = public_path('storage/products/');
            //         (!file_exists($file_path)) && mkdir($file_path, 0777, true);

            //         $name = $image->getClientOriginalName();
            //         $filename =  date('ymdgis') .  Helper::cleanString($name);
            //         $image->move($file_path, $filename);

            //         $gallery = new ProductGallery();
            //         $gallery->product_id = $product->id;
            //         $gallery->image = '/storage/products/' . $filename;
            //         $gallery->save();
            //     }
            // }



            return redirect()->back()->with(["msg" => $msg, 'msg_type' => 'success']);
        } catch (Exception $e) {
            return redirect()->back()->with(["msg" => $e->getMessage(), 'msg_type' => 'danger']);
        }
    }

    public function action($type, $id)
    {
        if (!in_array($type, ['edit', 'delete', 'status']))
            return redirect()->back()->with(['message' => 'Invalid Action']);

        $product = Product::findOrFail($id);
        //$categories = Category::orderBy('id', 'desc')->get();
        $categories = Category::where('parent_id', null)->orderby('id', 'desc')->get();
        if ($type == "edit") {
            return view('admin.product.product-form', compact('product', 'categories'));
        }
        if ($type == "delete") {
            $delData = Product::where('id', $id)->delete();
            return response()->json(['msg' => 'deleted']);
        }
        if ($type == "status") {
            $product->status = $product->status == 1 ? 0 : 1;
            $product->save();
            return redirect()->back()->with(['message' => 'Status changed successfully.']);
        }
        return abort(404);
    }
}
