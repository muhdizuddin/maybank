<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        return view('home');
    }

    public function search(Request $request)
    {
        // $search = $request->input('timestamps');
        $search = $request->input('date');
        // dd($search);
        
        $date = Http::get( env('Time') . $search)->json();
        // dd($date);
        foreach($date as $date){
        $location = Http::get( env('Api_ISS') . $date)->json();}
        
        //dd($location);
        $latitude = $location['0']['latitude'];
        $longitude = $location['0']['longitude'];
        
        $place = Http::get( env('Location') . $latitude .','.$longitude);
        $array = json_decode($place,TRUE);
        //dd($array); 

        $map = Http::get( env('Maps') . $latitude .','. $longitude .'&z=4');
        //dd($map);

        // Return the search view with the resluts compacted
        return view('home', compact('location','map'),[ 'place' => $place ]);
    }

}
