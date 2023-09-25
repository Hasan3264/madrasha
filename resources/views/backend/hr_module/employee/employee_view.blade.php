@extends('layouts.AdminPanal')
@section('content')
<div class="u-body">

    <section class="es-form-area">
        <div class="card">
            <header class="card-header bg-gradient border-0 pt-5 pb-5 d-flex align-items-center">
                <h2 class="text-white mb-0">
                    Employee Details
                </h2>
            </header>

            <div class="card-body table-responsive" id="institue">
                <form action="" class="es-form es-add-form">
                    <a href="{{ route('add.employee') }}" class="btn btn-primary"><i class="fa-solid fa-plus"></i></a>
                    <a href="{{ route('edit.employee',$pro_infos->id) }}" class="btn btn-primary"><i class="fa-solid fa-pen"></i></a>
                    <a href="javascript:void(0)" onclick="printPage('mainContent')" class="btn btn-primary"><i
                        class="fa-solid fa-print"></i></a>

                    <div class="studentDetTable">

                        <div class="student_details" id="mainContent">

                            <img src="Logo _ Icon/preload2.png" class="copyright_em_view" alt="">

                            <div class="stuDetTop">
                                <div>
                                    <h3>{{$personal_infos->name}}</h3>
                                    <p>Address : {{$personal_infos->present_address}} </p>
                                    <p> Mobile : {{$personal_infos->mobile}}</p>
                                </div>
                                <div>
                                    <img src="{{Asset($personal_infos->photo)}}" alt="">
                                </div>
                            </div>

                            <div class="stuDetMid">
                                <div class="table-responsive">
                                    <h2>Professional Information</h2>

                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th scope="col">Branch</th>
                                                <th scope="col">Learning Campus (Main Branch)</th>
                                                <th scope="col">Employee Type</th>
                                                <th scope="col">{{$emptype_details->name}}</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">Designation</th>
                                                <td>{{$designation_details->title}}</td>
                                                <td>Working Shift</td>
                                                <td>{{$ws_details->name}}</td>
                                            </tr>
                                            <tr>
                                                <td>Joining Date</td>
                                                <td>{{$pro_infos->joining_date}}</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Bank Account</th>
                                                <td>{{$pro_infos->bank_acc_no}}</td>
                                                <td>Srl. No </td>
                                                <td>{{$pro_infos->id}}</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Prev. Institute </th>
                                                <td>{{$pro_infos->prev_inst}}</td>
                                                <td>Pre. Designation</td>
                                                <td>{{$pro_infos->prev_des}}</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>

                                <div class="table-responsive">
                                    <h2>Contact Information</h2>

                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th scope="col">Mobile</th>
                                                <th scope="col">{{$personal_infos->mobile}}</th>
                                                <th scope="col">Email</th>
                                                <th scope="col">{{$personal_infos->email}}</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">Present Address</th>
                                                <td>{{$personal_infos->present_address}}</td>
                                                <td>Permanant Address</td>
                                                <td>{{$personal_infos->permanent_address}}</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">FB URL</th>
                                                <td>{{$personal_infos->fb_link}}</td>

                                            </tr>

                                        </tbody>
                                    </table>
                                </div>

                                <div class="table-responsive">
                                    <h2>Personal Information</h2>

                                    <table class="table table-bordered">
                                        <tbody>
                                            <tr>
                                                <th scope="row">Name</th>
                                                <td>{{$personal_infos->name}}</td>
                                                <td>ID</td>
                                                <td>{{$personal_infos->emp_id}}</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Father's Name</th>
                                                <td>{{$personal_infos->father_name}}</td>
                                                <td>Mother's Name</td>
                                                <td>{{$personal_infos->mother_name}}</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Date of Birth</th>
                                                <td>{{$personal_infos->dob}}</td>
                                                <td>Blood Group</td>
                                                <td>{{$personal_infos->blood_group}}</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Maritial Status</th>
                                                <td>{{$personal_infos->marital_status}}</td>
                                                <td>Religion</td>
                                                <td>{{$personal_infos->religion}}</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Spouse Name</th>
                                                <td>Hafsa</td>
                                                <td>No of Child</td>
                                                <td>4</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">National ID</th>
                                                <td>{{$personal_infos->nid}}</td>

                                            </tr>
                                        </tbody>
                                    </table>
                                </div>


                                <div class="table-responsive">
                                    <h2>Educational Qualification</h2>

                                    <table class="table table-bordered">
                                        <tbody>
                                            <tr>
                                                <th scope="row">Sl. No.</th>
                                                <td>Institute Name</td>
                                                <td>Name of The Degree</td>
                                                <td>Country</td>
                                            </tr>
                                            @foreach($edu_infos as $edu_info)
                                            <tr>
                                                <th scope="row">1</th>
                                                <td>{{$edu_info->institute_name}}</td>
                                                <td>{{$edu_info->degree_name}}</td>
                                                <td>{{$edu_info->country}}</td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>

                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
</div>
<script>
    function printPage(area) {
        var printContent = document.getElementById(area).innerHTML;
        document.body.innerHTML = printContent;
        window.print();
    }

</script>
@endsection