<?php

namespace App\Http\Controllers;

use App\Models\Eventss;
use Illuminate\Http\Request;

class EventssController extends Controller
{
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
        return view('eventss.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $eventss = new Eventss;
        $eventss->name = $request->name;
        $eventss->date = $request->date;
        $eventss->details = $request->details;
        $eventss->address = $request->address;
        $eventss->places = $request->places;
        $eventss->mobile = $request->mobile;
        $eventss->sponsor = $request->sponsor;
        $eventss->participants = $request->participants;
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
        $eventss = Eventss::findOrFail($id);
        $eventss->name = $request->name;
        $eventss->date = $request->date;
        $eventss->details = $request->details;
        $eventss->address = $request->address;
        $eventss->mobile = $request->mobile;
        $eventss->sponsor = $request->sponsor;
        $eventss->participants = $request->participants;
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
