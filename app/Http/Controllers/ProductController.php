<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Contracts\Validation\Validator as ValidationValidator;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('product-list', compact('products'));
    }

    public function create()
    {
        $categories = Category::all();
        return view('product-create', compact('categories'));
    }

    // public function store(Request $request)
    // {
    //     $validateData = $request->validate([
    //         'name' => 'required|string',
    //         'old_price' => 'required|numeric',
    //         'new_price' => 'required|numeric',
    //         'description' => 'required|string',
    //         'detail_description' => 'required|string',
    //         'origin' => 'required|string',
    //         'standard' => 'required|string',
    //         'image' => 'file|image|mimes:jpeg,png,jpg,gif|max:2048',
    //         'category_id' => 'required',
    //     ]);

    //     if ($request->isMethod('post')) {
    //         $product = new Product();
    //         $product->name = $validateData['name'];
    //         $product->old_price = $validateData['old_price'];
    //         $product->new_price = $validateData['new_price'];
    //         $product->description = $validateData['description'];
    //         $product->detail_description = $validateData['detail_description'];
    //         $product->origin = $validateData['origin'];
    //         $product->standard = $validateData['standard'];
    //         $product->category_id = $validateData['category_id'];

    //         if ($request->hasFile('image')) {
    //             $image = $request->file('image');
    //             $imageName = time() . '_' . $image->getClientOriginalName();
    //             $image->move(public_path('images'), $imageName);
    //             $product->image = $imageName;
    //         }

    //         $product->save();
    //         $msg = "success";
    //         Session::flash('message', $msg);

    //         return redirect()->route('products.index');
    //     }

    //     return redirect()->back()->withErrors($validateData)->withInput();
    // }


    // public function delete(string $id)
    // {
    //     if (!empty($id)) {
    //         $car = Car::find($id);


    //         if ($car) {
    //             $image_path = public_path("images/{$car->image}");

    //             if (File::exists($image_path)) {
    //                 File::delete($image_path);
    //             }

    //             $car->delete();
    //             return redirect()->route('cars.index')->with('success', 'Car deleted successfully');
    //         } else {
    //             return redirect()->back()->with('error', 'Car not found');
    //         }
    //     } else {
    //         return redirect()->back()->with('error', 'Invalid car ID');
    //     }
    // }

    // public function show(string $id)
    // {
    //     $car = Car::find($id);
    //     $mfsList = Mf::all();

    //     return view('car-detail', compact('car', 'mfsList'));
    // }
    // public function getEdit(string $id)
    // {
    //     $car = Car::find($id);
    //     $mfsList = Mf::all();
    //     return view('car-update', compact('car', 'mfsList'));
    // }

    public function updateCar(Request $request, string $id)
    {
        $product = Product::find($id);

        $validateData = Validator::make(
            $request->all(),
            [
                'old_price' => 'required',
                'new_price' => 'required',
                'description' => 'required',
                'detail_description' => 'required',
                'origin' => 'required',
                'standard' => 'required',
                'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
            ],
            [
                'name.required' => 'Trường tên sản phẩm là bắt buộc.',
                'old_price.required' => 'Trường giá cũ là bắt buộc.',
                'new_price.required' => 'Trường giá mới là bắt buộc.',
                'description.required' => 'Trường mô tả là bắt buộc.',
                'detail_description.required' => 'Trường mô tả chi tiết là bắt buộc.',
                'origin.required' => 'Trường xuất xứ là bắt buộc.',
                'standard.required' => 'Trường tiêu chuẩn là bắt buộc.',
                'image.required' => 'Trường ảnh là bắt buộc.',
                'image.image' => 'Trường ảnh phải là một tệp hình ảnh.',
                'image.mimes' => 'Trường ảnh phải có định dạng jpeg, png, jpg, gif, hoặc svg.'
            ]
        );

        if ($validateData->fails()) {
            return redirect()->back()->withErrors($validateData)->withInput();
        }

        if ($request->hasFile('image')) {
            $image_path = public_path("images/{$product->image}");

            if (File::exists($image_path)) {
                File::delete($image_path);
            }

            $image = $request->file('image');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('images'), $imageName);
            $product->image = $imageName;
        }

        $product->name = $request->name;
        $product->old_price = $request->old_price;
        $product->new_price = $request->new_price;
        $product->description = $request->description;
        $product->detail_description = $request->detail_description;
        $product->origin = $request->origin;
        $product->standard = $request->standard;
        $product->category_id = $request->category_id;
        $product->save();
    }
}
