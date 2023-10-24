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
        return view("HasilForm");
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $firstName = $request->input('first-name');
        $lastName = $request->input('last-name');
        $address = $request->input('address');
        $dateOfBirth = $request->input('date-of-birth');
        $email = $request->input('email');
        $gender = $request->input('gender');
        $religion = $request->input('religion');
        $status = $request->input('status');
        $job = $request->input('job');
        $terms = $request->input('terms');

        return view('HasilForm', [
            'firstName' => $firstName,
            'lastName' => $lastName,
            'address' => $address,
            'dateOfBirth' => $dateOfBirth,
            'email' => $email,
            'gender' => $gender,
            'status' => $status,
            'job' => $job,
            'terms' => $terms
        ]);
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
}