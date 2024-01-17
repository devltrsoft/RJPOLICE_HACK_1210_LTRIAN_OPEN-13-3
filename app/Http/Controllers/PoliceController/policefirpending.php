<?php

namespace App\Http\Controllers\PoliceController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\UserDetail;
use App\Models\assignedcases;
use App\Models\complaints;
use App\Models\policedetail;

class policefirpending extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $complaint_fir_id = 2;
        $status_ids = [1, 2];        
        $police_id = '1';
        $complaints = assignedcases::where('police_id', $police_id)->get();
        
        foreach ($complaints as $complaintsus) {
            $complaintsusid = $complaintsus->complaint_id;
            $data = complaints::where('complaint_id', $complaintsusid)
                ->whereIn('status_id', $status_ids)
                ->whereIn('complaint_fir_id', [$complaint_fir_id])
                ->get();
            $complaintsus->data = $data;
          
        }

        return view("frontend.Policeblade.PendingFIR", compact( 'complaints'));
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
