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
                            data-bs-target="#addinvi">
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
                            @foreach ($complaintitem->complaints as $itemss)
                                <div class="col-xxl-4 col-md-6">
                                    <div class="card info-card sales-card" data-bs-toggle="modal"
                                        data-bs-target="#fullscreenShowModal{{ $item->investigation_id }}">

                                        <div class="filter">
                                            <a class="icon" data-bs-toggle="modal"
                                                data-bs-target="#editModel{{ $item->complaint_id }}">
                                                <i class="bi bi-pencil"></i>
                                            </a>
                                        </div>
                                        <div class="card-body">
                                            <h5 class="card-title">FIR-{{ $item->fir_id }}</h5>

                                            <div class="d-flex align-items-center">
                                                <div
                                                    class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                                    <i class="bi bi-journal-bookmark-fill"></i>
                                                </div>
                                                <div class="ps-3">
                                                    <h6>{{ $itemss->complaint_subject }}</h6>

                                                </div>
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
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>



    <div class="modal fade" id="addinvi" tabindex="-1">
        <div class="modal-dialog modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add Investigation</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ url('/investigation') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="complaint_type_id">Complaint </label>
                            <select class="form-select" name="complaint_id">
                                @foreach ($complaints as $complaintItem)
                                    <option value="{{ $complaintItem->complaint_id }}">
                                        {{ $complaintItem->complaint_subject }}</option>
                                @endforeach
                                <!-- Add more options as needed -->
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="complaint_subject">investigation_start_date</label>
                            <input type="date" class="form-control" name="investigation_start_date" required>
                        </div>

                        <div class="form-group">
                            <label for="complaint_description">investigation_end_date</label>
                            <input type="date" class="form-control" name="investigation_end_date" required>
                        </div>

                        <div class="form-group">
                            <label for="complaint_against">location </label>
                            <input type="text" class="form-control" name="location" required>
                        </div>

                        <div class="form-group">
                            <label for="incident_date">incedant_reporting</label>
                            <input type="text" class="form-control" name="incedant_reporting" required>
                        </div>

                        <div class="form-group">
                            <label for="incident_date">evidance_property</label>
                            <input type="text" class="form-control" name="evidance_property" required>
                        </div>

                        <div class="form-group">
                            <label for="incident_date">investigation_description</label>
                            <input type="text" class="form-control" name="investigation_description" required>
                        </div>

                        {{-- <div class="form-group">
                        <label for="complaint_type_id">Complaint Type</label>
                        <select class="form-select" name="complaint_type_id" >
                            @foreach ($status as $statussItem)
                                <option value="{{ $statussItem->status_id  }}">{{ $statussItem->status_name }}</option>
                            @endforeach
                            <!-- Add more options as needed -->
                        </select>
                    </div> --}}

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary" name="save_completed_fir"><i class="bx bx-save"></i> Save
                        changes</button>
                </div>
                </form>
            </div>
        </div>
    </div>
@endsection
