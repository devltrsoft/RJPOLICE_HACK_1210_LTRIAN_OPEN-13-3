@extends('frontend.layouts.main');
@section('main-container')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Data Tables</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('/index') }}">Home</a></li>
                    <li class="breadcrumb-item">CompaltedFIR</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section dashboard">
            <div class="row">
                <div class="col-xxl-4 col-md-6">
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

                    </div>
                </div>

                
            </div>
        </section>


    </main>
@endsection
