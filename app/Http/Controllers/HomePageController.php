<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;

class HomePageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $cars = Car::all();
        /* $cars = Car::where('category', 'like', 'pickup')->get(); */

        return view('home')->with('cars', $cars);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        $car = Car::where('id', $id)->firstOrFail();

        return view('car')->with('car', $car);
    }

    /**
     * Display the specified resource.
     *
     * @param  string  $order
     * @param  string  $direction
     * @return \Illuminate\Http\Response
     */

    public function orderBy($order, $direction) {
        
        $cars = Car::orderBy($order, $direction)->get();

        return view('home')->with('cars', $cars);
    }

    public function filterBy($filter) {
        $cars = Car::where('category', 'like', $filter)->get();
        return view('home')->with('cars', $cars);
    }

}
