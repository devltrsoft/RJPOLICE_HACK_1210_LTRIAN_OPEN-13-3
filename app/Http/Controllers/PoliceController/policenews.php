<?php

namespace App\Http\Controllers\PoliceController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\newss;
use App\Models\news_photos;
use App;
use Session;

class policenews extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = news_photos::all();
        foreach ($data as $complaint) {
            $newsid  = $complaint->news_id    ;
            $news = newss::find($newsid );
            $newsName = $news ? $news->news_title : 'Unknown'; // Check if the user exists
            $complaint->news_title = $newsName;

            $newsDis = $news ? $news->news_description : 'Unknown'; // Check if the user exists
            $complaint->news_description = $newsDis;
        }

        return view("frontend.Policeblade.News", compact('data'));

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
