@extends('frontend.layouts.main');
@section('main-container')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Data Tables</h1>
            <nav>
                <div class="searchview search-bar d-flex align-items-center">
                    <form class="search-form d-flex align-items-center" method="POST" action="#">
                        <input type="text" name="query" placeholder="Search" title="Enter search keyword">
                        <button type="submit" title="Search"><i class="bi bi-search"></i></button>
                    </form>
                </div>

            </nav>
        </div><!-- End Page Title -->

        <section class="section dashboard">
            <div class="row">

                {{-- {{$complaints}} --}}
                @foreach ($complaints as $complaintitem)
                @foreach ($complaintitem->data as $item)
                <div class="col-xxl-4 col-md-6">
                    <div class="card info-card sales-card"  data-bs-toggle="modal"
                    data-bs-target="#fullscreenShowModal{{ $item->complaint_id }}">                                <div class="filter">
                                    <a class="icon" href="#" data-bs-toggle="dropdown">
                                        <i class="bi bi-pencil"></i>
                                    </a>
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">{{ $item->cmp_id }}</h5>


                                    <div class="d-flex align-items-center">
                                        <div
                                            class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                            <i class="bi bi-journal-bookmark-fill"></i>
                                        </div>
                                        <div class="ps-3">
                                            <h6>{{ $item->complaint_suspect_fname }} {{ $item->complaint_suspect_lname }}
                                            </h6>

                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        {{-- 
                <div class="modal fade" id="editModel{{ $item->complaint_suspect_id }}"
                    tabindex="-1">
                    <div class="modal-dialog modal-dialog-scrollable">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Edit Complaint Suspect</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form
                                    action="{{ route('casesuspect.update', $item->complaint_suspect_id) }}"
                                    method="post" enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')

                                    <div class="form-group">
                                        <label for="fname" class="form-label">First
                                            Name</label>
                                        <input type="text" class="form-control"
                                            name="complaint_suspect_fname"
                                            value="{{ $item->complaint_suspect_fname }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="mname" class="form-label">Middle
                                            Name</label>
                                        <input type="text" class="form-control"
                                            name="complaint_suspect_mname"
                                            value="{{ $item->complaint_suspect_mname }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="lname" class="form-label">Last
                                            Name</label>
                                        <input type="text" class="form-control"
                                            id="lname" name="complaint_suspect_lname"
                                            value="{{ $item->complaint_suspect_lname }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="address" class="form-label">Address</label>
                                        <input type="text" class="form-control"
                                            id="address" name="complaint_suspect_address"
                                            value="{{ $item->complaint_suspect_address }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="dob" class="form-label">Date of
                                            Birth</label>
                                        <input type="date" class="form-control"
                                            id="dob" name="complaint_suspect_dob"
                                            value="{{ $item->complaint_suspect_dob }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="gender" class="form-label">Gender</label>
                                        <select class="form-select" id="gender"
                                            name="complaint_suspect_gender">
                                            <option value="male">Male</option>
                                            <option value="female">Female</option>
                                            <option value="other">Other</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="mobile" class="form-label">Mobile
                                            Number</label>
                                        <input type="tel" class="form-control"
                                            id="mobile" name="complaint_suspect_mobile_no"
                                            value="{{ $item->complaint_suspect_mobile_no }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="email" class="form-label">Email</label>
                                        <input type="email" class="form-control"
                                            id="email" name="complaint_suspect_email"
                                            value="{{ $item->complaint_suspect_email }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="photoPath" class="form-label">Photo
                                            Path</label>
                                        <input type="file" class="form-control"
                                            id="photoPath"
                                            name="complaint_suspect_photo_path">

                                        @if ($item->complaint_suspect_photo_path)
                                            <img src="{{ asset('police_api/inputfiles/' . $item->complaint_suspect_photo_path) }}"
                                                alt="Suspect Photo"
                                                style="max-width: 100px; margin-top: 10px;">
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <label for="email"
                                            class="form-label">complaint_suspect_adhar</label>
                                        <input type="text" class="form-control"
                                            id="email" name="complaint_suspect_adhar"
                                            value="{{ $item->complaint_suspect_adhar }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="email"
                                            class="form-label">complaint_suspect_pan</label>
                                        <input type="text" class="form-control"
                                            id="email" name="complaint_suspect_pan"
                                            value="{{ $item->complaint_suspect_pan }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="country"
                                            class="form-label">Country</label>
                                        <select class="form-select" id="country"
                                            name="country_id">
                                            @foreach ($countries as $countryItem)
                                                <option
                                                    value="{{ $countryItem->country_id }}">
                                                    {{ $countryItem->country_name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="state" class="form-label">State</label>
                                        <select class="form-select" id="state"
                                            name="state_id">
                                            @foreach ($states as $statesItem)
                                                <option value="{{ $statesItem->state_id }}">
                                                    {{ $statesItem->state_name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="district"
                                            class="form-label">District</label>
                                        <select class="form-select" id="district"
                                            name="district_id">
                                            @foreach ($districss as $districssItem)
                                                <option
                                                    value="{{ $districssItem->district_id }}">
                                                    {{ $districssItem->district_name }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="city" class="form-label">City</label>
                                        <select class="form-select" id="city"
                                            name="city_id">
                                            @foreach ($city as $cityItem)
                                                <option value="{{ $cityItem->city_id }}">
                                                    {{ $cityItem->city_name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary"
                                    data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary"
                                    name="save_total_complaints"><i class="bx bx-save"></i>
                                    Save changes</button>
                            </div>
                            </form>
                        </div>
                    </div>
                </div> --}}



                <div class="modal fade" id="fullscreenShowModal{{ $item->complaint_id }}" tabindex="-1">
                    <div class="modal-dialog modal-fullscreen" >
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Show Complaint</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <b>User Name : </b>{{ $item->user_fname }} {{ $item->user_mname }}
                                {{ $item->user_lname }}<br>
                                <b>Complaint Subject : </b>{{ $item->complaint_subject }}<br>
                                <b>Complaint Description : </b>{{ $item->complaint_against }}<br>
                                <b>Complaint Against : </b>{{ $item->complaint_against }}<br>
                                <b>Incident Date : </b>{{ $item->incident_date }}<br>
                                <b>Complaint Date(data and time) : </b>{{ $item->created_at }}<br>
                                <b>Complaint Status : {{ $item->status_name }}</b><br>
                                <b>Complaint Photos/ Videos/ Audios : </b><br>
                                <b>Complaint Suspect : {{ $item->complaint_suspect_fname }} {{ $item->complaint_suspect_mname }} {{ $item->complaint_suspect_lname }}</b><br>
                                <b>Complaint Witness : {{ $item->complaint_witness_fname }} {{ $item->complaint_witness_mname }} {{ $item->complaint_witness_lname }}</b><br>
                                <b>Complaint Photos/ Videos/ Audios : </b><br>


                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary"
                                    data-bs-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary"> <i
                                        class="bx bxs-download"></i> Download</button>
                            </div>
                        </div>
                    </div>
                </div>
                    @endforeach
                @endforeach



            </div>
        </section>


    </main>
@endsection
