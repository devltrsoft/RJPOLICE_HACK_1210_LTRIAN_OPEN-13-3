<?php

namespace App\Http\Controllers\PoliceController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\assignedcases;
use App\Models\investigations;
use App\Models\investigationsuspect;
use App\Models\city;
use App\Models\countries;
use App\Models\districss;
use App\Models\states;
use App\Models\policedetail;
class policeinvestigationsuspect extends Controller
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
            $data = investigations::where('complaint_id', $complaintsusid)->get();
            $complaintsus->data = $data;

            foreach ($data as $complaint) {
                $fir_id = $complaint->fir_id;
                $suspect = investigationsuspect::where('fir_id', $fir_id)->get();
                $complaint->suspect = $suspect;
                  
            }
        }

        $states = states::all();
        $districss = districss::all();
        $countries = countries::all();
        $city = city::all();

        return view("frontend.Policeblade.Investi-Suspect",compact('complaints','city', 'countries', 'districss', 'states',));

        
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
