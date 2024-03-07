<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Car;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;

class CarController extends Controller
{
    public function index()
    {
        $cars = Car::all();
        return view('car-list', compact('cars'));
    }

    public function create()
    {
        return view('car-create');
    }

    public function store(Request $request)
    {
        if ($request->isMethod('post')) {
            $validateData = $request->validate([
                'model' => 'required|min:5',
                'product_on' => 'required',
                'description' => 'required',
                'image' => 'required|file|image|mimes:jpeg,png,jpg,gif|max:2048',
            ], [
                'model.required' => 'The field of the model is required',
                'product_on.required' => 'The field of the time is required',
                'description.required' => 'The field of the description is required',
                'image.required' => 'The field of the image is required',
            ]);

            $car = new Car();

            if ($request->hasFile('image')) {
                $image = $request->file('image');
                $imageName = time() . '_' . $image->getClientOriginalName();
                $image->move(public_path('images'), $imageName);
                $car->image = $imageName;
            }

            $car->model = $validateData['model'];
            $car->product_on = $validateData['product_on'];
            $car->description = $validateData['description'];
            $car->save();

            if ($car) {
                $msg = "success";
            } else {
                $msg = "faild";
            }
            Session::flash('message', $msg);

            return redirect()->route('cars.index');
        }
    }


    public function show(string $id)
    {
        $car = Car::find($id);
        // dd($car);
        return view('show', compact('car'));
    }


    public function delete($id)
    {
    }
}
