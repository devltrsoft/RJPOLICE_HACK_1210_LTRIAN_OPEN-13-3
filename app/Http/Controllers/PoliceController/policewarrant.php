<?php

namespace App\Http\Controllers\PoliceController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\assignedcases;
use App\Models\investigations;
use App\Models\warrant;
use App\Models\warrent_type;
use App;
use Session;

class policewarrant extends Controller
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
                $criminal = warrant::where('fir_id', $fir_id)->get();
                $complaint->criminal = $criminal;

                foreach ($criminal as $criminals) {
                    $criminalid = $criminals->warrant_type_id;
                    $criminaldetail = warrent_type::find($criminalid);
                    $newsName = $criminaldetail ? $criminaldetail->warrant_type_name : 'Unknown'; // Check if the user exists
                    $complaint->warrant_type_name = $newsName;

                    // echo '<pre>';
                    // print_r($newsName);
                }

            }
        }
        return view("frontend.Policeblade.Warrent", compact( 'complaints'));

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
