<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Car;

class CarController extends Controller
{
    public function index()
    {
        $cars = Car::all();
        return view('car-list', compact('cars'));
    }

    public function create()
    {
    }

    public function store(Request $request)
    {
    }

    public function show(string $id)
    {
        $car = Car::find($id);
        // dd($car);
        return view('show', compact('car'));
    }
}
