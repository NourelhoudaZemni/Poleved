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
        $balade = Balade::find($id);
        $category= Category::all();
        return view('baladesclient.edit',compact('balade','category'))->with('balades', $balade);
    }
  
    public function update(Request $request, $id)
    {
        $balade = Balade::find($id); 
        return redirect('balade', compact('balade'));  
    }
  
    public function destroy($id)
    {
        Balade::destroy($id);
        return redirect('balade')->with('flash_message', 'balades deleted!');  
    }
    public function update_balade_confirm(Request $request , $id)
    {$balade = balade::find($id);
     $balade->title= $request->title;
     $balade->description= $request->description;
     $balade->price= $request->price;
     $balade->discount_price= $request->discount_price;
     $balade->category= $request->category;
     $balade->quantity= $request->quantity; 
    $balade->save();
    return redirect()->back();
    }
}