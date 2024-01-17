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
                    <div class="container d-flex mt-5">
                        <div class="card1 text-center mb-5">
                            <div class="circle-image">
                                <img src="{{ asset('assets/img/rajasthan_police.png') }}" width="50">
                            </div>
                            <span class="name mb-1 fw-500">overall_satisfaction</span>
                            <div class="rate bg-success py-3 text-white mt-3">
                                <h6 class="mb-0">Rate your driver</h6>
                                <form action="{{ url('/feedback') }}" method="post">
                                    @csrf
                                    <div class="rating">
                                        <!-- Use a unique name attribute for each set of radio buttons -->
                                        <input type="radio" name="overall_satisfaction_rating" value="5" id="overall_5"><label for="overall_5">☆</label>
                                        <input type="radio" name="overall_satisfaction_rating" value="4" id="overall_4"><label for="overall_4">☆</label>
                                        <input type="radio" name="overall_satisfaction_rating" value="3" id="overall_3"><label for="overall_3">☆</label>
                                        <input type="radio" name="overall_satisfaction_rating" value="2" id="overall_2"><label for="overall_2">☆</label>
                                        <input type="radio" name="overall_satisfaction_rating" value="1" id="overall_1"><label for="overall_1">☆</label>
                                    </div>
                
                                    <div class="buttons px-4 mt-0">
                                        <button type="submit"  class="btn btn-warning btn-block rating-submit">Submit</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-xxl-4 col-md-6">
                    <div class="container d-flex mt-5">
                        <div class="card1 text-center mb-5">
                            <div class="circle-image">
                                <img src="{{ asset('assets/img/rajasthan_police.png') }}" width="50">
                            </div>
                            <span class="name mb-1 fw-500">trust_and_confidance</span>
                            <div class="rate bg-success py-3 text-white mt-3">
                                <h6 class="mb-0">Rate your driver</h6>
                                <form action="{{ url('/feedback') }}" method="post">
                                    @csrf
                                    <div class="rating">
                                        <!-- Use a different unique name attribute for this set of radio buttons -->
                                        <input type="radio" name="trust_and_confidance_rating" value="5" id="trust_and_confidance_5"><label for="trust_and_confidance_5">☆</label>
                                        <input type="radio" name="trust_and_confidance_rating" value="4" id="trust_and_confidance_4"><label for="trust_and_confidance_4">☆</label>
                                        <input type="radio" name="trust_and_confidance_rating" value="3" id="trust_and_confidance_3"><label for="trust_and_confidance_3">☆</label>
                                        <input type="radio" name="trust_and_confidance_rating" value="2" id="trust_and_confidance_2"><label for="trust_and_confidance_2">☆</label>
                                        <input type="radio" name="trust_and_confidance_rating" value="1" id="trust_and_confidance_1"><label for="trust_and_confidance_1">☆</label>
                                    </div>
                
                                    <div class="buttons px-4 mt-0">
                                        <button type="submit" class="btn btn-warning btn-block rating-submit">Submit</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                


                <div class="col-xxl-4 col-md-6">
                    <div class="container d-flex mt-5">
                        <div class="card1 text-center mb-5">
                            <div class="circle-image">
                                <img src="{{ asset('assets/img/rajasthan_police.png') }}" width="50">
                            </div>
                            <span class="name mb-1 fw-500">quality_of_service</span>
                            <div class="rate bg-success py-3 text-white mt-3">
                                <h6 class="mb-0">Rate your driver</h6>
                                <form action="{{ url('/feedback') }}" method="post">
                                    @csrf
                                    <div class="rating">
                                        <input type="radio" name="quality_of_service_rating" value="5" id="qos_5"><label for="qos_5">☆</label>
                                        <input type="radio" name="quality_of_service_rating" value="4" id="qos_4"><label for="qos_4">☆</label>
                                        <input type="radio" name="quality_of_service_rating" value="3" id="qos_3"><label for="qos_3">☆</label>
                                        <input type="radio" name="quality_of_service_rating" value="2" id="qos_2"><label for="qos_2">☆</label>
                                        <input type="radio" name="quality_of_service_rating" value="1" id="qos_1"><label for="qos_1">☆</label>
                                    </div>
                
                                    <div class="buttons px-4 mt-0">
                                        <button class="btn btn-warning btn-block rating-submit">Submit</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Repeat the structure for other sections with unique names -->
                
                <!-- Example for fairness_of_investigation -->
                <div class="col-xxl-4 col-md-6">
                    <div class="container d-flex mt-5">
                        <div class="card1 text-center mb-5">
                            <div class="circle-image">
                                <img src="{{ asset('assets/img/rajasthan_police.png') }}" width="50">
                            </div>
                            <span class="name mb-1 fw-500">fairness_of_investigation</span>
                            <div class="rate bg-success py-3 text-white mt-3">
                                <h6 class="mb-0">Rate your driver</h6>
                                <form action="{{ url('/feedback') }}" method="post">
                                    @csrf
                                    <div class="rating">
                                        <input type="radio" name="fairness_of_investigation_rating" value="5" id="foi_5"><label for="foi_5">☆</label>
                                        <input type="radio" name="fairness_of_investigation_rating" value="4" id="foi_4"><label for="foi_4">☆</label>
                                        <input type="radio" name="fairness_of_investigation_rating" value="3" id="foi_3"><label for="foi_3">☆</label>
                                        <input type="radio" name="fairness_of_investigation_rating" value="2" id="foi_2"><label for="foi_2">☆</label>
                                        <input type="radio" name="fairness_of_investigation_rating" value="1" id="foi_1"><label for="foi_1">☆</label>
                                    </div>
                
                                    <div class="buttons px-4 mt-0">
                                        <button class="btn btn-warning btn-block rating-submit">Submit</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                


                <div class="col-xxl-4 col-md-6">
                    <div class="container d-flex mt-5">
                        <div class="card1 text-center mb-5">
                            <div class="circle-image">
                                <img src="{{ asset('assets/img/rajasthan_police.png') }}" width="50">
                            </div>
                            <span class="name mb-1 fw-500">asked_for_brief</span>
                            <div class="rate bg-success py-3 text-white mt-3">
                                <h6 class="mb-0">Rate your driver</h6>
                                <form action="{{ url('/feedback') }}" method="post">
                                    @csrf
                                    <div class="rating">
                                        <input type="radio" name="asked_for_brief_rating" value="5" id="afbr_5"><label for="afbr_5">☆</label>
                                        <input type="radio" name="asked_for_brief_rating" value="4" id="afbr_4"><label for="afbr_4">☆</label>
                                        <input type="radio" name="asked_for_brief_rating" value="3" id="afbr_3"><label for="afbr_3">☆</label>
                                        <input type="radio" name="asked_for_brief_rating" value="2" id="afbr_2"><label for="afbr_2">☆</label>
                                        <input type="radio" name="asked_for_brief_rating" value="1" id="afbr_1"><label for="afbr_1">☆</label>
                                    </div>
                
                                    <div class="buttons px-4 mt-0">
                                        <button class="btn btn-warning btn-block rating-submit">Submit</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-xxl-4 col-md-6">
                    <div class="container d-flex mt-5">
                        <div class="card1 text-center mb-5">
                            <div class="circle-image">
                                <img src="{{ asset('assets/img/rajasthan_police.png') }}" width="50">
                            </div>
                            <span class="name mb-1 fw-500">time_taken_to_resoive_complaint</span>
                            <div class="rate bg-success py-3 text-white mt-3">
                                <h6 class="mb-0">Rate your driver</h6>
                                <form action="{{ url('/feedback') }}" method="post">
                                    @csrf
                                    <div class="rating">
                                        <input type="radio" name="time_taken_to_resoive_complaint_rating" value="5" id="tttrc_5"><label for="tttrc_5">☆</label>
                                        <input type="radio" name="time_taken_to_resoive_complaint_rating" value="4" id="tttrc_4"><label for="tttrc_4">☆</label>
                                        <input type="radio" name="time_taken_to_resoive_complaint_rating" value="3" id="tttrc_3"><label for="tttrc_3">☆</label>
                                        <input type="radio" name="time_taken_to_resoive_complaint_rating" value="2" id="tttrc_2"><label for="tttrc_2">☆</label>
                                        <input type="radio" name="time_taken_to_resoive_complaint_rating" value="1" id="tttrc_1"><label for="tttrc_1">☆</label>
                                    </div>
                
                                    <div class="buttons px-4 mt-0">
                                        <button class="btn btn-warning btn-block rating-submit">Submit</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                
                








            </div>
        </section>


    </main>
@endsection
