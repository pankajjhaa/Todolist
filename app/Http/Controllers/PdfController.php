<?php

namespace App\Http\Controllers;
use DB;
use PDF;
use Illuminate\Http\Request;
use App\models\Todo;
class PdfController extends Controller
{
    public function index(Request $request , $id)
    {
        // $items = DB::table("todos")->get();
        // view()->share('items',$items);
        // if($request->has('download')){
        // $pdf = PDF::loadView('pdfview');
        // return $pdf->download('pdfview.pdf');
        // }
        // return view('pdfview');

        $todo = Todo::find($id);
        return view('pdfview',compact('todo','id'));
    }
}
