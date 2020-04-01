<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sub;

class SubsController extends Controller
{

    // public function __construct() {
    //     $this->middleware('auth');
    // }

    //index all the records
    public function index() {
        
        //$subs = Sub::all();
        //$subs = Sub::orderBy('name', 'desc')->get();
        //$subs = Sub::where('type', 'herbs and cheese')->get();
       
        $subs = Sub::latest()->get();
        
        return view('subs.index', [
            'subs' => $subs,
        ]);
    }

    //show a single record
    public function show($id) {

        $sub = Sub::findOrFail($id);

        return view('subs.show', ['sub' => $sub]);
    }


    //create a new record. All naming conventions in Laravel
    public function create() {

        return view('subs.create');

    }
    //as we are storing the data. Redirect will return to the main page. 
    public function store() {

        // error_log(request('name')); This is a good way to debug. It diplsays the output in the localhost terminal
        
        $sub = new Sub();

        $sub->name = request('name');
        $sub->type = request('type');
        $sub->bread = request('bread');
        $sub->salad = request('salad');
        

        $sub->save();

        return redirect('/')->with('mssg', 'Thanks for your order!');
    }

    public function destroy($id) {

        $sub = Sub::findOrFail($id); 
        $sub->delete();

        return redirect('/subs');

    }
}
