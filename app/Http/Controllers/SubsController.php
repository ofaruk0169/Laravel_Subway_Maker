<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sub;

class SubsController extends Controller
{
    //index is a naming convention for the main /subs route. As it is the main page it is in theory the 'index'
    //"Show" naming convention is a Laravel naming convention, i'm guessing because you are literally 'showing' an ID of a particular URL variable
    
    //functions are called "actions in Laravel"
    public function index() {
        //This will return an object for each sub in the table.
        //$subs = Sub::all();

        //This gets all the values from the table, but orders them in ascending or descending order.
        //You need the get(); function to retrive everything if all(); is not used
        //$subs = Sub::orderBy('name', 'desc')->get();

        //$subs = Sub::where('type', 'herbs and cheese')->get();
        //This would only get the type if they were herbs and cheese

        //The following gets the sub based on the latest on first
        $subs = Sub::latest()->get();
       
    
    
        return view('subs.index', [
            'subs' => $subs,
        ]);
    }

    public function show($id) {
        return view('subs.show', ['id' => $id]);
    }

    public function create() {

        return view('subs.create');

    }
}
