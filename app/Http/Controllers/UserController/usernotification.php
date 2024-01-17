<?php

namespace App\Http\Controllers\UserController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\notification_photos;
use App\Models\notifications;
use App;
use Session;
class usernotification extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $data = notification_photos::all();


        foreach ($data as $complaint) {
            $notificationid   = $complaint->notification_id     ;
            $notification  = notifications::find($notificationid  );
            $notificationName = $notification  ? $notification ->notification_title : 'Unknown'; // Check if the user exists
            $complaint->notification_title = $notificationName;
        }

        $notifications = notifications::all();
        return view('frontend..Userblade.Notification',compact('data','notifications'));
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
        return redirect()->back()->with('success', 'Feedback submitted successfully.');
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
