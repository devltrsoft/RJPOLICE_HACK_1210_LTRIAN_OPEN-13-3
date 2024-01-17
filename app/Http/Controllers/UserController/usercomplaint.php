<?php

namespace App\Http\Controllers\UserController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\complaints;
use App\Models\complaintstypes;
use App\Models\UserDetail;
use App\Models\complaintfir;
use App\Models\statuss;
use App;
use Session;
use Barryvdh\DomPDF\Facade\Pdf;


class usercomplaint extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user_id = '1';

        $data = complaints::where('user_id', $user_id)->get();
        foreach ($data as $complaint) {
            $complaintstypeid = $complaint->complaint_type_id;
            $complainttype = complaintstypes::find($complaintstypeid);
            $complainttypeName = $complainttype ? $complainttype->complaint_type_name : 'Unknown'; // Check if the user exists
            $complaint->complaint_type_name = $complainttypeName;

            $userId = $complaint->user_id;
            $user = UserDetail::find($userId);
            $userName = $user ? $user->user_fname : 'Unknown'; // Check if the user exists
            $complaint->user_fname = $userName;

            $usermName = $user ? $user->user_mname : 'Unknown'; // Check if the user exists
            $complaint->user_mname = $usermName;

            $userlName = $user ? $user->user_lname : 'Unknown'; // Check if the user exists
            $complaint->user_lname = $userlName;

            $useraddress = $user ? $user->user_address : 'Unknown'; // Check if the user exists
            $complaint->user_address = $useraddress;

            $complaintsfirid = $complaint->complaint_fir_id;
            $complaintfir = complaintfir::find($complaintsfirid);
            $complaintfirName = $complaintfir ? $complaintfir->complaint_fir_name : 'Unknown'; // Check if the user exists
            $complaint->complaint_fir_name = $complaintfirName;

            $statusid = $complaint->status_id;
            $status = statuss::find($statusid);
            $statusName = $status ? $status->status_name : 'Unknown'; // Check if the user exists
            $complaint->status_name = $statusName;
        }
        $complaintstypes = complaintstypes::all();
        $complaintfir = complaintfir::all();
        $statuss = statuss::all();


        return view("frontend.Userblade.TotalComplaint", compact('data', 'complaintstypes', 'complaintfir', 'statuss'));

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
        return view("frontend.Userblade.TotalComplaint");

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

    public function createpdf()
    {

        $user_id = '1';

        $data = complaints::where('user_id', $user_id)->get();
        foreach ($data as $complaint) {
            $complaintstypeid = $complaint->complaint_type_id;
            $complainttype = complaintstypes::find($complaintstypeid);
            $complainttypeName = $complainttype ? $complainttype->complaint_type_name : 'Unknown'; // Check if the user exists
            $complaint->complaint_type_name = $complainttypeName;

            $userId = $complaint->user_id;
            $user = UserDetail::find($userId);
            $userName = $user ? $user->user_fname : 'Unknown'; // Check if the user exists
            $complaint->user_fname = $userName;

            $usermName = $user ? $user->user_mname : 'Unknown'; // Check if the user exists
            $complaint->user_mname = $usermName;

            $userlName = $user ? $user->user_lname : 'Unknown'; // Check if the user exists
            $complaint->user_lname = $userlName;

            $useraddress = $user ? $user->user_address : 'Unknown'; // Check if the user exists
            $complaint->user_address = $useraddress;

            $complaintsfirid = $complaint->complaint_fir_id;
            $complaintfir = complaintfir::find($complaintsfirid);
            $complaintfirName = $complaintfir ? $complaintfir->complaint_fir_name : 'Unknown'; // Check if the user exists
            $complaint->complaint_fir_name = $complaintfirName;

            $statusid = $complaint->status_id;
            $status = statuss::find($statusid);
            $statusName = $status ? $status->status_name : 'Unknown'; // Check if the user exists
            $complaint->status_name = $statusName;
        }
        view()->share('data', $data);

        $pdf = PDF::loadView('frontend.userpdf_view')
            ->setPaper('a4', 'landscape')
            ->setOption(['dpi' => 150, 'defaultFont' => 'sans-serif'])
            ->setWarnings(false);
        return $pdf->stream();
    }
}
