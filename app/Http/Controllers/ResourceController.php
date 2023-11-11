<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class ResourceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = \App\Models\formulir::all();

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
        {
            $formulir = new \App\Models\formulir();
            $formulir->firstname = $request->firstName;
            $formulir->lastName = $request->lastName;
            $formulir->address = $request->address;
            $formulir->dateOfBirth = $request->dateOfBirth;
            $formulir->email = $request->email;
            $formulir->gender = $request->gender;
            $formulir->religion = $request->religion;
            $formulir->status = $request->status;
            $formulir->job = $request->job;
            $formulir->terms = $request->terms;
            $formulir->save();
    
            return redirect('HasilForm');
    
        }
    }   

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data = \App\Models\formulir::find($id);

        if ($data) {
            return view('detail', compact('data'));
        } else {
        return abort(404);
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = \App\Models\formulir::find($id);

        if ($data) {
            return view('editform', compact('data'));
        } else {
        return abort(404);
        }
        


    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = \App\Models\formulir::find($id);

        if (!$data) {
            return abort(404);
         
        }
        
            $data->firstname = $request->input('firstName');
            $data->lastName = $request->input('lastName');
            $data->address = $request->input('address');
            $data->dateOfBirth = $request->input('dateOfBirth');
            $data->email = $request->input('email');
            $data->gender = $request->input('gender');
            $data->religion = $request->input('religion');
            $data->status = $request->input('status');
            $data->job = $request->input('job');
            $data->terms = $request->input('terms');
            $data->save();
    
            return redirect('HasilForm');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = \App\Models\formulir::find($id);

        if (!$data) {
            return abort(404); // Jika data tidak ditemukan, kembalikan respons 404
        }

        // Hapus data
        $data->delete();

        return redirect('HasilForm');
    }
    
}