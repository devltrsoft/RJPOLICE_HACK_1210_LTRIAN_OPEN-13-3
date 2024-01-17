<?php

namespace App\Http\Controllers\PoliceController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\UserDetail;
use App\Models\city;
use App\Models\countries;
use App\Models\districss;
use App\Models\states;

class policeadduser extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $states = states::all();
        $districss = districss::all();
        $countries = countries::all();
        $city = city::all();

        return view("frontend.Policeblade.AddUser", compact('states', 'districss', 'countries', 'city'));

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
        $record = new UserDetail();


        $record->user_fname = $request['user_fname'] ?? null;
        $record->user_mname = $request['user_mname'] ?? null;
        $record->user_lname = $request['user_lname'] ?? null;
        $record->user_address = $request['user_address'] ?? null;
        $record->user_photo = $request['user_photo'] ?? null;
        $record->country_id = $request['country_id'] ?? null;
        $record->state_id = $request['state_id'] ?? null;
        $record->district_id = $request['district_id'] ?? null;
        $record->city_id = $request['city_id'] ?? null;
        $record->user_email = $request['user_email'] ;
        $record->user_password = $request['user_password'] ?? null;
        $record->user_gender = $request['user_gender'] ?? null;
        $record->user_dob = $request['user_dob'] ?? null;
        $record->user_mobile1 = $request['user_mobile1'] ?? null;
        $record->user_mobile2 = $request['user_mobile2'] ?? null;
        $record->user_adhar = $request['user_adhar'] ?? null;
        $record->user_pan = $request['user_pan'] ?? null;
        $record->user_fcn_token = '0';
        $record->save();
        return redirect()->back()->with('success', 'Qualification updated successfully.');

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
