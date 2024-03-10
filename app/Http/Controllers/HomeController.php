<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Competance;
use App\Models\Profile;
use App\Models\AboutMePage;
use App\Models\University;
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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $competances = Competance::all();
        $profile = Profile::first();
        $universityitem = University::all();
        $aboutmepage = new AboutMePage($profile,$competances,$universityitem);
        return view('home')->with('aboutmepage', $aboutmepage);
    }
}
