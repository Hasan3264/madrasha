
@extends('layouts.AdminPanal')
@section('content')
<div class="u-body">
    <section class="es-form-area">
        <div class="card">
            <header class="card-header bg-gradient border-0 pt-5 pb-5 d-flex align-items-center">
                <h2 class="text-white mb-0">Generate Salary Sheet</h2>
            </header>

            <div class="academic_info student_search">


                <div class="container">

                    <div class="row mt-3 mb-4">

                        <div class="col-12 col-md-6 col-lg-4">
                            <label for=""> Type <span class="text-danger">*</span></label>
                            <select name="" id="">
                                <option value="">All</option>
                                <option value="">Casual</option>
                                <option value="">Contractual</option>
                                <option value="">Full-time</option>
                                <option value="">Half-time</option>
                                <option value="">Part-time</option>
                            </select>
                        </div><br><br>

                        <div class="col-12 col-md-6 col-lg-4">
                            <label for=""></label>
                            <select name="" id="">
                                <option value="">January</option>
                                <option value="">February</option>
                                <option value="">March</option>
                                <option value="">Aplril</option>
                                <option value="">May</option>
                                <option value="">June</option>
                                <option value="">July</option>
                                <option value="">August</option>
                                <option value="">September</option>
                                <option value="">October</option>
                                <option value="">November</option>
                                <option value="">December</option>
                            </select>
                        </div><br><br>

                        <div class="col-12 col-md-6 col-lg-4">
                            <label for=""></label>
                            <select name="" id="">
                                <option value="">2022</option>
                                <option value="">2021</option>
                                <option value="">2020</option>
                            </select>
                        </div><br><br>

                    </div>

                    <div class="row mt-3 mb-4">

                        <div class="col-12 col-md-6 col-lg-4">
                            <p class="text-center">
                                <a href="#" class="btn btn-primary px-5">Submit</a>
                            </p>
                        </div><br><br>
                    </div>

                    <div class="container">
                        <div class="d-flex justify-content-between mt-5 mb-3">
                            <a href="#" class="print_btn"><i class="fa-solid fa-print"></i> Print</a>
                            <a href="#" class="print_btn"><i class="fa-solid fa-download"></i> Download</a>
                        </div>
                    </div>

                    <div class="attendence_summary">
                        <div class="attendence_summary_top text-center">
                            <h1>Learning Campus (Main Branch)</h1>
                            <a href="#">www.LearningCampus.com</a>
                            <p>Mirpur-3, Dhaka</p>
                            <h3>Salary Report for the month of April 2022</h3>
                        </div>

                        <div class="attendence_summary_mid table-responsive">

                            <!---- student table  ----->
                            <table class="table table-bordered mt-3 text-center table-striped">
                                <thead class="table-bordered">
                                    <!-- <tr>
                        <th scope="col">SL</th>
                        <th scope="col">ID</th>
                        <th scope="col">Name</th>
                        <th scope="col">Designation</th>
                        <th scope="col"><span style="color: brown;">Weekend</span></th>
                        <th scope="col"><span style="color: pink;">Holidays</span></th>
                        <th scope="col"><span style="color: green;">Attend</span></th>
                        <th scope="col"><span style="color: red;">Absent</span></th>
                        <th scope="col"><span style="color: green;">Leave</span></th>
                        <th scope="col">
                            <span style="color: green;">Addition</span>
                        </th>
                        <th scope="col">
                            <span style="color: green;">Addition</span>
                        </th>
                        <th scope="col">Total</th>
                    </tr>
                  -->

                                    <tr role="row">
                                        <th rowspan="6" style="font-weight: bold;text-align:center;width:1%">Sl.</th>
                                        <th rowspan="6" style="font-weight: bold;text-align: center">ID</th>
                                        <th rowspan="6" style="font-weight: bold;text-align: left;">Name</th>
                                        <th rowspan="6" style="font-weight: bold; text-align: center;">Designation</th>
                                        <th rowspan="6" style="text-align: center;font-weight: bold;color:#c88a0a;">Weekend</th>
                                        <th rowspan="6" style="text-align: center;font-weight: bold;color:#ff6b7f;">Holidays</th>
                                        <th rowspan="6" style="font-weight: bold; text-align: center; color:#299A0B;">Attend</th>
                                        <th rowspan="6" style="font-weight: bold; text-align: center; color:#db4a39;">Absent</th>
                                        <th rowspan="6" style="font-weight: bold;text-align: center;border-width: 1px 1px 1px;color:darkgreen;">Leave</th>
                                        <th rowspan="6" style="font-weight: bold;text-align: right;">Basic</th>
                                        <th colspan="5" style="font-weight: bold;text-align: center;border-width: 1px 1px 1px;color:#299A0B">Addition </th>
                                        <th colspan="2" style="font-weight: bold;text-align: center;border-width: 1px 1px 1px;color:#db4a39"> Deduction </th>
                                        <th rowspan="8" style="font-weight: bold;text-align: right">Total</th>
                                    </tr>
                                    <tr>
                                        <th style="text-align:right;width:7%;font-weight: bold">House Rent</th>
                                        <th style="text-align:right;width:7%;font-weight: bold">Medical Allowance</th>
                                        <th style="text-align:right;width:7%;font-weight: bold">Transport Allowance</th>
                                        <th style="text-align:right;width:7%;font-weight: bold">Salary</th>
                                        <th style="text-align:right;width:7%;font-weight: bold">22 august bonus</th>
                                        <th style="text-align:right;width:7%;font-weight: bold">Absent </th>
                                        <th style="text-align:right;width:7%;font-weight: bold">Provident Fund</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <tr>
                                        <td>1</td>
                                        <td>20200001</td>
                                        <td>
                                            <a href="#">Mahim</a>
                                        </td>
                                        <td> Bangla Lecturer </td>
                                        <td style="color:#c88a0a;"> 3 </td>
                                        <td style="color:#ff6b7f;"> 0 </td>
                                        <td style="color:#299A0B;"> 0 </td>
                                        <td style="color: red;"> 18 </td>
                                        <td style="color:#299A0B;">0</td>
                                        <td>16,000.00</td>
                                        <td>8,000.00</td>
                                        <td>1,000.00</td>
                                        <td>1,000.00</td>
                                        <td>0.00</td>
                                        <td>0.00</td>
                                        <td>0.00</td>
                                        <td>0.00</td>
                                        <td>26,000.00</td>
                                    </tr>

                                    <tr>
                                        <td>1</td>
                                        <td>20200001</td>
                                        <td>
                                            <a href="#">Mahim</a>
                                        </td>
                                        <td> Bangla Lecturer </td>
                                        <td style="color:#c88a0a;"> 3 </td>
                                        <td style="color:#ff6b7f;"> 0 </td>
                                        <td style="color:#299A0B;"> 0 </td>
                                        <td style="color: red;"> 18 </td>
                                        <td style="color:#299A0B;">0</td>
                                        <td>16,000.00</td>
                                        <td>8,000.00</td>
                                        <td>1,000.00</td>
                                        <td>1,000.00</td>
                                        <td>0.00</td>
                                        <td>0.00</td>
                                        <td>0.00</td>
                                        <td>0.00</td>
                                        <td>26,000.00</td>
                                    </tr>

                                    <tr>
                                        <td>1</td>
                                        <td>20200001</td>
                                        <td>
                                            <a href="#">Mahim</a>
                                        </td>
                                        <td> Bangla Lecturer </td>
                                        <td style="color:#c88a0a;"> 3 </td>
                                        <td style="color:#ff6b7f;"> 0 </td>
                                        <td style="color:#299A0B;"> 0 </td>
                                        <td style="color: red;"> 18 </td>
                                        <td style="color:#299A0B;">0</td>
                                        <td>16,000.00</td>
                                        <td>8,000.00</td>
                                        <td>1,000.00</td>
                                        <td>1,000.00</td>
                                        <td>0.00</td>
                                        <td>0.00</td>
                                        <td>0.00</td>
                                        <td>0.00</td>
                                        <td>26,000.00</td>
                                    </tr>


                                </tbody>
                            </table>
                            <!---- /student table ----->
                        </div>
                    </div>

                </div>

            </div>

        </div>
    </section>

</div>
@endsection