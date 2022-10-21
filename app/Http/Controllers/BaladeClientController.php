<?php

namespace App\Http\Controllers;

use App\Models\Category;

use App\Models\Balade;
use Illuminate\Http\Request;

class BaladeClientController extends Controller
{
    public function index()
    {
        $balades = Balade::all();
        return view ('baladesclient.index')->with('balades', $balades);
    }
    
     


    public function create()
    {
        return view('baladesclient.create');
    }
  
    public function store(Request $request)
    {
        $input = $request->all();
        Balade::create($input);
        return redirect('balade')->with('flash_message', 'balades Addedd!');  
    }
    
    public function show($id)
    {
        $student = Balade::find($id);
        return view('baladesclient.show')->with('balades', $student);
    }
    
    public function edit($id)
    {
        $student = Balade::find($id);
        return view('baladesclient.edit')->with('balades', $student);
    }
  
    public function update(Request $request, $id)
    {
        $student = Balade::find($id);
        $input = $request->all();
        $student->update($input);
        return redirect('balade')->with('flash_message', 'balades Updated!');  
    }
  
    public function destroy($id)
    {
        Balade::destroy($id);
        return redirect('balade')->with('flash_message', 'balades deleted!');  
    }
}