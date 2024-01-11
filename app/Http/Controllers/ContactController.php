<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    private $columns = ['name', 'email', 'phone', 'subject', 'message'];
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $con = Contact::get();
        return view('contact', compact('con'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $message = $this->message();
        $data = $request->validate([
            'name'=>'required|string|max:50',
            'email'=>'required|string',
            'phone'=>'required|string',
            'subject'=>'required|string',
            'message'=>'required|string'
        ], $message);
        Contact::create($data);
        return Redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
    public function message(){
        return [
            'name.required'=>'name is required',
            'email.required'=>'email is required',
            'phone.required'=>'phone is required',
            'subject.required'=>'subject is required',
            'message.required'=>'message is required',
            ];
    }
}
