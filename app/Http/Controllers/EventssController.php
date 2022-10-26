<?php

namespace App\Http\Controllers;

use App\Models\Eventss;
use App\Models\Sponsor;
use Illuminate\Http\Request;

class EventssController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function OurEvents()
    {
        $data = Eventss::all();

        return view('OurEvents', compact('data'));
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Eventss::latest()->paginate(5);
        return view('eventss.index', compact('data'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $sponsor = Sponsor::all();
        return view('eventss.create',compact('sponsor'));
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
            'name'          =>  'required',
            'date'          =>  'required',
            'details'          =>  'required',
            'address'          =>  'required',
            'places'          =>  'required',
            'mobile'          =>  'required',
            'sponsor'          =>  'required',
            'participants'          =>  'required',
            'image'         =>  'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048|dimensions:min_width=100,min_height=100,max_width=1000,max_height=1000'
        ]);
        $file_name = time() . '.' . request()->image->getClientOriginalExtension();
        request()->image->move(public_path('images'), $file_name);

        $eventss = new Eventss;
        $eventss->name = $request->name;
        $eventss->date = $request->date;
        $eventss->details = $request->details;
        $eventss->address = $request->address;
        $eventss->places = $request->places;
        $eventss->mobile = $request->mobile;
        $eventss->sponsor = $request->sponsor;
        $eventss->participants = $request->participants;
        $eventss->image = $file_name;
        $eventss->save();
        return redirect()->route('event.index')->with('success', 'Eventss created successfully.');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('eventss.show', ['event' => Eventss::findOrFail($id)]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('eventss.edit', ['event' => Eventss::findOrFail($id)]);
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
        $request->validate([
            'name'          =>  'required',
            'date'          =>  'required',
            'details'          =>  'required',
            'address'          =>  'required',
            'places'          =>  'required',
            'mobile'          =>  'required',
            'sponsor'          =>  'required',
            'participants'          =>  'required',
            'image'         =>  'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048|dimensions:min_width=100,min_height=100,max_width=1000,max_height=1000'
        ]);
        if ($request->hasFile('image')) {
            $file_name = time() . '.' . request()->image->getClientOriginalExtension();
            request()->image->move(public_path('images'), $file_name);
        } else {
            $file_name = $request->old_image;
        }
        $eventss = Eventss::findOrFail($id);
        $eventss->name = $request->name;
        $eventss->date = $request->date;
        $eventss->details = $request->details;
        $eventss->address = $request->address;
        $eventss->mobile = $request->mobile;
        $eventss->sponsor = $request->sponsor;
        $eventss->participants = $request->participants;
        $eventss->image = $file_name;
        $eventss->save();
        return redirect()->route('event.index')->with('success', 'Eventss updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $eventss = Eventss::findOrFail($id);
        $eventss->delete();
        return redirect()->route('event.index')->with('success', 'Eventss deleted successfully.');
    }
}
