<?php

namespace App\Http\Controllers;

use App\Models\Location;
use App\Http\Controllers\Controller;
use App\Models\Velo;
use Illuminate\Http\Request;

class LocationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexF()
    {
        $data = Location::latest()->paginate(5);

        return view('YourLocations', compact('data'))->with('i', (request()->input('page', 1) - 1) * 5);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Location::latest()->paginate(5);

        return view('location.index', compact('data'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $velo = velo::all();

        return view('location.create', compact('velo'));
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
            'user'         =>  'required',
            'duree'         =>  'required'
        ]);


        $location = new location;

        $location->velo = $request->velo;
        $location->user = $request->user;
        $location->duree = $request->duree;


        $location->save();

        return redirect()->route('YourLocations')->with('success', 'Added successfully.');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Location  $location
     * @return \Illuminate\Http\Response
     */
    public function show(Location $location)
    {
        return view('location.show', compact('location'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Location  $location
     * @return \Illuminate\Http\Response
     */
    public function edit(Location $location)
    {
        return view('location.edit', compact('location'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Location  $location
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Location $location)
    {
        $request->validate([
            'velo'      =>  'required',
            'user'     =>  'required',
            'duree'     =>  'required'
        ]);




        $location = Location::find($request->hidden_id);

        $location->velo = $request->velo;

        $location->user = $request->user;

        $location->duree = $request->duree;


        $location->save();

        return redirect()->route('YourLocations')->with('success', 'Data has been updated successfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Location  $location
     * @return \Illuminate\Http\Response
     */
    public function destroy(Location $location)
    {
        $location->delete();

        return redirect()->route('YourLocations')->with('success', 'Data deleted successfully');

    }
}
