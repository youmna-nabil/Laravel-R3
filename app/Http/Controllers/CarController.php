<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;

class CarController extends Controller
{
    private $columns = ['title', 'description', 'published'];
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cars = Car::get();
        return view('cars', compact('cars'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('addCar');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //publish form data in array
        //return dd($request->request);
        //$cars = new car;

        //$cars->title = $request->title;
        //$cars->description =  $request->description;
        //if(isset($request->published)){

          //$cars->published = 1;
        //}else{
          //$cars->published = 0;
        //}
        //$cars->save();
        //return "data added successfully";

        $data =  $request->only($this->columns);
        $data['published'] = isset($request->published);
        Car::create($data);
        return redirect('Car');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $car = Car::findOrFail($id);
        return view('showCar', compact('car'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $car = Car::findOrFail($id);
        return view('updateCar', compact('car'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = $request->only($this->columns);
        $data['published'] = isset($request->published);
        Car::where('id',$id)->update($data);
        return redirect ('Car');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
