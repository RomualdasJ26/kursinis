<?php

namespace App\Http\Controllers;

use App\Models\laikas;
use Illuminate\Http\Request;

class LaikasController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth']);
    }
    public function index(){
        $laikai = laikas::all();
        return view('laikas', compact('laikai'));
    }
    public function addServices(){
        return view('add_laikas');
    }
    public function store(Request $request){
        $validated = $request->validate([
            'diena'=> 'required|max:20',
            'valandos'=>'required'
        ]);

        laikas::create([
            'diena'=> request('diena'),
            'valandos' => request('valandos')
        ]);

        return redirect('/');
    }
    public function editServices($id){
        $laikas = laikas::where('id', $id)->firstOrFail();
        return view('edit_laikas', compact('laikas'));
    }
    
    public function edit(Request $request, $id){
        $validated = $request->validate([
            'diena'=> 'required|max:100',
            'valandos'=>'required'
        ]);
        $laikas = laikas::where('id', $id)-> firstOrFail();
        $laikas->diena = request('diena');
        $laikas->valandos = request('valandos');
        $laikas->save();

        return redirect('/');
    }
}
