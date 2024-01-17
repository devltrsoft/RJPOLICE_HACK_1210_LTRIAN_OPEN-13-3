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
        </div>

        <div class="container">
            <section class="section dashboard">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    {{-- <h5 class="card-title text-center pb-0 fs-4">Add Complaint</h5> --}}

                    <div class="dropdown">
                        <button class="btn btn-primary" type="button" id="customActionDropdown" data-bs-toggle="modal"
                            data-bs-target="#addmodel">
                            <i class="bi bi-plus-lg"></i>
                        </button>
                        {{-- <div class="dropdown-menu" aria-labelledby="customActionDropdown">

                            <a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#addsuspect">Add
                                Suspect</a>
                            <a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#addvictim">Add
                                Victim</a>
                            <a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#addwitness">Add
                                Witness</a>
                            <a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#addevidance">Add Evidance</a>
                        </div> --}}
                    </div>


                </div>

                <div class="row">
                    @foreach ($complaints as $complaintitem)
                        @foreach ($complaintitem->data as $item)
                            @foreach ($item->suspect as $suspect)
                                <div class="col-xxl-4 col-md-6">
                                    <div class="card info-card sales-card" data-bs-toggle="modal"
                                        data-bs-target="#fullscreenShowModal{{ $item->investigation_suspect_id }}">
                                        <div class="card-body">
                                            <h5 class="card-title">{{ $item->fir_id }}</h5>

                                            <div class="d-flex align-items-center">
                                                <div
                                                    class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                                    <i class="bi bi-journal-bookmark-fill"></i>
                                                </div>
                                                <div class="ps-3">
                                                    <h6>{{ GoogleTranslate::trans($suspect->suspect_fname, \App::getLocale()) }}
                                                    </h6>

                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>



                                <div class="modal fade" id="fullscreenShowModal{{ $item->investigation_suspect_id }}"
                                    tabindex="-1">
                                    <div class="modal-dialog modal-fullscreen">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Show Complaint</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                {{--             <b>policename  : </b>{{ $police->police_fname }} {{ $police->police_lname }}<br>

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
                                <b>Complaint Photos/ Videos/ Audios : </b><br> --}}


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
                    @endforeach

                </div>
            </section>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    </main>



    <div class="modal fade" id="addmodel" tabindex="-1">
        <div class="modal-dialog modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add Investigation Suspect</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ url('/investisuspect') }}" method="post" enctype="multipart/form-data">
                        @csrf
                            <div class="form-group">
                            <label for="complaint_id">complaint no</label>
                            <select class="form-select" name="fir_idS" required>
                                @foreach ($complaints as $dataItem)
                                    <option value="{{ $dataItem->fir_id  }}">{{ $dataItem->fir_id  }}</option>
                                @endforeach
                            
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="fname" class="form-label">First Name</label>
                            <input type="text" class="form-control"  name="suspect_fname" required>
                        </div>
                       <div class="form-group">
                            <label for="mname" class="form-label">Middle Name</label>
                            <input type="text" class="form-control"  name="suspect_mname" required>
                        </div>
                        <div class="form-group">
                            <label for="lname" class="form-label">Last Name</label>
                            <input type="text" class="form-control" id="lname" name="suspect_lname" required>
                        </div>
                        <div class="form-group">
                            <label for="address" class="form-label">Address</label>
                            <input type="text" class="form-control" id="address" name="suspect_address" required>
                        </div>
                        <div class="form-group">
                            <label for="dob" class="form-label">Date of Birth</label>
                            <input type="date" class="form-control" id="dob" name="suspect_dob" required>
                        </div>
                        <div class="form-group">
                            <label for="gender" class="form-label">Gender</label>
                            <select class="form-select" id="gender" name="suspect_gender" required>
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                                <option value="other">Other</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="mobile" class="form-label">Mobile Number</label>
                            <input type="tel" class="form-control" id="mobile" name="suspect_mobile_no" required>
                        </div>
                        <div class="form-group">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" name="suspect_email" required>
                        </div>
                        <div class="form-group">
                            <label for="photoPath" class="form-label">Photo Path</label>
                            <input type="file" class="form-control" id="photoPath" name="suspect_photo" required>
                           
                        </div>

                        <div class="form-group">
                            <label for="suspect_adhar" class="form-label">suspect_adhar</label>
                            <input type="text" class="form-control" id="address" name="suspect_adhar" required>
                        </div>
                        <div class="form-group">
                            <label for="suspect_pan_no" class="form-label">suspect_pan_no</label>
                            <input type="text" class="form-control" id="dob" name="suspect_pan_no" required>
                        </div>

                        <div class="form-group">
                            <label for="country" class="form-label">Country</label>
                            <select class="form-select" id="country" name="country_id">
                                @foreach ($countries as $countryItem)
                                <option value="{{ $countryItem->country_id  }}">{{ $countryItem->country_name }}</option>
                            @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="state" class="form-label">State</label>
                            <select class="form-select" id="state" name="state_id">
                                @foreach ($states as $statesItem)
                                    <option value="{{ $statesItem->state_id  }}">{{ $statesItem->state_name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="district" class="form-label">District</label>
                            <select class="form-select" id="district" name="district_id">
                                @foreach ($districss as $districssItem)
                                <option value="{{ $districssItem->district_id  }}">{{ $districssItem->district_name }}</option>
                            @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="city" class="form-label">City</label>
                            <select class="form-select" id="city" name="city_id">
                                @foreach ($city as $cityItem)
                                <option value="{{ $cityItem->city_id  }}">{{ $cityItem->city_name }}</option>
                            @endforeach
                            </select>
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary" name="save_total_complaints"><i
                            class="bx bx-save"></i> Save Investigation suspect</button>
                </div>
                </form>
            </div>
        </div>
    </div>

@endsection
