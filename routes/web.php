<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\logincontroller;
use App\Http\Controllers\userregistercontroller;
use App\Http\Controllers\policerregistercontroller;
use App\Http\Controllers\stationinchargeregistercontroller;


// user controller
use App\Http\Controllers\UserController\userfircomplate;
use App\Http\Controllers\UserController\userfirpending;
use App\Http\Controllers\UserController\useraddcomplaint;
use App\Http\Controllers\UserController\userassigncomplaint;
use App\Http\Controllers\UserController\usernotassigncomplaint;
use App\Http\Controllers\UserController\usercomplaint;
use App\Http\Controllers\UserController\usersuspect;
use App\Http\Controllers\UserController\uservictim;
use App\Http\Controllers\UserController\userwitness;
use App\Http\Controllers\UserController\userevidance;
use App\Http\Controllers\UserController\usernotification;
use App\Http\Controllers\UserController\usernews;
use App\Http\Controllers\UserController\userfeedback;
use App\Http\Controllers\UserController\userchatbot;
use App\Http\Controllers\GoogleTranslateController;



// police controller
use App\Http\Controllers\PoliceController\policeassigncomplaint;
use App\Http\Controllers\PoliceController\policecomplaint;
use App\Http\Controllers\PoliceController\policecomplaintevidance;
use App\Http\Controllers\PoliceController\policecomplaintsuspect;
use App\Http\Controllers\PoliceController\policecomplaintvictim;
use App\Http\Controllers\PoliceController\policecomplaintvitness;
use App\Http\Controllers\PoliceController\policecriminal;
use App\Http\Controllers\PoliceController\policefeedback;
use App\Http\Controllers\PoliceController\policefircomplate;
use App\Http\Controllers\PoliceController\policefirpending;
use App\Http\Controllers\PoliceController\policeinvestigation;
use App\Http\Controllers\PoliceController\policeinvestigationevidance;
use App\Http\Controllers\PoliceController\policeinvestigationsuspect;
use App\Http\Controllers\PoliceController\policeinvestigationvictim;
use App\Http\Controllers\PoliceController\policeinvestigationwitness;
use App\Http\Controllers\PoliceController\policenews;
use App\Http\Controllers\PoliceController\policenotification;
use App\Http\Controllers\PoliceController\policetodolist;
use App\Http\Controllers\PoliceController\policeaddcomplaint;
use App\Http\Controllers\PoliceController\policeadduser;
use App\Http\Controllers\PoliceController\policewarrant;
// use App\Http\Controllers\PoliceController\policeassigncomplaint;
// use App\Http\Controllers\PoliceController\policeassigncomplaint;
// use App\Http\Controllers\PoliceController\policeassigncomplaint;
// use App\Http\Controllers\PoliceController\policeassigncomplaint;


// StattionIncharge Controller  

use App\Http\Controllers\StationInchageCntroller\stationassigncomplaint;
use App\Http\Controllers\StationInchageCntroller\stationcomplaint;
use App\Http\Controllers\StationInchageCntroller\stationcomplaintcomplate;
use App\Http\Controllers\StationInchageCntroller\stationcomplaintevidance;
use App\Http\Controllers\StationInchageCntroller\stationcomplaintpending;
use App\Http\Controllers\StationInchageCntroller\stationcomplaintsuspect;
use App\Http\Controllers\StationInchageCntroller\stationcomplaintvictim;
use App\Http\Controllers\StationInchageCntroller\stationfeedback;
use App\Http\Controllers\StationInchageCntroller\stationfircomplate;
use App\Http\Controllers\StationInchageCntroller\stationfirpending;
use App\Http\Controllers\StationInchageCntroller\stationinnewsphoto;
use App\Http\Controllers\StationInchageCntroller\stationinvecriminal;
use App\Http\Controllers\StationInchageCntroller\stationinvecriminalcomplaint;
use App\Http\Controllers\StationInchageCntroller\stationinvestigation;
use App\Http\Controllers\StationInchageCntroller\stationinvestigationevidance;
use App\Http\Controllers\StationInchageCntroller\stationinvestigationsuspect;
use App\Http\Controllers\StationInchageCntroller\stationinvestigationvictim;
use App\Http\Controllers\StationInchageCntroller\stationinvestigationvwitness;
use App\Http\Controllers\StationInchageCntroller\stationinvnews;
use App\Http\Controllers\StationInchageCntroller\stationnotassigncomplaint;
use App\Http\Controllers\StationInchageCntroller\stationnotigication;
use App\Http\Controllers\StationInchageCntroller\stationnotigicationphoto;
use App\Http\Controllers\StationInchageCntroller\stationpolice;
use App\Http\Controllers\StationInchageCntroller\stationtodolist;
// use App\Http\Controllers\StationInchageCntroller\stationcomplaintcomplate;




/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/', function () {
    return view('frontend.Home');
});
Route::get('/under_construction', function () {
    return view('frontend.under_construction');
});




Route::resource('/login', logincontroller::class);

// language route
Route::get('google/translate',[GoogleTranslateController::class,'googleTranslate'])->name('google.translate');
Route::get('google/translate/change',[GoogleTranslateController::class,'googleTranslateChange'])->name('google.translate.change');



Route::match(['get','post'],'/botman',[userchatbot::class,'index']);

Route::get('/TotalCompalint/pdf',[usercomplaint::class,'createpdf'])->name('export.pdf');

// user route start

// Route::get('/index', function () {
//     return view('frontend.Userblade.index');
// });
Route::resource('/index', userregistercontroller::class);
Route::resource('/addcomplaint', useraddcomplaint::class);
Route::resource('/CompletedFIR', userfircomplate::class);
Route::resource('/PendingFIR', userfirpending::class);
Route::resource('/AssignComplaint', userassigncomplaint::class);
Route::resource('/NotAssign', usernotassigncomplaint::class);
Route::resource('/TotalCompalint', usercomplaint::class);
Route::resource('/casesuspect', usersuspect::class);
Route::resource('/casesvictim', uservictim::class);
Route::resource('/casewitness', userwitness::class);
Route::resource('/casesevidance', userevidance::class);
Route::resource('/notification', usernotification::class);
Route::resource('/news', usernews::class);
Route::resource('/feedback', userfeedback::class);



// police route

// Route::get('/policeindex', function () {
//     return view('frontend.Policeblade.index');
// });

Route::resource('/policeindex', policerregistercontroller::class);
Route::resource('/policeassigncomplaint', policeassigncomplaint::class);
Route::resource('/policecomplaint', policecomplaint::class);
Route::resource('/policecomplaintevidance', policecomplaintevidance::class);
Route::resource('/policecomplaintsuspect', policecomplaintsuspect::class);
Route::resource('/policecomplaintvictim', policecomplaintvictim::class);
Route::resource('/policecomplaintvitness', policecomplaintvitness::class);
Route::resource('/policecriminal', policecriminal::class);
Route::resource('/policefeedback', policefeedback::class);
Route::resource('/policefircomplate', policefircomplate::class);
Route::resource('/policefirpending', policefirpending::class);
Route::resource('/policeinvestigation', policeinvestigation::class);
Route::resource('/policeinvestigationevidance', policeinvestigationevidance::class);
Route::resource('/policeinvestigationsuspect', policeinvestigationsuspect::class);
Route::resource('/policeinvestigationvictim', policeinvestigationvictim::class);
Route::resource('/policeinvestigationwitness', policeinvestigationwitness::class);
Route::resource('/policenews', policenews::class);
Route::resource('/policenotification', policenotification::class);
Route::resource('/policetodolist', policetodolist::class);
Route::resource('/policeaddcomplaint', policeaddcomplaint::class);
Route::resource('/policeadduser', policeadduser::class);
Route::resource('/policewarrent', policewarrant::class);

// Station Inchahrge
Route::resource('/stationinchargerindex', stationinchargeregistercontroller::class);









// Route::get('/register', function () {
//     return view('frontend.Registration');
// });

// Route::resource('/login', logincontroler::class);

// Route::resource('/register', loginregister::class);


// Route::get('/index', function () {
//     return view('frontend.index');
// });//->middleware([\App\Http\Middleware\RedirectToDashboard::class]);

// Route::resource('/AssignComplaint', AssignedcasesController::class);//->middleware([\App\Http\Middleware\RedirectToDashboard::class]);

// Route::resource('/CompletedComplaint', ComplaintcomplateController::class);//->middleware([\App\Http\Middleware\RedirectToDashboard::class]);

// Route::resource('/CompletedFIR', FircomplateController::class);//->middleware([\App\Http\Middleware\RedirectToDashboard::class]);

// Route::resource('/Feedback', FeedbacksController::class);//->middleware([\App\Http\Middleware\RedirectToDashboard::class]);


// Route::get('/Massage', function () {
//     return view('frontend.Massage');
// });


// Route::resource('/News', NewssController::class);//->middleware([\App\Http\Middleware\RedirectToDashboard::class]);

// Route::resource('/Newsphoto', NewsphotoController::class);//->middleware([\App\Http\Middleware\RedirectToDashboard::class]);

// Route::get('/NotAssign', function () {
//     return view('frontend.NotAssignComplaint');
// });

// Route::resource('/PendingComplaint', ComplaintpendingController::class);//->middleware([\App\Http\Middleware\RedirectToDashboard::class]);

// Route::resource('/PendingFIR', FirpendingController::class);//->middleware([\App\Http\Middleware\RedirectToDashboard::class]);

// Route::resource('/TotalCompalint', ComplaintsController::class);//->middleware([\App\Http\Middleware\RedirectToDashboard::class]);

// Route::resource('/TotalPolice', PolicedetailController::class);//->middleware([\App\Http\Middleware\RedirectToDashboard::class]);

// Route::resource('/userprofile', policeprofile::class);//->middleware([\App\Http\Middleware\RedirectToDashboard::class]);

// Route::resource('/criminal', CriminaldetalsController::class);//->middleware([\App\Http\Middleware\RedirectToDashboard::class]);

// Route::resource('/criminalcases', CriminalcasesController::class);//->middleware([\App\Http\Middleware\RedirectToDashboard::class]);

// Route::resource('/casesuspect', CasesuspectController::class);//->middleware([\App\Http\Middleware\RedirectToDashboard::class]);

// Route::resource('/casewitness', CasewitnessController::class);//->middleware([\App\Http\Middleware\RedirectToDashboard::class]);

// Route::resource('/investisuspect', InvestigationsuspectController::class);//->middleware([\App\Http\Middleware\RedirectToDashboard::class]);

// Route::resource('/investigation', InvestigationsController::class);//->middleware([\App\Http\Middleware\RedirectToDashboard::class]);

// Route::resource('/investiwitness', InvestigationwitnessController::class);//->middleware([\App\Http\Middleware\RedirectToDashboard::class]);

// Route::resource('/notification', notification::class);//->middleware([\App\Http\Middleware\RedirectToDashboard::class]);

// Route::resource('/notification_photo', notification_photo::class);//->middleware([\App\Http\Middleware\RedirectToDashboard::class]);

// Route::resource('/investigationvictim', investigationvictim::class);//->middleware([\App\Http\Middleware\RedirectToDashboard::class]);

// Route::resource('/investigationevidance', investigationevidance::class);//->middleware([\App\Http\Middleware\RedirectToDashboard::class]);
// Route::resource('/casesvictim', casesvictim::class); //->middleware([\App\Http\Middleware\RedirectToDashboard::class]);

// Route::resource('/casesevidance', casesevidance::class); //->middleware([\App\Http\Middleware\RedirectToDashboard::class]);