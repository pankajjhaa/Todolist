<?php

namespace App\Http\Controllers;

use App\models\Todo;
use Illuminate\Http\Request;
use DB;
use PDF;

class TodoController extends Controller
{

    // public function __consruct()
    // {
    //     # code...
    //     $this->middleware('auth')->except('index');
    // }
    public function index()
    {
        $todos = auth()->user()->todos->sortBy('completed');
       
        return view('todos.index')->with(['todos'=>$todos]);
    }

    public function create()
    {
        return view('todos.create');
    }

    public function edit(Todo $todo)
    {
       
        return view('todos.edit',compact('todo'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title'=>'required|max:255',
        ]);
        // dd(auth()->user()->todos());
        // Todo::create($request->all());

        auth()->user()->todos()->create($request->all());
        return redirect()->back()->with('message','Todo created successfully');
    }

    public function update(Request $request , Todo $todo)
    {
        $request->validate([
            'title'=>'required|max:255',
        ]);
        $todo->update(['title'=>$request->title]);
        $todo->update(['description'=>$request->description]);
        $todo->update(['assigned_to'=>$request->assigned_to]);
        $todo->update(['priority'=>$request->priority]);
        $todo->update(['duration'=>$request->duration]);
        return redirect(route('todo.index'))->with('message','updated!');
        // dd($request->all());
    }

    public function complete(Todo $todo)        
    {
      $todo->update(['completed'=>true]);
      return redirect()->back()->with('message','Task marked as Completed');
    }

    public function incomplete(Todo $todo)        
    {
      $todo->update(['completed'=>false]);
      return redirect()->back()->with('message','Task marked as incompleted');
    }

    public function delete(Todo $todo)
    {
        $todo->delete();
        return redirect()->back()->with('message','Task delete');

    }

    public function show(Todo $todo)
    {
        return view('todos.show',compact('todo'));
    }


    public function pdf( Request $request ,$id){

        $todos = Todo::find($id);
view()->share('todos',$todos);
if($request->has('download')){
$pdf = PDF::loadView('todos.pdfview');
return $pdf->download('pdfview.pdf');
}
        return view('todos.pdfview',compact('todos','id'));
    }
}
