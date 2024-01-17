<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\assignedcases;
use App\Models\todolist;
use App\Models\investigations;
use App\Models\newss;
use App\Models\news_photos;

class policerregistercontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $police_id = '1';
        $allocatecase = assignedcases::where('police_id', $police_id)->count();

        $todolist = todolist::where('police_id', $police_id)->get();

        $complaints = assignedcases::where('police_id', $police_id)->get();
        $InvistigationCases = 0;

        foreach ($complaints as $complaintsus) {
            $complaintsusid = $complaintsus->complaint_id;
            $data = investigations::where('complaint_id', $complaintsusid)->count();
            $InvistigationCases += $data;

          
        }


        $data = newss::all();
        foreach ($data as $complaint) {
            $newsid  = $complaint->news_id ;
            $newsName = news_photos::where('news_id', $newsid)->pluck('news_photo_path')->toArray();
            $complaint->news_photo_path = $newsName;

        }

        // print_r($InvistigationCases);
        return view("frontend.Policeblade.index",compact("allocatecase",'InvistigationCases','todolist','data'));
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
        session()->put('police', 'police');
        session()->forget('user');
        session()->forget('stationincharge');

        return redirect('/policeindex');
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
