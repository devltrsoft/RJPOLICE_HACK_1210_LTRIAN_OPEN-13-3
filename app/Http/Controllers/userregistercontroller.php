<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


use App\Models\fircomplate;
use App\Models\firpending;
use App\Models\complaints;
use App\Models\assignedcases;
use App\Models\newss;
use App\Models\news_photos;

use App;
use Session;

class userregistercontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $user_id = '1';
        $complaint_fir_idcomplate = 2;
        $complaintscomplate = fircomplate::where('complaint_fir_id', $complaint_fir_idcomplate)
            ->whereIn('user_id', [$user_id])
            ->count();
        // print_r($complaintscomplate);


        $complaint_fir_idpending = 1;
        $complaintspending = firpending::where('complaint_fir_id', $complaint_fir_idpending)
            ->whereIn('user_id', [$user_id]) // Wrap $user_id in an array
            ->count();

        $totalcomplaint = complaints::where('user_id', $user_id)->count();
        $complaintIds = complaints::where('user_id', $user_id)->pluck('complaint_id')->toArray();
        $totalAssignedCases = assignedcases::whereIn('complaint_id', $complaintIds)->distinct()->count('complaint_id');
        
        // echo 'Total Assigned Complaints: ' . $totalAssignedCases;
        
        

        $complaints = complaints::where('user_id', $user_id)->get();

        $not_present_ids = [];
        $notAssignedCases = 0;

        foreach ($complaints as $complaint) {
            $complaint_id = $complaint->complaint_id;
            $assigned_cases = assignedcases::where('complaint_id', $complaint_id)->get();
            $complaint->data = $assigned_cases;

            $assigned_case_ids = $assigned_cases->pluck('complaint_id')->toArray();

            // Find the not present ids
            $not_present_ids = array_merge($not_present_ids, array_diff([$complaint_id], $assigned_case_ids));

            foreach ($assigned_cases as $assigned_case) {
                $assigned_case_id = $assigned_case->complaint_id;
            }
        }
        foreach ($not_present_ids as $complaint_id) {
            $complainttype = complaints::where('complaint_id', $complaint_id)->count(); 
                    $notAssignedCases += $complainttype;

        }
        // // print_r($notAssignedCases);

        $data = newss::all();
        foreach ($data as $complaint) {
            $newsid  = $complaint->news_id ;
            $newsName = news_photos::where('news_id', $newsid)->pluck('news_photo_path')->toArray();
            $complaint->news_photo_path = $newsName;

        }


        return view("frontend.Userblade.index", compact( 'complaintscomplate','complaintspending','totalcomplaint','totalAssignedCases','notAssignedCases','data'));
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

        session()->put('user', 'user');
        session()->forget('police');
        session()->forget('stationincharge');

        return redirect('/index');
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
