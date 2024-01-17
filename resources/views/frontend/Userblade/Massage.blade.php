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
                <div class="col-xxl-4 col-md-6">
                    <div class="card info-card sales-card">
                        <div class="filter">
                            <a class="icon" href="#" data-bs-toggle="dropdown">
                                <i class="bi bi-pencil"></i>
                            </a>
                            {{-- <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                        <li><a class="dropdown-item" href="#">Edit</a></li>
                                       
                                    </ul> --}}
                        </div>
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
