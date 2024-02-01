<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ProductAccesories;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use Exception;

class ProductAccesoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $product_slug = $request->get('product');
        $product = Product::where('slug', '=', $product_slug)->first();

        $data = ProductAccesories::with('product:id,title')->where('product_id', '=', $product->id)->orderBy('id', 'desc')->paginate(15);
        //dd($data);
        return view('admin.productaccesories.list', compact('data', 'product'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $product_slug = $request->get('product');
        $categories = Category::where('parent_id', null)->orderby('id', 'desc')->get();
        $product = Product::where('slug', '=', $product_slug)->select('id', 'title', 'slug')->first();
        return view('admin.productaccesories.form', compact('product', 'categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([
            'category_id' => 'required|max:255',
            'aproduct_id' => 'required|max:255',

        ]);

        //if (!$request->aproduct_id) {
        $model = new ProductAccesories();
        $msg = "Product Accesories Added Successfully.";
        /*} else {
            $aproduct_id = (int)$request['aproduct_id'];
            $model = ProductAccesories::findOrFail($aproduct_id);
            $msg = "Product Accesories updated Successfully.";
        }*/

        try {
            $model->category_id = $request->input('category_id');
            $model->aproduct_id = $request->input('aproduct_id');
            $model->product_id = $request->input('product_id');
            $model->accesories_ordering = $request->input('accesories_ordering');



            $model->save();

            return redirect()->back()->with(["msg" => $msg, 'msg_type' => 'success']);
        } catch (Exception $e) {
            return redirect()->back()->with(["msg" => $e->getMessage(), 'msg_type' => 'danger']);
        }
    }

    /**
     * Display the specified resource.
     */
    public function get_productby_cagegory($id)
    {
        $products = Product::where('category_id', '=', $id)->select('id', 'title', 'slug')->get();
        echo "<option>Select Category</option>";
        foreach ($products as $product) {
            echo "<option value='" . $product->id . "'>" . $product->title . "</option>";
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ProductAccesories $productAccesories)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ProductAccesories $productAccesories)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request, $id)
    {

        $model = ProductAccesories::where('id', '=', $id)->first();
        $product_slug = $request->input('product_slug');
        $model->delete();
        return redirect()->route('productaccesories.index', ['product' => $product_slug])->with('message', 'Delete Successfully.');
    }
}
