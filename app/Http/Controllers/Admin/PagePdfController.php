<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\PagePdf;
use Exception;
use File;

class PagePdfController extends Controller
{
    public function index(Request $request)
    {
        $data['pdfs'] = PagePdf::orderBy('id', 'desc')->paginate(15);
        return view('admin.page-pdf.index')->with($data);
    }

    public function create(Request $request)
    {
        return view('admin.page-pdf.add-form');
    }


    public function save(Request $request)
    {
        //
        $validated = $request->validate([
            'title' => 'required|max:255',
            'status' => 'required',
            "pdf" => "nullable|mimes:pdf|max:20000",
            "image" => "mimes:jpeg,jpg,png,gif|max:20000"
        ]);

        if (!$request->pdf_id) {
            $pagepdf = new PagePdf();
            $msg = "Partner Added Successfully.";
        } else {
            $pagepdf = PagePdf::findOrFail($request->pdf_id);
            $msg = "Partner updated Successfully.";
        }

        try {
            $pagepdf->title = $request->title;

            if ($request->hasFile('image')) {
                $name = $request->image->getClientOriginalName();
                $filename =  date('ymdgis') . $name;
                $request->image->move(public_path() . '/storage/pdf/', $filename);
                $pagepdf->image = '/storage/pdf/' . $filename;
            }
            if ($request->hasFile('pdf')) {
                //$name = $request->pdf->getClientOriginalName();
                $md5Name = md5_file($request->pdf->getRealPath());
                $guessExtension = $request->pdf->guessExtension();
                //dd($guessExtension);
                $filename =  date('ymdgis') . $md5Name . '.' . $guessExtension;
                $request->pdf->move(public_path() . '/storage/pdf/', $filename);
                $pagepdf->pdf = '/storage/pdf/' . $filename;
            }
            //$pagepdf->url = $request->url;
            $pagepdf->status = $request->status;
            $pagepdf->save();
            return redirect()->back()->with(["msg" => $msg, 'msg_type' => 'success']);
        } catch (Exception $e) {
            return redirect()->back()->with(["msg" => $e->getMessage(), 'msg_type' => 'danger']);
        }
    }

    public function action($type, $id)
    {
        if (!in_array($type, ['edit', 'delete', 'status']))
            return redirect()->back()->with(['message' => 'Invalid Action']);

        $pdf = PagePdf::findOrFail($id);

        if ($type == "edit") {
            return view('admin.page-pdf.add-form', compact('pdf'));
        }
        if ($type == "delete") {
            if (\File::exists(public_path($pdf->image))) {
                \File::delete(public_path($pdf->image));
            }
            $delData = PagePdf::where('id', $id)->delete();
            return response()->json(['msg' => 'deleted']);
        }
        if ($type == "status") {
            $pdf->status = $pdf->status == 1 ? 0 : 1;
            $pdf->save();
            return redirect()->back()->with(['message' => 'Status changed successfully.']);
        }
        return abort(404);
    }
}
