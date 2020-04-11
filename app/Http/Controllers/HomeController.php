<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use OpenWeather;

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
    public function index()
    {
        $weather = new OpenWeather();
        $current = $weather->getForecastWeatherByCityName('tokyo');
        echo '<pre>';
        print_r($current);
        return view('home');
    }
    public function tokyo(Request $request){
        return view('weather');
    }
    public function yokohama(Request $request){
        return view('weather');
    }
    public function kyoto(Request $request){
        return view('weather');
    }
    public function osaka(Request $request){
        return view('weather');
    }
    public function sapporo(Request $request){
        return view('weather');
    }
    public function nagoya(Request $request){
        return view('weather');
    }
}
