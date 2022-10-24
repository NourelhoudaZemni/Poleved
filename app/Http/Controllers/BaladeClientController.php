<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Support\Facades\Validator;
use App\Models\Balade;
use Illuminate\Http\Request;

class BaladeClientController extends Controller
{
    public function index()
    {
        $balades = Balade::all();
        return view ('baladesclient.index')->with('balades', $balades);
    }
    
     


    public function create(Request $req)
    {


        $category = category::all();
     
        $balade = Balade::all();

        return view('baladesclient.create', compact('category'));
    }
  
    public function store(Request $request)
    {
        
        $request->validate([
            'title'=>'required',
            'description'=>'required', 
            'price'=>'required', 
            'discount_price'=>'required',
            'category'=>'required', 
            'quantity'=>'required', 
            'image'=>'required',             'date'=>'required|after:today',

        
        ],
            
    ['title.required'=>'Entrez votre le titre  s il vous plait',
    'date.after'=>'Start date must be after Today',

    'description.required'=>'Entrez votre la description  s il vous plait',
    'price.required'=>'Entrez le prix  s il vous plait',
    'discount_price.required'=>'Entrez votre le prix après reduction  s il vous plait',
    'category.required'=>'Entrez la catégorie s il vous plait',
    'quantity.required'=>'Entrez la quantité s il vous plait',
    'date.required'=>'Entrez la date s il vous plait',

   ]);


        $file_name = time() . '.' . request()->image->getClientOriginalExtension();

        request()->image->move(public_path('images'), $file_name);
        $balade = new Balade;

        $balade->title= $request->title;
        $balade->description= $request->description;
        $balade->price= $request->price;
        $balade->discount_price= $request->discount_price;
        $balade->category= $request->category;
        $balade->quantity= $request->quantity; 
        $balade->date= $request->date; 
        $balade->image = $file_name;
        $balade->save();

        return redirect()->route('balade.create')->with('success', 'Added successfully.');
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

    public function All_Balades(){
$balade=Balade::all();

        return view('baladesclient.display', compact('balade'));

    }
}