<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

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
        $request->validate([
            'model' => 'required|max:255|string',
            'description' => 'required|max:255|string',
            'image' => 'required|mimes:png,jpg,jpeg,webp,gif',
            'produced_on' => 'required|date',
           
        ]);

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $path = 'image/';
            $filename = time() . '.' . $extension;
            $file->move($path, $filename);
        } else {
           
            return redirect('cars/create')->withErrors(['image' => 'The brand field is required.']);
        }

        Car::create([
            'model' => $request->model,
            'description' => $request->description,
            'image' => $path . $filename,
            'produced_on' => $request->produced_on,
          
        ]);

        return redirect('cars/create')->with('status', 'Car created successfully');
    }

    public function show(string $id)
    {
        $car = Car::find($id);
        return view('car-detail', compact('car'));
    }


    public function edit(int $id)
    {
        $car = Car::findOrFail($id);
        return view('car-edit', compact('car'));
    }

    public function update(Request $request, int $id)
    {
        $request->validate([
            'model' => 'required|max:255|string',
            'description' => 'required|max:255|string',
            'image' => 'nullable|mimes:png,jpg,jpeg,webp,gif',
            'produced_on' => 'required|date',
           
        ]);

        $car = Car::findOrFail($id);

        if ($request->has('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $path = 'image/';
            
            $filename = time() . '.' . $extension;

            $file->move($path, $filename);

            if (File::exists($car->image)) {
                File::delete($car->image);
            }
           
        }
        $car->update([
            'model' => $request->model,
            'description' => $request->description,
            'produced_on' => $request->produced_on,
            'image' => $path.$filename 
               ]);
    }

    public function destroy(int $id)
    {
        $car = Car::findOrFail($id);

        if (File::exists($car->brand)) {
            File::delete($car->brand);
        }

        $car->delete();
        return redirect()->back()->with('status', 'Car deleted successfully');
    }
}


