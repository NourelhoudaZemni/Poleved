<?php

namespace App\Http\Controllers;

use App\Models\Contactus;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContactUsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contactuss = Contactus::latest()->paginate(5);
        return view ('contactus.index')->with('contactus', $contactuss)->with('i', (request()->input('page', 1) - 1) * 5);;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('contactus.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $contactus = new Contactus();
        $contactus->full_name = $request->full_name;
        $contactus->email = $request->email;
        $contactus->phone = $request->phone;
        $contactus->message = $request->message;
        $contactus->save();

//        Event::create($input);
        return redirect('/contactus')->with('flash_message', 'contactus Addedd!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $contactus = Contactus::find($id);
        return view('contactus.show')->with('contactus', $contactus);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit(int $id)
    {
        $contactus = Contactus::find($id);
        return view('contactus.edit')->with('contactus', $contactus);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $contactus = Contactus::find($id);
        $input = $request->all();
        $contactus->update($input);
        return redirect('/contactus')->with('flash_message', 'Updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Contactus::destroy($id);
        return redirect('/contactus')->with('flash_message', 'deleted!');
    }
}
