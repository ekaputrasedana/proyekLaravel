<?php

namespace App\Http\Controllers;

use App\Models\Formulir;
use Illuminate\Http\Request;

class FormulirController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Formulir::all();
        return view("HasilForm", compact("data"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("Form");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $formulir = new formulir();
        $formulir->firstName = $request->firstName;
        $formulir->lastName = $request->lastName;
        $formulir->address = $request->address;
        $formulir->dateOfBirth = $request->dateOfBirth;
        $formulir->email = $request->email;
        $formulir->gender = $request->gender;
        $formulir->status = $request->status;
        $formulir->job = $request->job;
        $formulir->terms = $request->terms;
        $formulir->save();
        return redirect('PersonListData');           
    }

    /**
     * Display the specified resource.
     */
    public function show(Formulir $formulir)
    {
        $data = Formulir::find($formulir->id);

        if ($data) {
            return view('detail', compact('data'));
        } else {
            return abort('404');
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Formulir $formulir)
    {
        $data = Formulir::find($formulir->id);

        if ($data) {
            return view('editform', compact('data'));
        } else {
            return abort('404');
        }
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Formulir $formulir)
    {
        $data = Formulir::find($formulir->id);

        $data->firstName = $request->input('firstName');
        $data->lastName = $request->input('lastName');
        $data->address = $request->input('address');
        $data->dateOfBirth = $request->input('dateOfBirth');
        $data->email = $request->input('email');
        $data->gender = $request->input('gender');
        $data->status = $request->input('status');
        $data->job = $request->input('job');
        $data->terms = $request->input('terms');
        $data->save();
        return redirect('PersonListData');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Formulir $formulir)
    {
        $data = Formulir::find($formulir->id);

        if (!$data) {
            return abort('404');
        }

        $data->delete();
        return redirect('PersonListData');
    } 
}