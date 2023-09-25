@extends('layouts.AdminPanal')
@section('content')

<div class="u-content">
    <div class="u-body">

        <section class="es-form-area">
            <div class="card">
                <header class="card-header bg-gradient border-0 pt-5 pb-5 d-flex align-items-center">
                    <h2 class="text-white mb-0">
                        Student Details
                    </h2>
                </header>

                <div class="card-body table-responsive" id="institue">
                    <form action="" class="es-form es-add-form">
                        <a href="{{ route('students.add') }}" class="btn btn-primary"><i
                                class="fa-solid fa-plus"></i></a>
                        <a href="{{ route('student_edit',$student_info->id) }}" class="btn btn-primary"><i
                                class="fa-solid fa-pen"></i></a>
                        <a href="javascript:void(0)" onclick="printPage('mainContent')" class="btn btn-primary"><i
                                class="fa-solid fa-print"></i></a>

                        <div class="studentDetTable">
                            <div class="student_details" id="mainContent">

                                <img src="Logo _ Icon/preload2.png" class="copyright" alt="">

                                <div class="stuDetTop">
                                    <div>
                                        <h3>{{ $student_info->student_name_en }}</h3>
                                        <p>Address : {{ $student_info->present_address}}</p>
                                        <p>Student's Mobile :{{ $student_info->present_address}}</p>
                                        <p>Guardian Mobile : {{ $student_info->guardian_phone}}</p>
                                        <p>Email :{{ $student_info->email}}</p>
                                    </div>
                                    <div>
                                        <img src="{{asset($student_info->photo)}}" alt="">
                                    </div>
                                </div>

                                <div class="stuDetMid">
                                    <div class="table-responsive">
                                        <h2>Academic Information</h2>

                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th scope="col">Medium</th>
                                                    <th scope="col">
                                                        {{$all_class->getMediumName($student_info->StudentAdmit->class_name) == 000 ? 'Bangla Medium':'English Medium'}}
                                                    </th>
                                                    <th scope="col">Shift</th>
                                                    <th scope="col">{{$student_info->StudentAdmit->shift_name}}</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <th scope="row">Class</th>
                                                    <td>{{$all_class->getClassName($student_info->StudentAdmit->class_name)}}
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Roll</th>
                                                    <td>{{$student_info->StudentAdmit->roll_number}}</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>


                                    <div class="table-responsive">
                                        <h2>Personal Information</h2>

                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th scope="col">Student's Name</th>
                                                    <th scope="col">{{ $student_info->student_name_en }}</th>
                                                    <th scope="col">Student's ID</th>
                                                    <th scope="col">{{ $student_info->student_id }}</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <th scope="row">Date of Birth</th>
                                                    <td>{{ $student_info->birth_date }}</td>
                                                    <td>Gender</td>
                                                    <td>{{ $student_info->gender }}</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Religion</th>
                                                    <td>{{ $student_info->religion }}</td>
                                                    <td>Birth Reginstraion No/ Nid</td>
                                                    <td>{{ $student_info->student_identity }}</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Blood Group</th>
                                                    <td>{{ $student_info->blood_group }}</td>
                                                    <td>Nationality</td>
                                                    <td>{{ $student_info->nationality }}</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>

                                    <div class="table-responsive">
                                        <h2>Contact Information</h2>

                                        <table class="table table-bordered">
                                            <tbody>
                                                <tr>
                                                    <th scope="row">Present Address</th>
                                                    <td>{{ $student_info->present_address }}</td>
                                                    <td>Permanant Address</td>
                                                    <td>{{ $student_info->permanent_address }}</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Mobile</th>
                                                    <td>{{ $student_info->phone }}</td>
                                                    <td>Email</td>
                                                    <td>{{ $student_info->email }}</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>

                                    <div class="table-responsive">
                                        <h2>Parents Information</h2>

                                        <table class="table table-bordered">
                                            <tbody>
                                                <tr>
                                                    <th scope="row">Father's Name</th>
                                                    <td>{{ $student_info->father_name }}</td>
                                                    <td>Mother's Name</td>
                                                    <td>{{ $student_info->mother_name }}</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Father's Mobile</th>
                                                    <td>{{ $student_info->father_phone }}</td>
                                                    <td>Mother's Mobile</td>
                                                    <td>{{ $student_info->mother_phone }}</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Father's Profession</th>
                                                    <td>{{ $student_info->father_profession }}</td>
                                                    <td>Mother's Profession</td>
                                                    <td>{{ $student_info->mother_profession }}</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Father's NID</th>
                                                    <td>{{ $student_info->father_nid }}</td>
                                                    <td>Mother's NID</td>
                                                    <td>{{ $student_info->mother_nid }}</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Father's Designation</th>
                                                    <td>{{ $student_info->father_designation }}</td>
                                                    <td>Mother's Designation</td>
                                                    <td>{{ $student_info->mother_designation }}</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Father's Office Name & Address</th>
                                                    <td>{{ $student_info->father_office_name_address }}</td>
                                                    <td>Mother's Office Name & Address</td>
                                                    <td>{{ $student_info->mother_office_name_address }}</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Father's Office Contact No</th>
                                                    <td>{{ $student_info->father_office_contact_no }}</td>
                                                    <td>Mother's Office Contact No</td>
                                                    <td>{{ $student_info->mother_office_contact_no }}</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>

                                    <div class="table-responsive">
                                        <h2>Guardian / Receiver Information</h2>

                                        <table class="table table-bordered">
                                            <tbody>
                                                <tr>
                                                    <th scope="row">Name</th>
                                                    <td>{{ $student_info->guardian_name }}</td>
                                                    <td>Phone</td>
                                                    <td>{{ $student_info->guardian_phone }}</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Profession</th>
                                                    <td>{{ $student_info->guardian_profession }}</td>
                                                    <td>Designation</td>
                                                    <td>{{ $student_info->guardian_designation }}</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Office Name & Address</th>
                                                    <td>{{ $student_info->guardian_office_name_address }}</td>
                                                    <td>Office Contact No</td>
                                                    <td>{{ $student_info->guardian_office_no }}</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Relation with Student</th>
                                                    <td>{{ $student_info->guardian_relation }}</td>
                                                    <td>Status</td>
                                                    <td>{{ $student_info->status }}</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Created At</th>
                                                    <td>{{ $student_info->created_at }}</td>
                                                    <td>Modified At</td>
                                                    <td>{{ $student_info->updated_at }}</td>
                                                </tr>
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
</div>

<script>
    function printPage(area) {
        var printContent = document.getElementById(area).innerHTML;
        document.body.innerHTML = printContent;
        window.print();
    }

</script>

@endsection
