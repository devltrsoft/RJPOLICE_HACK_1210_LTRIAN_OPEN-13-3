<?php

namespace App\Http\Controllers\UserController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\feedbacks;
use App;
use Session;
class userfeedback extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("frontend.Userblade.Feedback");

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
        
        $overallSatisfactionRating = $request->input('overall_satisfaction_rating');
        $trustAndConfidanceRating = $request->input('trust_and_confidance_rating');
        $qualityOfServiceRating = $request->input('quality_of_service_rating');
        $fairnessOfInvestigationRating = $request->input('fairness_of_investigation_rating');
        $askedForBriefRating = $request->input('asked_for_brief_rating');
        $timeTakenToResolveComplaintRating = $request->input('time_taken_to_resoive_complaint_rating');
    

        $record = new feedbacks;
        $record->overall_satisfaction = $overallSatisfactionRating ? $overallSatisfactionRating : 0;
        $record->trust_and_confidance = $trustAndConfidanceRating ? $trustAndConfidanceRating : 0;
        $record->quality_of_service = $qualityOfServiceRating ? $qualityOfServiceRating : 0;
        $record->fairness_of_investigation = $fairnessOfInvestigationRating ? $fairnessOfInvestigationRating : 0;
        $record->asked_for_brief = $askedForBriefRating ? $askedForBriefRating : 0;
        $record->time_taken_to_resoive_complaint = $timeTakenToResolveComplaintRating ? $timeTakenToResolveComplaintRating : 0;
        
        $record->avg_rating = (
            $overallSatisfactionRating + $trustAndConfidanceRating + $qualityOfServiceRating +
            $fairnessOfInvestigationRating + $askedForBriefRating + $timeTakenToResolveComplaintRating
        )/6;
        
        // Set other attributes and save the record
        $record->user_id = '1';
        $record->save();
        
        // Redirect or return a response
        return redirect()->back()->with('success', 'Feedback submitted successfully.');
        

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        
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
        $user_id = '1';

        // Retrieve existing feedback for the user
        $record = feedbacks::where('user_id', $user_id)->first();
    
        $overallSatisfactionRating = $request->input('overall_satisfaction_rating');
        $trustAndConfidanceRating = $request->input('trust_and_confidance_rating');
        $qualityOfServiceRating = $request->input('quality_of_service_rating');
        $fairnessOfInvestigationRating = $request->input('fairness_of_investigation_rating');
        $askedForBriefRating = $request->input('asked_for_brief_rating');
        $timeTakenToResolveComplaintRating = $request->input('time_taken_to_resoive_complaint_rating');
    

        $record->overall_satisfaction = $overallSatisfactionRating ? $overallSatisfactionRating : 0;
        $record->trust_and_confidance = $trustAndConfidanceRating ? $trustAndConfidanceRating : 0;
        $record->quality_of_service = $qualityOfServiceRating ? $qualityOfServiceRating : 0;
        $record->fairness_of_investigation = $fairnessOfInvestigationRating ? $fairnessOfInvestigationRating : 0;
        $record->asked_for_brief = $askedForBriefRating ? $askedForBriefRating : 0;
        $record->time_taken_to_resoive_complaint = $timeTakenToResolveComplaintRating ? $timeTakenToResolveComplaintRating : 0;
        
        $record->avg_rating = (
            $overallSatisfactionRating + $trustAndConfidanceRating + $qualityOfServiceRating +
            $fairnessOfInvestigationRating + $askedForBriefRating + $timeTakenToResolveComplaintRating
        )/6;
        
        // Set other attributes and save the record
        $record->save();
        
        // Redirect or return a response
        return redirect()->back()->with('success', 'Feedback submitted successfully.');
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
