<?php

namespace App\Http\Controllers\PoliceController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App;
use Session;
use App\Models\police_feedback;

class policefeedback extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("frontend.Policeblade.Feedback");

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
    

        $record = new police_feedback;
        $record->overall_satisfaction = $overallSatisfactionRating ? $overallSatisfactionRating : 0;
        $record->usability_navigation = $trustAndConfidanceRating ? $trustAndConfidanceRating : 0;
        $record->training_support = $qualityOfServiceRating ? $qualityOfServiceRating : 0;
        $record->alert_notification = $fairnessOfInvestigationRating ? $fairnessOfInvestigationRating : 0;
        $record->security_privacy = $askedForBriefRating ? $askedForBriefRating : 0;
        $record->relevance_info = $timeTakenToResolveComplaintRating ? $timeTakenToResolveComplaintRating : 0;
        
        $record->average_prating = (
            $overallSatisfactionRating + $trustAndConfidanceRating + $qualityOfServiceRating +
            $fairnessOfInvestigationRating + $askedForBriefRating + $timeTakenToResolveComplaintRating
        )/6;
        
        $record->police_id = '1';
        $record->save();
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
