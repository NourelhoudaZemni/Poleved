<?php

namespace App\Http\Controllers;

use App\Models\balades;
use App\Models\categories;
use Illuminate\Http\Request;

class BaladesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function OurBalades()
    {
        $data = Balades::latest()->paginate(5);

        return view('OurBalades', compact('data'));
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Balades::latest()->paginate(5);
        return view('balades.index', compact('data'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Categories::all();
        return view('balades.create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title'          =>  'required',
            'quantity'          =>  'required',
            'price'          =>  'required',
            'discount_price'          =>  'required',
            'description'          =>  'required',
            'category'          =>  'required',
            'image'         =>  'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048|dimensions:min_width=100,min_height=100,max_width=1000,max_height=1000'
        ]);
        $file_name = time() . '.' . request()->image->getClientOriginalExtension();
        request()->image->move(public_path('images'), $file_name);

        $balades = new Balades;
        $balades->title = $request->title;
        $balades->description = $request->description;
        $balades->category = $request->category;
        $balades->quantity = $request->quantity;
        $balades->price = $request->price;
        $balades->discount_price = $request->discount_price;
        $balades->image = $file_name;
        $balades->save();

        return redirect()->route('balades.index')->with('success','Balade created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $balades = Balades::find($id);
        return view('balades.show',compact('balades'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $balades = Balades::find($id);
        $categories = Categories::all();
        return view('balades.edit',compact('balades','categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if ($request->hasFile('image')) {
            $file_name = time() . '.' . request()->image->getClientOriginalExtension();
            request()->image->move(public_path('images'), $file_name);
        } else {
            $file_name = $request->old_image;
        }

        $balades = Balades::find($id);
        $balades->title = $request->title;
        $balades->description = $request->description;
        $balades->category = $request->category;
        $balades->quantity = $request->quantity;
        $balades->price = $request->price;
        $balades->discount_price = $request->discount_price;
        $balades->image = $file_name;
        $balades->save();

        return redirect()->route('balades.index')->with('success','Balade updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Balades::find($id)->delete();
        return redirect()->route('balades.index')->with('success','Balade deleted successfully');
    }
}
