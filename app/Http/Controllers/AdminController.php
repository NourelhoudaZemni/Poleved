<?php

namespace App\Http\Controllers;

use App\Models\Category;

use App\Models\Balade;
use Illuminate\Http\Request;

class AdminController extends Controller
{
 public function view_category(){ 
   $data = category::all();
return view('admin.category', compact('data'));

 }
 
 public function view_balade(){ 

   $category = category::all();

return view('admin.balade', compact('category'));

 }

     public function ajouter_balade(Request $request){
     $balade = new balade;
     $balade -> title = $request -> title;
     $balade -> description = $request -> description;
     $balade -> price = $request -> price;
     $balade -> quantity = $request -> quantity;
     $balade -> discount_price = $request -> discount_price;
     $balade -> category = $request -> category;  
      
     $balade -> save();

      return redirect()->back()->with('message', 'balade ajoutée avec succés');
       }

       public function add_category(Request $request){
        $data = new category;
        $data -> category_name =$request -> category;
        $data -> save();
        return redirect()->back()-> with('message','Category added successfully'); 
         }
    
     public function delete_category($id){
      $data=category::find($id);
      $data->delete();
      return view('admin.balade');
     }

     public function delete_balade($id){
      $balade=balade::find($id);
      $balade->delete();
      return redirect()->back();
     }
 
}
