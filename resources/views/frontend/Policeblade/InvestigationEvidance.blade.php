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

        <div class="container">
            <section class="section dashboard">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    {{-- <h5 class="card-title text-center pb-0 fs-4">Add Complaint</h5> --}}

                    <div class="dropdown">
                        <button class="btn btn-primary" type="button" id="customActionDropdown" data-bs-toggle="modal"
                            data-bs-target="#addmodel">
                            <i class="bi bi-plus-lg"></i>
                        </button>

                    </div>
                </div>

                <div class="row">
                    {{-- <div class="col-xxl-4 col-md-6">
                        <div class="card info-card sales-card">

                            <div class="card-body">
                                <h5 class="card-title">Total FIR</h5>

                                <div class="d-flex align-items-center">
                                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <i class="bi bi-journal-bookmark-fill"></i>
                                    </div>
                                    <div class="ps-3">
                                        <h6>145</h6>

                                    </div>
                                </div>
                            </div>

                        </div> --}}
                    </div>


                </div>
            </section>

        </div>
    </main>


    <div class="modal fade" id="addModel" tabindex="-1">
        <div class="modal-dialog modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add Investigation Victim</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ url('/investigationevidance') }}" method="post" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group">
                            <label for="country" class="form-label">Investigation Id</label>
                            <select class="form-select" id="country" name="investigation_id">
                                @foreach ($news_categories as $item)
                                    <option value="{{ $item->investigation_id }}">{{ $item->investigation_id }} </option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="mname" class="form-label">email</label>
                            <input type="text" class="form-control" name="email">
                        </div>

                        <div class="form-group">
                            <label for="mname" class="form-label">pan</label>
                            <input type="text" class="form-control" name="pan">
                        </div>

                        <div class="form-group">
                            <label for="mname" class="form-label">gender</label>
                            <input type="text" class="form-control" name="gender">
                        </div>

                        <div class="form-group">
                            <label for="mname" class="form-label">aadhar</label>
                            <input type="number" class="form-control" name="aadhar">
                        </div>

                        <div class="form-group">
                            <label for="mname" class="form-label">photo</label>
                            <input type="file" class="form-control" name="aadhar">
                        </div>

                        <div class="form-group">
                            <label for="mname" class="form-label">dob</label>
                            <input type="date" class="form-control" name="dob">
                        </div>

                        <div class="form-group">
                            <label for="mname" class="form-label">address</label>
                            <input type="text" class="form-control" name="address">
                        </div>

                        <div class="form-group">
                            <label for="mname" class="form-label">mobile</label>
                            <input type="number" class="form-control" name="mobile">
                        </div>

                        <div class="form-group">
                            <label for="country" class="form-label">country</label>
                            <select class="form-select" id="country" name="country">
                                @foreach ($policestation as $item)
                                    <option value="{{ $item->country_name }}">{{ $item->country_name }} </option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="country" class="form-label">state</label>
                            <select class="form-select" id="state" name="state">
                                @foreach ($policestation as $item)
                                    <option value="{{ $item->state_name }}">{{ $item->state_name }} </option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="country" class="form-label">district</label>
                            <select class="form-select" id="state" name="district">
                                @foreach ($policestation as $item)
                                    <option value="{{ $item->district_name }}">{{ $item->district_name }} </option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="country" class="form-label">city</label>
                            <select class="form-select" id="city" name="city">
                                @foreach ($policestation as $item)
                                    <option value="{{ $item->city_name }}">{{ $item->city_name }} </option>
                                @endforeach
                            </select>
                        </div>


                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary" name="save_total_complaints"><i
                            class="bx bx-save"></i> Save Investigation Victim</button>
                </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
@endsection
