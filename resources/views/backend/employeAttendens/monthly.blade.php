@extends('layouts.AdminPanal')
@section('content')
<div class="u-body">
    <section class="es-form-area">
        <div class="card">
            <header class="card-header bg-gradient border-0 pt-5 pb-5 d-flex align-items-center">
                <h2 class="text-white mb-0">Employee Attendence Summary Monthly</h2>


            </header>
            <div class="container">

                <div class="d-flex justify-content-between mt-5">

                    <a href="#" class="print_btn"><i class="fa-solid fa-print"></i> Print</a>
                    <a href="#" class="print_btn"><i class="fa-solid fa-download"></i> Download</a>
                </div>
            </div>

            <div class="attendence_summary">
                <a href="{{route('monthlyDetails')}}" class="btn btn-danger">Back</a>
                <div class="attendence_summary_top text-center">
                    <h1>Learning Campus (Main Branch)</h1>
                    <a href="#">www.LearningCampus.com</a>
                    <p>Mirpur-3, Dhaka</p>
                    <h3>Monthly Attendance Summary ({{$month}} {{$year}})</h3>
                </div>

                <div class="attendence_summary_mid table-responsive">
                    <!---- student table  ----->
                    <table id="monthlyDetailsTable" class="table table-bordered mt-3 text-center">
                        <thead class="table-bordered">
                            <tr>
                                <th scope="col">SL</th>
                                <th scope="col">ID</th>
                                <th scope="col">Name</th>
                                <th scope="col">Designation</th>
                                <th scope="col">Weekend</th>
                                <th scope="col"><span style="color: red;">Holidays</span></th>
                                <th scope="col"><span style="color: green;">Leave</span></th>
                                <th scope="col"><span style="color: green;">Attend</span></th>
                                <th scope="col"><span style="color: red;">Absent</span></th>
                                <th scope="col"><span style="background-color: green;color: white;padding: 8px 14px;font-weight: 600;">G</span></th>
                                <th scope="col"><span style="background-color: yellow;color: white;padding: 8px 14px;font-weight: 600;">Y</span></th>
                                <th scope="col"><span style="background-color: red;color: white;padding: 8px 14px;font-weight: 600;">R</span></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($employees as $employee)
                            <tr>
                                <td>{{$employee->id}}</td>
                                <td>{{$employee->emp_id}}</td>
                                <td>{{$employee->employee_name}}
                                </td>
                                <td>{{$employee->designation}}</td>
                                <td>3</td>
                                <td>{{$employee->holiday_count}}</td>
                                <td>{{$employee->leave_count}}</td>
                                <td>{{$employee->attend_count}}</td>
                                <td>{{$employee->absent_count}}</td>
                                <td>{{$employee->green_count}}</td>
                                <td>{{$employee->yellow_count}}</td>
                                <td>{{$employee->red_count}}</td>
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

@endsection

@section('fotter_js')
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->
<script>
    $(document).ready(function() {
        $('#monthlyDetailsTable').DataTable({
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