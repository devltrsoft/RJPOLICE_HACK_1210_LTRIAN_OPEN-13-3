<?php

namespace App\Http\Controllers\UserController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\assignedcases;
use App\Models\complaints;
use App;
use Session;
class usernotassigncomplaint extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

       

        $user_id = '1';
        $complaints = complaints::where('user_id', $user_id)->get();

        $not_present_ids = [];

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

        // Transform the array into a comma-separated string for display
        // $not_present_ids_str = implode(', ', $not_present_ids);
        $complaintDetails = [];

        foreach ($not_present_ids as $complaint_id) {
            $complainttype = complaints::find($complaint_id); 
            $complaintDetails[] = [
                'cmp_id' => $complainttype ? $complainttype->cmp_id : 'Unknown',
                'complaint_subject' => $complainttype ? $complainttype->complaint_subject : 'Unknown',
            ];
        }
        
        return view("frontend.Userblade.NotAssignComplaint", compact('complaintDetails'));
        

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
