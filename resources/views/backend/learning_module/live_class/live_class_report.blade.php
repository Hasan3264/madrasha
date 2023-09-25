@extends('layouts.AdminPanal')
@section('content')

    <div class="u-content">
    <div class="u-body">
        <section class="es-form-area">
            <div class="card">
                <header class="card-header bg-gradient border-0 pt-5 pb-5 d-flex align-items-center">
                    <h2 class="text-white mb-0">Live Class Report</h2>
                </header>

                <div class="container mt-5 mb-4">
                    <div class="d-flex justify-content-between">
                        <a href="#" class="print_btn"><i class="fa-solid fa-print"></i>  Print</a>
                        <a href="#" class="print_btn"><i class="fa-solid fa-download"></i>  Download</a>
                    </div>
                </div>


<div class="attendence_summary">
    <div class="live_class_top text-center">
        <h1>Learning Campus (Main Branch)</h1>
        <a href="#">www.LearningCampus.com</a>
        <p>Mirpur-3, Dhaka</p>
        <p>Student's Live Class Report of Session - 2021</p>
        <p>Class : Play, Shift : Morning, Section : A</p>
        <p>Class Topic : Math Test Class, Class Teacher : Babar</p>
        <p>Date : 24, January 2022, Time : 04:00:00 PM</p>
        <p>Class Duration : 40 Minutes, Total Attend : 0</p>
    </div>

    <div class="attendence_summary_mid table-responsive">

        <!---- student table  ----->
           <table class="table table-bordered mt-3 text-center">
            <thead class="table-bordered" style="background-color: rgb(218, 218, 218);">
                <tr>
                    <th scope="col">Srl.</th>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Roll</th>
                    <th scope="col">Gender</th>
                    <th scope="col">Blood Group</th>
                    <th scope="col">Date of Birth</th>
                    <th scope="col">Religion</th>
                </tr>
            </thead>
            <tbody>

                <tr>
                    <td>1</td>
                    <td>111322</td>
                    <td>Kamal</td>
                    <td>12</td>
                    <td>Male</td>
                    <td>A+</td>
                    <td>15-03-2000</td>
                    <td>Islam</td>
                </tr>


            </tbody>
        </table>
    <!---- /student table ----->
    </div>
</div>


</div>
</section>

</div>
</div>

@endsection
