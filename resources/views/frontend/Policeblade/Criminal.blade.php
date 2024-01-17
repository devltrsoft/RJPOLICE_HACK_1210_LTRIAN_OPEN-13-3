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
        {{-- {{$complaints}} --}}
        <section class="section dashboard">
            <div class="row">
                @foreach ($complaints as $complaintitem)
                    @foreach ($complaintitem->data as $item)
                        @foreach ($item->criminal as $criminal)
                            @foreach ($criminal->criminaldetail as $criminaldetail)
                                <div class="col-xxl-4 col-md-6">
                                    <div class="card info-card sales-card" data-bs-toggle="modal"
                                    data-bs-target="#fullscreenShowModal{{ $item->investigation_id }}">  
                                        <div class="card-body">
                                            <h5 class="card-title">{{ $criminal->fir_id }}</h5>

                                            <div class="d-flex align-items-center">
                                                <div
                                                    class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                                    <i class="bi bi-journal-bookmark-fill"></i>
                                                </div>
                                                <div class="ps-3">
                                                    <h6>{{ $criminaldetail->criminal_fname }} {{ $criminaldetail->criminal_lname }}</h6>

                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <div class="modal fade" id="fullscreenShowModal{{ $item->investigation_id }}" tabindex="-1">
                                    <div class="modal-dialog modal-fullscreen">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Show Completed FIR</h5>
                                                <button type="button" class="btn-close"
                                                    data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                
                                                <b>Complaint Subject : </b>{{ $item->complaint_subject }}<br>
                                                <b>FIR Description : </b>{{ $item->investigation_description }}<br>
                                                <b>FIR Against : </b>{{ $item->complaint_against }}<br>
                                                <b>Incident Date : </b>{{ $item->incident_date }}<br>
                                                <b>FIR Date(data and time) : </b>{{ $item->created_at }}<br>
                                                {{-- <b>FIR Status : </b>{{ $item->status_name }}<br> --}}
                                                <b>FIR Suspect : </b>{{ $item->suspect_fname }} {{ $item->suspect_mname }} {{ $item->suspect_lname }}<br>
                                                <b>FIR Witness : </b>{{ $item->investigation_witness_fname }} {{ $item->cinvestigation_witness_mname }} {{ $item->investigation_witness_lname }}
                
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
                @endforeach


            </div>
        </section>


    </main>
@endsection
