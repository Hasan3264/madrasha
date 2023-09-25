@extends('layouts.AdminPanal')
@section('content')
<div class="u-body">
    <section class="es-form-area">
        <div class="card">
            <header class="card-header bg-gradient border-0 pt-5 pb-5 d-flex align-items-center">
                <h2 class="text-white mb-0">Employee Attendence Details</h2>
            </header>

            <div class="attendence_summary">
                <a href="{{route('details')}}" class="btn btn-danger">Back</a>
                <div class="attendence_summary_top text-center">
                    <h1>Learning Campus (Main Branch)</h1>
                    <a href="#">www.LearningCampus.com</a>
                    <p>Mirpur-3, Dhaka</p>
                    <h3>Attendance Details for the Month of {{$month}} {{$year}}</h3>
                    <p>ID : {{$emp_info->emp_id}}, {{$emp_personal_info->name}} ({{$emp_info->designation}})</p>
                    <h3>
                        <span class="text-primary">Weekend : 3</span>,
                        <span class="text-info">Holidays : {{$holiday}}</span>,
                        <span class="text-danger">Leave : {{$leave}}</span>,
                        <span class="text-primary">Attend : {{$attend}}</span>,
                        <span class="text-secondary">Absent : {{$absent}}</span>,
                        <span class="text-primary">Green : {{$green_zone}}</span>,
                        <span class="text-warning"> Orange : {{$yellow_zone}}</span>,
                        <span class="text-danger"> Red : {{$red_zone}}</span>
                    </h3>
                </div>

                <div class="attendence_summary_mid table-responsive">
                    <div class="d-flex justify-content-between">
                        <a href="#" class="print_btn"><i class="fa-solid fa-print"></i> Print</a>
                        <a href="#" class="print_btn"><i class="fa-solid fa-download"></i> Download</a>
                    </div><br>
                    <!---- student table  ----->
                    <table class="table table-bordered mt-3 text-center table-striped" id="attendanceDetailsTable">
                        <thead class="table-bordered">
                            <tr>
                                <th scope="col">SL</th>
                                <th scope="col">Date</th>
                                <th scope="col"><span style="color: green;">Attend</span> / <span style="color: red;">Absent</span></th>
                                <th scope="col"><span style="color: green;">IN</span></th>
                                <th scope="col"><span style="color: red;">OUT</span></th>
                                <th scope="col">Middle Punches</th>
                                <th scope="col"><span style="background-color: green;color: white;padding: 8px 14px;font-weight: 600;">G</span>
                                </th>
                                <th scope="col"><span style="background-color: yellow;color: white;padding: 8px 14px;font-weight: 600;">Y</span>
                                </th>
                                <th scope="col"><span style="background-color: red;color: white;padding: 8px 14px;font-weight: 600;">R</span>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($emp_attendance_details as $details)
                            <tr>
                                <td>{{$details->id}}</td>
                                <td>{{$details->date}}</td>
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
        $('#attendanceDetailsTable').DataTable({
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