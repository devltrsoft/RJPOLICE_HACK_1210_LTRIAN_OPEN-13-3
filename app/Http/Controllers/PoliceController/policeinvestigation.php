<?php

namespace App\Http\Controllers\PoliceController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\assignedcases;
use App\Models\investigations;
use App\Models\complaints;
use App\Models\policedetail;
use App;
use Session;
class policeinvestigation extends Controller
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
        
            // Assuming you want to attach complaints data to $complaintsus
            $complaintsss = complaints::where('complaint_id', $complaintsusid)->get();
            $complaintsus->complaints = $complaintsss;
        }
        

        return view("frontend.Policeblade.investigation-cases", compact('complaints'));

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
