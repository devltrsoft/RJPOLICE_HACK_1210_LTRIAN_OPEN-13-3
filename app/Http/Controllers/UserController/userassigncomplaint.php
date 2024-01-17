<?php

namespace App\Http\Controllers\UserController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\assignedcases;
use App\Models\policedetail;
use App\Models\complaints;
use App;
use Session;
class userassigncomplaint extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user_id = '1';
        $complaints = complaints::where('user_id', $user_id)->get();

        foreach ($complaints as $complaintsus) {
            $complaintsusid = $complaintsus->complaint_id;
            $data = assignedcases::where('complaint_id', $complaintsusid)->get();
            $complaintsus->data = $data;
            


            foreach ($data as $complaint) {
                $policeid = $complaint->police_id;
                $police = policedetail::find($policeid);
                $policeName = $police ? $police->police_fname : 'Unknown'; // Check if the user exists
                $complaint->police_fname = $policeName;

                $policeName = $police ? $police->police_mname : 'Unknown'; // Check if the user exists
                $complaint->police_mname = $policeName;

                $policeName = $police ? $police->police_lname : 'Unknown'; // Check if the user exists
                $complaint->police_lname = $policeName;

                $complaintstypeid = $complaint->complaint_id;
                $complainttype = complaints::find($complaintstypeid);
                $complainttypeName = $complainttype ? $complainttype->cmp_id : 'Unknown'; // Check if the user exists
                $complaint->cmp_id = $complainttypeName;

                // print_r($complaints);
            }
        }

        $policedetail = policedetail::all();
        return view('frontend.Userblade.AssignComplaint', compact('policedetail', 'complaints'));


    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $locale = Session::get('locale');
        App::setLocale($locale);
        return view("frontend.Userblade.AssignComplaint");

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
