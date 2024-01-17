<?php

namespace App\Http\Controllers\PoliceController;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\assignedcases;
use App\Models\UserDetail;
use App\Models\complaints;
use App\Models\policedetail;
use App;
use Session;


class policeassigncomplaint extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $police_id = '1';
        $complaints = assignedcases::where('police_id', $police_id)->get();

        foreach ($complaints as $complaintsus) {
            $complaintsusid = $complaintsus->complaint_id;
            $data = complaints::where('complaint_id', $complaintsusid)->get();
            $complaintsus->data = $data;


            foreach ($data as $complaint) {
                $policeid = $complaint->user_id;
                $police = UserDetail::find($policeid); 
                // echo '<pre>';
                // print_r($police);
                $policeid = $complaint->user_id;
                $police = policedetail::find($policeid); 
            }
        }


        $policedetail = policedetail::where('police_id', $police_id)->get();
        return view('frontend.Policeblade.AssignComplaint', compact('policedetail', 'complaints'));



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
        $locale = Session::get('locale');
        App::setLocale($locale);
        return view("frontend.Policeblade.AssignComplaint");
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
