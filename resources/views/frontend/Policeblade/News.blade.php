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
                @foreach ($data as $item)
                    <div class="container mt-4">
                        <div class="card">
                            <div class="card-body">

                                <br>

                                <div class="row">
                                    <div class="col-md-2">

                                        <div class="rounded-circle overflow-hidden" style="width: 70px; height: 70px;">
                                            <img src="assets/img/rajasthan_police.png" class="img-fluid rounded-circle"
                                                alt="User Photo">
                                        </div>
                                    </div>

                                    <div class="col-md-9">
                                        <h5 class="card-title">{{ $item->news_title }}</h5>
                                    </div>
                                </div>

                                <div class="row mt-3">
                                    <div class="col">

                                    </div>
                                </div>

                                <div class="card ">
                                    <div class="card-body">
                                      @if ($item->news_photo_path)
                                      <br>
                                      <center>
                                          <img src="{{ asset('police_api/inputfiles/' . $item->news_photo_path) }}"
                                              class="img-fluid" alt="Post Photo" style="width: 400px; height: 300px;">
                                      </center><br><br>                  
                                  @endif


                                        <p class="card-text">{{ $item->news_description }}</p>
                                    </div>
                                </div>
                            </div>




                        </div>
                    </div>

























                    {{-- <div class="col-xxl-4 col-md-6">
                    <div class="card info-card sales-card"   data-bs-toggle="modal"
                    data-bs-target="#fullscreenShowModal{{ $item->news_id   }}">
                        {{-- <div class="filter">
                            <a class="icon" href="#" data-bs-toggle="dropdown">
                                <i class="bi bi-pencil"></i>
                            </a>
                        </div> 

                        <div class="card-body">
                            <h5 class="card-title">{{ $item->news_title }}</h5>

                            <div class="d-flex align-items-center">
                                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                    <i class="bi bi-journal-bookmark-fill"></i>
                                </div>
                                <div class="ps-3">
                                    <h6>{{ $item->news_description }}</h6>

                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="modal fade" id="fullscreenShowModal{{ $item->news_id }}" tabindex="-1">
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
                </div> --}}
                @endforeach



            </div>
        </section>


    </main>
@endsection
