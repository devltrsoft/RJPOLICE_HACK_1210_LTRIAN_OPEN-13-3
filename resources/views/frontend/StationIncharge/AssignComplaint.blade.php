@extends('frontend.layouts.main');
@section('main-container')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Data Tables</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('/index') }}">Home</a></li>
                    <li class="breadcrumb-item">Tables</li>
                    <li class="breadcrumb-item active">Data</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section">
            <div class="row">
                <div class="col-lg-12">

                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Assigned Complaints/cases</h5>
                            <div class="table-responsive text-nowrap">
                                <table class="table datatable">
                                    <thead>
                                        <tr>
                                            <th width="500px">Sr.no</th>
                                            <th>police_id</th>
                                            <th>complaint_id</th>
                                            <th>Update</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($data as $item)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $item->police_fname }} {{ $item->police_mname }} {{ $item->police_lname }}</td>
                                            <td>{{ $item->cmp_id }}</td>                                      
                                            <td> <button type="button" class="btn btn-sm btn-primary"
                                                    data-bs-toggle="modal" data-bs-target="#editModel{{$item->police_complaint_id }}"><i
                                                        class="bx bxs-edit"></i> Edit</button></td>
                                          
                                        </tr>

                                        <div class="modal fade" id="editModel{{$item->police_complaint_id }}" tabindex="-1">
                                            <div class="modal-dialog modal-dialog-scrollable">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title">Edit Assigned Complaints</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form action="{{ route('AssignComplaint.update', $item->police_complaint_id   ) }}" method="post">
                                                            @csrf
                                                            @method('PUT')
                                                        
                                                            <div class="form-group">
                                                                <label for="police_id">Complaint Type</label>
                                                                <select class="form-select" name="police_id" >
                                                                    @foreach ($policedetail as $policedetailItem)
                                                                        <option value="{{ $policedetailItem->police_id   }}">{{ $policedetailItem->police_fname }} {{ $policedetailItem->police_mname }} {{ $policedetailItem->police_lname }}</option>
                                                                    @endforeach
                                                                    <!-- Add more options as needed -->
                                                                </select>
                                                            </div>
                                                        
                                                           
                                                        
                                                            <div class="form-group">
                                                                <label for="complaint_id">complaint no</label>
                                                                <select class="form-select" name="complaint_id" required>
                                                                    @foreach ($complaints as $complaintsItem)
                                                                        <option value="{{ $complaintsItem->complaint_id  }}">{{ $complaintsItem->cmp_id  }}</option>
                                                                    @endforeach
                                                                
                                                                    <!-- Add more options as needed -->
                                                                </select>
                                                            </div>
                                                        
                                                          
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                        <button type="submit" class="btn btn-primary" name="save_completed_fir"><i
                                                                class="bx bx-save"></i> Save changes</button>
                                                    </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <!-- End Table with stripped rows -->
                        </div>
                    </div>
                </div>
            </div>
        </section>

        {{-- model section --}}

        
       

        <div class="modal fade" id="trashModel" tabindex="-1">
            <div class="modal-dialog modal-dialog-scrollable">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Remove Assigned Complaint</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        Do You Want to remove this Assigned Complaint?
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-danger" name="remove_assigned_complaint">Yes</button>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
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
