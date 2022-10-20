<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Balade;
class BaladeController extends Controller
{
    public function index()
    {
        $balades = Balade::all();
        return view ('admin.balades.index')->with('balades', $balades);
    }
      
    public function show($id)
    {
        $balade = Balade::find($id);
        return view('admin.balades.show')->with('balades', $balade);
    }
     
    public function update(Request $request, $id)
    {
        $balade = Balade::find($id);
        $input = $request->all();
        $balade->update($input);
        return redirect('balade')->with('flash_message', 'balade Updated!');  
    }
  
    public function destroy($id)
    {
        Balade::destroy($id);
        return redirect('balade')->with('flash_message', 'balade deleted!');  
    }
}