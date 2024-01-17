<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
        header {
            width: 100%;
            position: fixed;
            top: -50px;
            left: 15px;
            right: 0;
            display: block;
            background-color: #fff;
            color: black;
            font-size: 34px;
            font-weight: bolder;
            border-radius: 5px;
            height: 100px;
            text-align: center;
            line-height: 35px;
            border-bottom:2px solid #000 
         
        }
        .header-station {
            text-align: center;

            background-color: #fff;
            color: black;
            font-size: 24px;
          
         
        }
    </style>
</head>

<body>

    <header>

        Rajsthan State
    </header>
        <div class="header header-station">
        Jaipur Police Station
    </div>
    
    <div class="container-fluid mt-5">
        <table class=" table-bordered mb-5">
            <thead>
                <tr>
                    <th>Sr.no</th>
                    <th>Complaint No</th>
                    <th>Complaint Type</th>
                    <th>Complaint Subject</th>
                    <th>Complaint Against</th>
                    <th>Complaint Location</th>
                    <th>Incident Date</th>
                    <th>Status</th>
                    <th>Complaint/FIR</th>
                    <th>User</th>
                    <th>created Date</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->cmp_id }}</td>
                        <td>{{ $item->complaint_type_name }}</td>
                        <td>{{ $item->complaint_subject }}</td>
                        <td>{{ $item->complaint_against }}</td>
                        <td>{{ $item->complaint_location }}</td>
                        <td>{{ $item->incident_date }}</td>
                        <td>{{ $item->status_name }}</td>
                        <td>{{ $item->complaint_fir_name }}</td>
                        <td>{{ $item->user_fname }} {{ $item->user_mname }} {{ $item->user_lname }}</td>
                        <td>{{ $item->created_at }}</td>

                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>


</body>

</html>
