<?php

namespace App\Http\Controllers;

use App\Models\paslaugos;
use GuzzleHttp\Promise\Create;
use Illuminate\Http\Request;

class PaslaugosController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth']);
    }
    public function index(){
        $paslaugos = paslaugos::all();
        return view('paslaugos', compact('paslaugos'));
    }
    public function addServices(){
        return view('add_paslaugos');
    }
    public function store(Request $request){
        $validated = $request->validate([
            'name'=> 'required|max:100',
            'description'=>'required'
        ]);

        paslaugos::create([
            'name'=> request('name'),
            'description' => request('description')
        ]);

        return redirect('/');
    }
    public function editServices($id){
        $paslauga = paslaugos::where('id', $id)->firstOrFail();
        return view('edit_paslaugos', compact('paslauga'));
    }
    
    public function edit(Request $request, $id){
        $validated = $request->validate([
            'name'=> 'required|max:100',
            'description'=>'required'
        ]);
        $paslauga = paslaugos::where('id', $id)-> firstOrFail();
        $paslauga->name = request('name');
        $paslauga->description = request('description');
        $paslauga->save();

        return redirect('/');
    }
    public function askDelete($id){
        $paslauga = paslaugos::where('id', $id)->firstOrFail();
        return view('delete_paslaugos', compact('paslauga'));
    }
    public function delete($id){
        $paslauga = paslaugos::where('id', $id)->firstOrFail();
        $paslauga-> delete();

        return redirect('/');
    }
    public function search(){
        $paslaugos = paslaugos::where('name', 'LIKE', '%'.$_GET['query'].'%')->get();
        return view('/paslaugos', compact('paslaugos'));
    }
}
