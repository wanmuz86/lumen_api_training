<?php
 
namespace App\Http\Controllers;
 
use App\Place;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
 
class PlaceController extends Controller{
 
	public function createPlace(Request $request){
 
    	$place = Place::create($request->all());
 
    	return response()->json($place);
 
	}
 
	public function updatePlace(Request $request, $id){
 
    	$place  = Place::find($id);
    	$place->make = $request->input('make');
    	$place->model = $request->input('model');
    	$place->year = $request->input('year');
    	$place->save();
 
    	return response()->json($place);
	}  
 
	public function deletePlace($id){
    	$place  = Place::find($id);
    	$place->delete();
 
    	return response()->json('Removed successfully.');
	}
 
	public function index(){
 
    	$places  = Place::all();
 
    	return response()->json($places);
 
	}
}
?>