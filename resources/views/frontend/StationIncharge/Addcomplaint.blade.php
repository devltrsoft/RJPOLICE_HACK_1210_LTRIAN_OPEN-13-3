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
                            <div class="pt-4 pb-2">
                                <h5 class="card-title text-center pb-0 fs-4">Add Complaint</h5>
                            </div>
                                    <form action="{{ url('/addcomplaint') }}" method="post">
                                        @csrf
                                        <div class="form-group">
                                            <label for="complaint_type_id">Complaint Type</label>
                                            <select class="form-select" name="complaint_type_id">
                                                @foreach ($complaintstypes as $complaintstypesItem)
                                                    <option value="{{ $complaintstypesItem->complaint_type_id }}">
                                                        {{ GoogleTranslate::trans($complaintstypesItem->complaint_type_name, \App::getLocale()) }}</option>
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

                                        <div class="form-group">
                                    <label for="status_id">Status</label>
                                    <select class="form-select" name="status_id" required>
                                        @foreach ($statuss as $statusItem)
                                            <option value="{{ $statusItem->status_id }}">{{ $statusItem->status_name }}
                                            </option>
                                        @endforeach

                                        <!-- Add more options as needed -->
                                    </select>
                                    </div>
                                </div>

                                <div class="card-footer">

                                    <button type="submit" class="btn btn-primary" style="float: right;" name="save_total_complaints"><i
                                            class="bx bx-save"></i> Add Complaint</button>
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
