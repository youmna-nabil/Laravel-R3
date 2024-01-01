<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;
use App\Models\Category;
use App\Traits\Common;

class CarController extends Controller
{
    use Common;
    private $columns = ['title', 'description', 'published', 'image', 'category_id'];

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
        $categories = Category::get();
        return view('addCar', compact('categories'));
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
        $messages = $this->messages();
        $data = $request->validate([
            'title'=>'required|string|max:50',
            'description' =>'required|string',
            'image' => 'required|mimes:png,jpg,jpeg|max:2048',
            'category_id' => 'required'
        ], $messages);
        //$data =  $request->only($this->columns);
        $fileName = $this->uploadFile($request->image, 'assets\images');
        $data['image'] = $fileName;
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
        $categories =Category::get() ;
        $car = Car::findOrFail($id);
        return view('updateCar', compact('car', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $messages = $this->messages();
        $data = $request->validate([
            'title'=>'required|string|max:50',
            'description' =>'required|string',
            'image' => 'sometimes|mimes:png,jpg,jpeg|max:2048',
            'category_id' => 'nullable',
        ], $messages);

         if ($request->hasFile('image')) {
            $fileName = $this->uploadFile($request->image, 'assets\images');
            $data['image'] = $fileName;
            unlink("assets/images/" . $request->oldImage);
         }

        //$data = $request->only($this->columns);
        $data['published'] = isset($request->published);
        Car::where('id',$id)->update($data);
        return redirect ('Car');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Car::where('id',$id)->delete();
        return redirect ('Car');
    }

    /**
     * show Trashed List.
     */

    public function trashed()
    {
        $Tcars = Car::onlyTrashed()->get();
        return view('trashed', compact('Tcars'));
    }

    public function forceDelete(string $id)
    {
        Car::where('id',$id)->forceDelete();
        return redirect ('Car');
    }

    public function restore(string $id)
    {
        Car::where('id',$id)->restore();
        return redirect ('Car');
    }

    public function messages(){
        return [
            'title.required'=>'العنوان السيارة مطلوب',
            'title.string'=>'Should be string',
            'description.required'=> 'should be text',
            'image.required'=> 'please choose an image',
            'image.mimes'=> 'incorrect image type',
            'image.max' => 'max file size exceeded',
            'category_id' => 'please select a category',
            ];
    }
}
