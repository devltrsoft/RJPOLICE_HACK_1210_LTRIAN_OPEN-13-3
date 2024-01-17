@extends('frontend.layouts.main');
@section('main-container')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Data Tables</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('/index') }}">Home</a></li>
                    <li class="breadcrumb-item"> CompaltedFIR</li>
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
                                <div class="pt-4 pb-2">
                                    <h5 class="card-title text-center pb-0 fs-4">Add Complaint</h5>
                                </div>
                                <form action="{{ url('/policeadduser') }}" method="post">
                                    @csrf

                                    <div class="form-group">
                                        <label for="user_fname">First Name</label>
                                        <input type="text" class="form-control" id="user_fname" name="user_fname"
                                            value="<?= $record->user_fname ?? '' ?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="user_mname">Middle Name</label>
                                        <input type="text" class="form-control" id="user_mname" name="user_mname"
                                            value="<?= $record->user_mname ?? '' ?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="user_lname">Last Name</label>
                                        <input type="text" class="form-control" id="user_lname" name="user_lname"
                                            value="<?= $record->user_lname ?? '' ?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="user_address">Address:</label>
                                        <input type="text" class="form-control"name="user_address" id="user_address" required>
                                    </div>
                                    <!-- Add other form fields as needed -->

                                    <div class="form-group">
                                        <label for="user_photo">Photo:</label>
                                        <input type="file" class="form-control"name="user_photo" id="user_photo">
                                    </div>
                                    <div class="form-group">
                                        <label for="user_email">Email:</label>
                                        <input type="email" class="form-control"name="user_email" id="user_email" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="user_password">Password:</label>
                                        <input type="password"class="form-control" name="user_password" id="user_password" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="user_gender">Gender:</label>
                                        <select name="user_gender"class="form-control" id="user_gender" required>
                                            <option value="Male">Male</option>
                                            <option value="Female">Female</option>
                                            <option value="Other">Other</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="user_dob">Date of Birth:</label>
                                        <input type="date"class="form-control" name="user_dob" id="user_dob" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="user_mobile1">Mobile 1:</label>
                                        <input type="tel" class="form-control" name="user_mobile1" id="user_mobile1" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="user_mobile2">Mobile 2:</label>
                                        <input type="tel" class="form-control" name="user_mobile2" id="user_mobile2">
                                    </div>
                                    <div class="form-group">
                                        <label for="user_adhar">Aadhar Number:</label>
                                        <input type="text" class="form-control" name="user_adhar" id="user_adhar">
                                    </div>
                                    <div class="form-group">
                                        <label for="user_pan">PAN Number:</label>
                                        <input type="text"class="form-control"  name="user_pan" id="user_pan">
                                    </div>
                                    <div class="form-group">
                                        <label for="country" class="form-label">Country</label>
                                        <select class="form-select" id="country" name="country_id">
                                            @foreach ($countries as $countryItem)
                                                <option value="{{ $countryItem->country_id }}">
                                                    {{ $countryItem->country_name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="state" class="form-label">State</label>
                                        <select class="form-select" id="state" name="state_id">
                                            @foreach ($states as $statesItem)
                                                <option value="{{ $statesItem->state_id }}">
                                                    {{ $statesItem->state_name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="district" class="form-label">District</label>
                                        <select class="form-select" id="district" name="district_id">
                                            @foreach ($districss as $districssItem)
                                                <option value="{{ $districssItem->district_id }}">
                                                    {{ $districssItem->district_name }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="city" class="form-label">City</label>
                                        <select class="form-select" id="city" name="city_id">
                                            @foreach ($city as $cityItem)
                                                <option value="{{ $cityItem->city_id }}">
                                                    {{ $cityItem->city_name }}</option>
                                            @endforeach
                                        </select>
                                    </div>

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


    </main>
@endsection
