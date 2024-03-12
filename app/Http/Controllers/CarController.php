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

            // Validator 
            if ($request->isMethod('post')) {

                // $rule = [
                //     'model' => 'required|min:5|unique:cars',
                //     'product_on' => 'required',
                //     'description' => 'required',
                //     'image' => 'required|file|image|mimes:jpeg,png,jpg,gif|max:2048',
                // ];

                // $attribute = [
                //     'model' => 'model',
                //     'product_on' => 'product_on',
                //     'description' => 'description',
                //     'image' => 'image'
                // ];
                // $message = [
                //     'model.required' => 'Trường :attribute là bắt buộc',
                //     'model.min' => 'Trường model có độ dài phải lớn hơn :min',
                //     'product_on.required' => 'Trường :attribute là bắt buộc',
                //     'description.required' => 'Trường mô tả là bắt buộc',
                //     'image.required' => 'Trường ảnh là bắt buộc',
                // ];
                // $validateDor = Validator::make($rule, $message, $attribute);
                // if ($validateDor->fails()) {
                //     return redirect()->back()->withErrors($validateDor)->withInput();
                // } else { 
                //     if ($request->hasFile('image')) {
                //         $car = new Car();
                //         $image = $request->file('image');
                //         $imageName = time() . '_' . $image->getClientOriginalName();
                //         $image->move(public_path('images'), $imageName);
                //         $car->image = $imageName;
                //         $car->model = $validateDor['model'];
                //         $car->product_on = $validateDor['product_on'];
                //         $car->description = $validateDor['description'];
                //         $car->save();
                //         $msg = "success";
                //         Session::flash('message', $msg);

                //         return redirect()->route('cars.index');
                //     }
                // }
                // return redirect()->back()->withErrors($validateDor)->withInput();
                // Validate 
                $validateData = $request->validate([
                    'model' => 'required|min:5',
                    'product_on' => 'required|date',
                    'description' => 'required',
                    'image' => 'file|image|mimes:jpeg,png,jpg,gif|max:2048',
                ], [
                    'model.required' => 'Trường ảnh là bắt buộc',
                    'model.min' => 'Trường model có độ dài phải lớn hơn',
                    'product_on.required' => 'Trường thời gian là bắt buộc',
                    'product_on.date' => 'Trường thời gian là bắt buộc',
                    'description.required' => 'Trường mô tả là bắt buộc',
                    'image.required' => 'Trường ảnh là bắt buộc',
                    'image.image' => 'Trường này phải là ảnh',
                    'image.mimes' => 'Trường Kiểu ảnh là kiểu ảnh',
                ]);


                $car = new Car();
                if ($request->hasFile('image')) {
                    $image = $request->file('image');
                    $imageName = time() . '_' . $image->getClientOriginalName();
                    $image->move(public_path('images'), $imageName);
                    $car->image = $imageName;
                    $car->model = $validateData['model'];
                    $car->product_on = $validateData['product_on'];
                    $car->description = $validateData['description'];
                    $car->save();
                    $msg = "success";
                    Session::flash('message', $msg);

                    return redirect()->route('cars.index');
                }
                return redirect()->back()->withErrors($validateData)->withInput();
            }
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

    public function getEdit(string $id)
    {
    }
}
