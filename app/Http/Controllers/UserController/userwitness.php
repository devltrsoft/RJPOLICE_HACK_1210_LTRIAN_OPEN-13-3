<?php

namespace App\Http\Controllers\UserController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\city;
use App\Models\countries;
use App\Models\districss;
use App\Models\states;
use App\Models\complaints;
use App\Models\casewitness;
use App;
use Session;

class userwitness extends Controller
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
            $data = casewitness::where('complaint_id', $complaintsusid)->get();
            $complaintsus->data = $data;
            // echo'<pre>';
            // print_r($complaintsus->data);

            foreach ($data as $complaint) {
                $cityid = $complaint->city_id;
                $citys = city::find($cityid);
                $cityName = $citys ? $citys->city_name : 'Unknown'; // Check if the user exists
                $complaint->city_name = $cityName;

                $countryid = $complaint->country_id;
                $country = countries::find($countryid);
                $countryName = $country ? $country->country_name : 'Unknown'; // Check if the user exists
                $complaint->country_name = $countryName;

                $districsid = $complaint->district_id;
                $districs = districss::find($districsid);
                $districsName = $districs ? $districs->district_name : 'Unknown'; // Check if the user exists
                $complaint->district_name = $districsName;

                $stateid = $complaint->state_id;
                $state = states::find($stateid);
                $stateName = $state ? $state->state_name : 'Unknown'; // Check if the user exists
                $complaint->state_name = $stateName;

                $complaintsid = $complaint->complaint_id;
                $complaintss = complaints::find($complaintsid);
                $complaintsName = $complaintss ? $complaintss->cmp_id : 'Unknown'; // Check if the user exists
                $complaint->cmp_id = $complaintsName;

                // print_r($complaintsName);
            }
        }
        $states = states::all();
        $districss = districss::all();
        $countries = countries::all();
        $city = city::all();

        return view("frontend.Userblade.Case-witness", compact('city', 'countries', 'districss', 'states', 'complaints'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $locale = Session::get('locale');
        App::setLocale($locale);
        return redirect()->back()->with('success', 'Feedback submitted successfully.');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
