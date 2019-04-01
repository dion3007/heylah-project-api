<?php
namespace App\Http\Controllers;
use App\Conselor;
use Illuminate\Http\Request;
class ConselorController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function index()
    {
     
     $conselor = Conselor::all();
     return response()->json($conselor);
    }
     public function create(Request $request)
     {
        $conselor = new Conselor;
       $conselor->name= $request->name;
       $conselor->avatar = $request->avatar;
       $conselor->description= $request->description;
       
       $conselor->save();
       return response()->json($conselor);
     }
     public function show($id)
     {
        $conselor = Conselor::find($id);
        return response()->json($conselor);
     }
     public function update(Request $request, $id)
     { 
        $conselor= Conselor::find($id);
        
        $conselor->name = $request->input('name');
        $conselor->avatar = $request->input('avatar');
        $conselor->description = $request->input('description');
        $conselor->save();
        return response()->json($conselor);
     }
     public function destroy($id)
     {
        $conselor = Conselor::find($id);
        $conselor->delete();
         return response()->json('product removed successfully');
     }
    }
