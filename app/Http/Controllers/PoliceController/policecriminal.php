<?php

namespace App\Http\Controllers\PoliceController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\complaints;
use App\Models\investigations;
use App\Models\criminaldetals;
use App\Models\criminalcases;

class policecriminal extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $stationid = '1';
        $complaints = complaints::where('station_id', $stationid)->get();

        foreach ($complaints as $complaintsus) {
            $complaintsusid = $complaintsus->complaint_id;
            $data = investigations::where('complaint_id', $complaintsusid)->get();
            $complaintsus->data = $data;

            foreach ($data as $complaint) {
                $fir_id = $complaint->fir_id;
                $criminal = criminalcases::where('fir_id', $fir_id)->get();
                $complaint->criminal = $criminal;
               
                foreach ($criminal as $criminals) {
                    $criminalid  = $criminals->criminal_id ;
                    $criminaldetail = criminaldetals::where('criminal_id', $criminalid)->get();
                    $criminals->criminaldetail = $criminaldetail;
                }   
            }
        }

        return view("frontend.Policeblade.Criminal", compact( 'complaints'));

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
