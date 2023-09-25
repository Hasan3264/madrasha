@extends('layouts.AdminPanal')
@section('content')
<div class="u-body">
    <section class="es-form-area">
        <div class="card">
            <header class="card-header bg-gradient border-0 pt-5 pb-5 d-flex align-items-center">
                <h2 class="text-white mb-0">Employee Attendence
                    Summary Daily</h2>
            </header>
            <div class="container">
                <div class="d-flex justify-content-between mt-5">
                    <a href="#" class="print_btn"><i class="fa-solid fa-print"></i> Print</a>
                    <a href="#" class="print_btn"><i class="fa-solid fa-download"></i> Download</a>
                </div>
            </div>
            <div class="attendence_summary">

                <div class="attendence_summary_top text-center">
                    <h1>Learning Campus (Main Branch)</h1>
                    <a href="#">www.LearningCampus.com</a>
                    <p>Mirpur-3, Dhaka</p>
                    <h3>Daily Attendance Summary ({{$month}} {{$day}} {{$year}})</h3>
                </div>

                <div class="attendence_summary_mid table-responsive">
                    <!---- student table  ----->
                    <table class="table table-bordered mt-3 text-center" id="dailyDetailsTable">
                        <thead class="table-bordered">
                            <tr>
                                <th scope="col">SL</th>
                                <th scope="col">ID</th>
                                <th scope="col">Name</th>
                                <th scope="col">Designation</th>
                                <th scope="col"><span style="color: green;">Attend</span>
                                    / <span style="color: red;">Absent</span></th>
                                <th scope="col"><span style="color: green;">IN</span></th>
                                <th scope="col"><span style="color: red;">OUT</span></th>
                                <th scope="col">Middle Punches</th>
                                <th scope="col"><span style="background-color: green;color: white;padding: 8px 14px;font-weight: 600;">G</span></th>
                                <th scope="col"><span style="background-color: yellow;color: white;padding: 8px 14px;font-weight: 600;">Y</span></th>
                                <th scope="col"><span style="background-color: red;color: white;padding: 8px 14px;font-weight: 600;">R</span></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($attendance_details as $details)
                            <tr>
                                <td>{{$details->id}}</td>
                                <td>{{$details->emp_id}}</td>
                                <td>{{$details->employee_name}}</td>
                                <td>{{$details->designation_name}}</td>
                                @if($details->attend == "attend")
                                <td style="color: green; font-weight: 900;">Attend</td>
                                @endif
                                @if($details->attend == "absent")
                                <td style="color: red; font-weight: 900;">Absent</td>
                                @endif
                                <td>{{$details->in_time}}</td>
                                <td>{{$details->out_time}}</td>
                                <td></td>
                                @if($details->zone == "Green")
                                <td style="color: green; font-weight: 900;">✔</td>
                                <td></td>
                                <td></td>
                                @endif
                                @if($details->zone == "Yellow")
                                <td></td>
                                <td style="color: yellow; font-weight: 900;">✔</td>
                                <td></td>
                                @endif
                                @if($details->zone == "Red")
                                <td></td>
                                <td></td>
                                <td style="color: red; font-weight: 900;">✔</td>
                                @endif
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <!---- /student table ----->
                </div>
            </div>

        </div>
    </section>

</div>
@endsection

@section('fotter_js')
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->
<script>
    $(document).ready(function() {
        $('#dailyDetailsTable').DataTable({
            //       columnDefs: [
            //     {
            //         targets: [0],
            //         orderData: [0, 1],
            //     },
            //     {
            //         targets: [1],
            //         orderData: [1, 0],
            //     },
            //     {
            //         targets: [4],
            //         orderData: [4, 0],
            //     },
            // ],
        });
    });
</script>
@endsection