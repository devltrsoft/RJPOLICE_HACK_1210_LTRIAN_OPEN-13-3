@extends('frontend.layouts.main');
@section('main-container')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Data Tables</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('/index') }}">Home</a></li>
                    <li class="breadcrumb-item"> {{ GoogleTranslate::trans('CompaltedFIR', \App::getLocale()) }}</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->
        <div class="container">
            <section class="section dashboard ">
                <div class="row justify-content-center">
                    <div class="col-lg-12 col-md-12">
                        <!-- Column content goes here -->
                        <div class="card mb-3">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center mb-3">
                                    <h5 class="card-title text-center pb-0 fs-4">Add Complaint</h5>

                                    <div class="dropdown">
                                        <button class="btn btn-primary" type="button" id="customActionDropdown"
                                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="bi bi-plus-lg"></i>
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="customActionDropdown">

                                            <a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#addsuspect">Add
                                                Suspect</a>
                                            <a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#addvictim">Add
                                                Victim</a>
                                            <a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#addwitness">Add
                                                Witness</a>
                                            <a class="dropdown-item" data-bs-toggle="modal"
                                                data-bs-target="#addevidance">Add Evidance</a>
                                        </div>
                                    </div>


                                </div>
                                <form action="{{ url('/policeaddcomplaint') }}" method="post">
                                    @csrf
                                    <div class="form-group">
                                        <label for="complaint_type_id">Complaint Type</label>
                                        <select class="form-select" name="complaint_type_id">
                                            @foreach ($complaintstypes as $complaintstypesItem)
                                                <option value="{{ $complaintstypesItem->complaint_type_id }}">
                                                    {{ GoogleTranslate::trans($complaintstypesItem->complaint_type_name, \App::getLocale()) }}
                                                </option>
                                            @endforeach
                                            <!-- Add more options as needed -->
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label for="complaint_type_id">User Select </label>
                                        <select class="form-select" name="user_id">
                                            @foreach ($UserDetail as $UserDetailS)
                                                <option value="{{ $UserDetailS->user_id }}">
                                                    {{ GoogleTranslate::trans($UserDetailS->user_fname, \App::getLocale()) }}
                                                    {{ GoogleTranslate::trans($UserDetailS->user_lname, \App::getLocale()) }}
                                                </option>
                                            @endforeach
                                            <!-- Add more options as needed -->
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label for="complaint_subject">Complaint Subject</label>
                                        <input type="text" class="form-control" name="complaint_subject" required>
                                    </div>

                                    <div class="form-group">
                                        <label for="complaint_description">Complaint Description</label>
                                        <textarea class="form-control" name="complaint_description" required></textarea>
                                    </div>

                                    <div class="form-group">
                                        <label for="complaint_against">Complaint Against</label>
                                        <input type="text" class="form-control" name="complaint_against" required>
                                    </div>

                                    <div class="form-group">
                                        <label for="complaint_location">Complaint Location</label>
                                        <input type="text" class="form-control" name="complaint_location" required>
                                    </div>


                                    <div class="form-group">
                                        <label for="incident_date">Incident Date</label>
                                        <input type="date" class="form-control" name="incident_date" required>
                                    </div>

                                    <div class="form-group">
                                        <label for="complaint_fir_id">complaint/fir</label>
                                        <select class="form-select" name="complaint_fir_id" required>
                                            @foreach ($complaintfir as $statusItem)
                                                <option value="{{ $statusItem->complaint_fir_id }}">
                                                    {{ $statusItem->complaint_fir_name }}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    {{-- <div class="form-group">
                                    <label for="status_id">Status</label>
                                    <select class="form-select" name="status_id" required>
                                        @foreach ($statuss as $statusItem)
                                            <option value="{{ $statusItem->status_id }}">{{ $statusItem->status_name }}
                                            </option>
                                        @endforeach

                                        <!-- Add more options as needed -->
                                    </select>
                                    </div> --}}
                            </div>

                            <div class="card-footer">

                                <button type="submit" class="btn btn-primary" style="float: right;"
                                    name="save_total_complaints"><i class="bx bx-save"></i> Add Complaint</button>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
        </div>
        </section>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    </main>


    {{-- suspect add model --}}

    <div class="modal fade" id="addsuspect" tabindex="-1">
        <div class="modal-dialog modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add Complaint Suspect</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ url('/casesuspect') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="complaint_id">complaint no</label>
                            <select class="form-select" name="complaint_id" required>
                                @foreach ($data as $complaintsItem)
                                    <option value="{{ $complaintsItem->complaint_id }}">{{ $complaintsItem->cmp_id }}
                                    </option>
                                @endforeach

                            </select>
                        </div>
                        <div class="form-group">
                            <label for="fname" class="form-label">First Name</label>
                            <input type="text" class="form-control" name="complaint_suspect_fname" required>
                        </div>
                        <div class="form-group">
                            <label for="mname" class="form-label">Middle Name</label>
                            <input type="text" class="form-control" name="complaint_suspect_mname" required>
                        </div>
                        <div class="form-group">
                            <label for="lname" class="form-label">Last Name</label>
                            <input type="text" class="form-control" id="lname" name="complaint_suspect_lname"
                                required>
                        </div>
                        <div class="form-group">
                            <label for="address" class="form-label">Address</label>
                            <input type="text" class="form-control" id="address" name="complaint_suspect_address"
                                required>
                        </div>
                        <div class="form-group">
                            <label for="dob" class="form-label">Date of Birth</label>
                            <input type="date" class="form-control" id="dob" name="complaint_suspect_dob"
                                required>
                        </div>
                        <div class="form-group">
                            <label for="gender" class="form-label">Gender</label>
                            <select class="form-select" id="gender" name="complaint_suspect_gender">
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                                <option value="other">Other</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="mobile" class="form-label">Mobile Number</label>
                            <input type="tel" class="form-control" id="mobile" name="complaint_suspect_mobile_no"
                                required>
                        </div>
                        <div class="form-group">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" name="complaint_suspect_email"
                                required>
                        </div>
                        <div class="form-group">
                            <label for="photoPath" class="form-label">Photo Path</label>
                            <input type="file" class="form-control" id="photoPath"
                                name="complaint_suspect_photo_path" required>
                        </div>

                        <div class="form-group">
                            <label for="fname" class="form-label">complaint_suspect_adhar</label>
                            <input type="text" class="form-control" name="complaint_suspect_adhar" required>
                        </div>
                        <div class="form-group">
                            <label for="fname" class="form-label">complaint_suspect_pan</label>
                            <input type="text" class="form-control" name="complaint_suspect_pan" required>
                        </div>
                        <div class="form-group">
                            <label for="country" class="form-label">Country</label>
                            <select class="form-select" id="country" name="country_id">
                                @foreach ($countries as $countryItem)
                                    <option value="{{ $countryItem->country_id }}">{{ $countryItem->country_name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="state" class="form-label">State</label>
                            <select class="form-select" id="state" name="state_id">
                                @foreach ($states as $statesItem)
                                    <option value="{{ $statesItem->state_id }}">{{ $statesItem->state_name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="district" class="form-label">District</label>
                            <select class="form-select" id="district" name="district_id">
                                @foreach ($districss as $districssItem)
                                    <option value="{{ $districssItem->district_id }}">
                                        {{ $districssItem->district_name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="city" class="form-label">City</label>
                            <select class="form-select" id="city" name="city_id">
                                @foreach ($city as $cityItem)
                                    <option value="{{ $cityItem->city_id }}">{{ $cityItem->city_name }}</option>
                                @endforeach
                            </select>
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary" name="save_total_complaints"><i
                            class="bx bx-save"></i> Save complaint suspect</button>
                </div>
                </form>
            </div>
        </div>
    </div>


    {{-- add complaint victim --}}

    <div class="modal fade" id="addvictim" tabindex="-1">
        <div class="modal-dialog modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add Complaint Victim</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ url('/casevictim') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="complaint_id">complaint no</label>
                            <select class="form-select" name="complaint_id" required>
                                @foreach ($data as $complaintsItem)
                                    <option value="{{ $complaintsItem->complaint_id }}">{{ $complaintsItem->cmp_id }}
                                    </option>
                                @endforeach

                            </select>
                        </div>
                        <div class="form-group">
                            <label for="fname" class="form-label">First Name</label>
                            <input type="text" class="form-control" name="complaint_witness_fname" required>
                        </div>
                        <div class="form-group">
                            <label for="mname" class="form-label">Middle Name</label>
                            <input type="text" class="form-control" name="complaint_witness_mname" required>
                        </div>
                        <div class="form-group">
                            <label for="lname" class="form-label">Last Name</label>
                            <input type="text" class="form-control" id="lname" name="complaint_witness_lname"
                                required>
                        </div>
                        <div class="form-group">
                            <label for="address" class="form-label">Address</label>
                            <input type="text" class="form-control" id="address" name="complaint_witness_address"
                                required>
                        </div>
                        <div class="form-group">
                            <label for="dob" class="form-label">Date of Birth</label>
                            <input type="date" class="form-control" id="dob" name="complaint_witness_dob"
                                required>
                        </div>
                        <div class="form-group">
                            <label for="gender" class="form-label">Gender</label>
                            <select class="form-select" id="gender" name="complaint_witness_gender" required>
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                                <option value="other">Other</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="mobile" class="form-label">Mobile Number</label>
                            <input type="tel" class="form-control" id="mobile" name="complaint_witness_mobile"
                                required>
                        </div>
                        <div class="form-group">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" name="complaint_witness_email"
                                required>
                        </div>
                        <div class="form-group">
                            <label for="photoPath" class="form-label">Photo Path</label>
                            <input type="file" class="form-control" id="photoPath"
                                name="complaint_witness_photo_path" required>

                        </div>

                        <div class="form-group">
                            <label for="fname" class="form-label">complaint_victim_adhar</label>
                            <input type="text" class="form-control" name="complaint_witness_adhar" required
                                placeholder="Format: 1234 5678 9012">
                        </div>
                        <div class="form-group">
                            <label for="fname" class="form-label">complaint_victim_pan</label>
                            <input type="text" class="form-control" name="complaint_witness_pan" required
                                placeholder="Format: ABCDEF1234">
                        </div>
                        <div class="form-group">
                            <label for="country" class="form-label">Country</label>
                            <select class="form-select" id="country" name="country_id">
                                @foreach ($countries as $countryItem)
                                    <option value="{{ $countryItem->country_id }}">{{ $countryItem->country_name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="state" class="form-label">State</label>
                            <select class="form-select" id="state" name="state_id">
                                @foreach ($states as $statesItem)
                                    <option value="{{ $statesItem->state_id }}">{{ $statesItem->state_name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="district" class="form-label">District</label>
                            <select class="form-select" id="district" name="district_id">
                                @foreach ($districss as $districssItem)
                                    <option value="{{ $districssItem->district_id }}">
                                        {{ $districssItem->district_name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="city" class="form-label">City</label>
                            <select class="form-select" id="city" name="city_id">
                                @foreach ($city as $cityItem)
                                    <option value="{{ $cityItem->city_id }}">{{ $cityItem->city_name }}</option>
                                @endforeach
                            </select>
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary" name="save_total_complaints"><i
                            class="bx bx-save"></i> Save complaint victim</button>
                </div>
                </form>
            </div>
        </div>
    </div>



    {{-- add complaint witness --}}


    <div class="modal fade" id="addwitness" tabindex="-1">
        <div class="modal-dialog modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add Complaint Witness</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ url('/casewitness') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="complaint_id">complaint no</label>
                            <select class="form-select" name="complaint_id" required>
                                @foreach ($data as $complaintsItem)
                                    <option value="{{ $complaintsItem->complaint_id }}">{{ $complaintsItem->cmp_id }}
                                    </option>
                                @endforeach

                            </select>
                        </div>
                        <div class="form-group">
                            <label for="fname" class="form-label">First Name</label>
                            <input type="text" class="form-control" name="complaint_witness_fname" required>
                        </div>
                        <div class="form-group">
                            <label for="mname" class="form-label">Middle Name</label>
                            <input type="text" class="form-control" name="complaint_witness_mname" required>
                        </div>
                        <div class="form-group">
                            <label for="lname" class="form-label">Last Name</label>
                            <input type="text" class="form-control" id="lname" name="complaint_witness_lname"
                                required>
                        </div>
                        <div class="form-group">
                            <label for="address" class="form-label">Address</label>
                            <input type="text" class="form-control" id="address" name="complaint_witness_address"
                                required>
                        </div>
                        <div class="form-group">
                            <label for="dob" class="form-label">Date of Birth</label>
                            <input type="date" class="form-control" id="dob" name="complaint_witness_dob"
                                required>
                        </div>
                        <div class="form-group">
                            <label for="gender" class="form-label">Gender</label>
                            <select class="form-select" id="gender" name="complaint_witness_gender" required>
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                                <option value="other">Other</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="mobile" class="form-label">Mobile Number</label>
                            <input type="tel" class="form-control" id="mobile" name="complaint_witness_mobile"
                                required>
                        </div>
                        <div class="form-group">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" name="complaint_witness_email"
                                required>
                        </div>
                        <div class="form-group">
                            <label for="photoPath" class="form-label">Photo Path</label>
                            <input type="file" class="form-control" id="photoPath"
                                name="complaint_witness_photo_path" required>

                        </div>

                        <div class="form-group">
                            <label for="fname" class="form-label">complaint_witness_adhar</label>
                            <input type="text" class="form-control" name="complaint_witness_adhar" required
                                placeholder="Format: 1234 5678 9012">
                        </div>
                        <div class="form-group">
                            <label for="fname" class="form-label">complaint_witness_pan</label>
                            <input type="text" class="form-control" name="complaint_witness_pan" required
                                placeholder="Format: ABCDEF1234">
                        </div>
                        <div class="form-group">
                            <label for="country" class="form-label">Country</label>
                            <select class="form-select" id="country" name="country_id">
                                @foreach ($countries as $countryItem)
                                    <option value="{{ $countryItem->country_id }}">{{ $countryItem->country_name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="state" class="form-label">State</label>
                            <select class="form-select" id="state" name="state_id">
                                @foreach ($states as $statesItem)
                                    <option value="{{ $statesItem->state_id }}">{{ $statesItem->state_name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="district" class="form-label">District</label>
                            <select class="form-select" id="district" name="district_id">
                                @foreach ($districss as $districssItem)
                                    <option value="{{ $districssItem->district_id }}">
                                        {{ $districssItem->district_name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="city" class="form-label">City</label>
                            <select class="form-select" id="city" name="city_id">
                                @foreach ($city as $cityItem)
                                    <option value="{{ $cityItem->city_id }}">{{ $cityItem->city_name }}</option>
                                @endforeach
                            </select>
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary" name="save_total_complaints"><i
                            class="bx bx-save"></i> Save complaint Witness</button>
                </div>
                </form>
            </div>
        </div>
    </div>


    {{-- add complaint evidance --}}

    <div class="modal fade" id="addevidance" tabindex="-1">
        <div class="modal-dialog modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add Complaint Evidance</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ url('/caseevidance') }}" method="post" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group">
                            <label for="country" class="form-label">FIR Id</label>
                            <select class="form-select" id="country" name="fir_id">
                                @foreach ($data as $item)
                                    <option value="{{ $item->cmp_id }}">
                                        {{ $item->cmp_id }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="mobile" class="form-label">Evidance Name</label>
                            <input type="text" class="form-control" id="mobile" name="evidance_name"
                                value="{{ $item->evidance_name }}">
                        </div>

                        <div class="form-group">
                            <label for="mobile" class="form-label">evidance description</label>
                            <input type="text" class="form-control" id="mobile" name="evidance_description"
                                value="{{ $item->evidance_description }}">
                        </div>

                        <div class="form-group">
                            <label for="mobile" class="form-label">evidance Photo</label>
                            <input type="file" class="form-control" id="mobile" name="evidance_photo"
                                value="{{ $item->evidance_photo_path }}">
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary" name="save_total_complaints"><i
                                    class="bx bx-save"></i>
                                Save case evidance</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
