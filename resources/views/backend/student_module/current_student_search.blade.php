@extends('layouts.AdminPanal')
@section('content')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<div class="u-body">
    <section class="es-form-area">
        <div class="card">
            <header class="card-header bg-gradient border-0 pt-5 pb-5 d-flex align-items-center">
                <h2 class="text-white mb-0">Student Search</h2>
            </header>

            <div class="academic_info student_search">
                <h5>
                    <i class="fa-solid fa-circle-info"></i> Student Search (Current)
                </h5>

                <!-- <div class="container">

                    <div class="row mt-3 mb-4">

                        <div class="col-12 col-lg-4">
                            <label for="">Session <span class="text-danger">*</span></label>
                            <select name="" id="">
                                <option value="">2021</option>
                                <option value="">2020</option>
                                <option value="">2019</option>
                            </select>
                        </div> <br>

                        <div class="col-12 col-lg-4">
                            <label for="">Class Name <span class="text-danger">*</span></label>
                            <select name="" id="">
                                <option value="">Select Class</option>
                                <option value="" class="bold_text">Bangla Medium</option>
                                <option value="">Play</option>
                                <option value="">Nursary</option>
                                <option value="">KG</option>
                                <option value="">One</option>
                                <option value="">Two</option>
                                <option value="">Three</option>
                                <option value="">Four</option>
                                <option value="">Five</option>
                                <option value="">Six</option>
                                <option value="">Seven</option>
                                <option value="">Eight</option>
                                <option value="">Nine</option>
                                <option value="">Ten</option>
                                <option value="">Eleven</option>
                                <option value="">Tweleve</option>
                                <option value="" class="bold_text">English Medium</option>
                                <option value="">Play</option>
                                <option value="">Nursary</option>
                                <option value="">KG</option>
                                <option value="">One</option>
                                <option value="">Two</option>
                                <option value="">Three</option>
                                <option value="">Four</option>
                                <option value="">Five</option>
                                <option value="">Six</option>
                                <option value="">Seven</option>
                                <option value="">Eight</option>
                                <option value="">Nine</option>
                                <option value="">Ten</option>
                                <option value="">Eleven</option>
                                <option value="">Tweleve</option>
                            </select>
                        </div> <br>

                        <div class="col-12 col-lg-4">
                            <label for="">Shift <span class="text-danger">*</span></label>
                            <select name="" id="">
                                <option value="">Select Shift</option>
                                <option value="">Morning</option>
                                <option value="">Day</option>
                            </select>
                        </div> <br>

                    </div>

                    <div class="row mt-3 mb-4">

                        <div class="col-12 col-lg-4">
                            <label for="">Section Name <span class="text-danger">*</span></label>
                            <select name="" id="">
                                <option value="">Select Section</option>
                                <option value="">A</option>
                                <option value="">B</option>
                            </select>
                        </div> <br>

                        <div class="col-12 col-lg-4">
                            <label for="">Gender <span class="text-danger">*</span></label>
                            <select name="" id="">
                                <option value="">Select Gender</option>
                                <option value="">Male</option>
                                <option value="">Female</option>
                            </select>
                        </div> <br>

                        <div class="col-12 col-lg-4">
                            <label for="">Blood Group <span class="text-danger">*</span></label>
                            <select name="" id="">
                                <option value="">Select Blood Group</option>
                                <option value="">A+</option>
                                <option value="">A-</option>
                                <option value="">B+</option>
                                <option value="">B-</option>
                                <option value="">O+</option>
                                <option value="">O-</option>
                                <option value="">AB-</option>
                                <option value="">AB+</option>
                            </select>
                        </div> <br>

                    </div>


                    <div class="row mt-3 mb-4">

                        <div class="col-12 col-lg-4">
                            <label for="">Guardian Phone </label>
                            <input type="text" name="" id="">
                        </div> <br>

                        <div class="col-12 col-lg-4">
                            <label for="">Student ID </label>
                            <input type="text" name="" id="">
                        </div> <br>

                        <div class="col-12 col-lg-4">
                            <label for="">Status </label>
                            <select name="" id="">
                                <option value="">Active</option>
                                <option value="">Inactive</option>
                                <option value="">Pending</option>
                                <option value="">Transfared</option>
                                <option value="">Passed</option>
                            </select>
                        </div> <br>

                    </div>

                </div> -->

            </div>


            <!-- <p class="text-center">
                <a href="#" class="btn btn-primary px-5">Search</a>
            </p> -->

            <div class="search_result table-responsive">
                <table id="SubjectTable" class="table table-bordered mt-3 text-center current_student_table">
                    <thead class="table-bordered">
                        <tr>
                            <th scope="col">SL</th>
                            <th scope="col">Session</th>
                            <th scope="col">Class </th>
                            <th scope="col">Shift</th>
                            <th scope="col">Section</th>
                            <th scope="col">Name</th>
                            <th scope="col">Student ID</th>
                            <th scope="col">Roll No.</th>
                            <th scope="col">Device Serial / MAC</th>
                            <th scope="col">Finger ID</th>
                            <th scope="col">RFID Card No</th>
                            <th scope="col">Guardian's Phone</th>
                            <th scope="col">Date of Birth</th>
                            <th scope="col">Status</th>
                            <th scope="col">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row"></th>
                            <td>
                                <select name="" id="">
                                    <option value="">All &nbsp;&nbsp;&nbsp;</option>
                                    <option value="">Yes</option>
                                    <option value="">No</option>
                                </select>
                            </td>
                            <td>
                                <select name="" id="">
                                    <option value="">Select Class &nbsp;&nbsp;&nbsp;</option>
                                    <option value="" class="bold_text">Bangla Medium</option>
                                    <option value="">Play</option>
                                    <option value="">Nursary</option>
                                    <option value="">KG</option>
                                    <option value="">One</option>
                                    <option value="">Two</option>
                                    <option value="">Three</option>
                                    <option value="">Four</option>
                                    <option value="">Five</option>
                                    <option value="">Six</option>
                                    <option value="">Seven</option>
                                    <option value="">Eight</option>
                                    <option value="">Nine</option>
                                    <option value="">Ten</option>
                                    <option value="">Eleven</option>
                                    <option value="">Tweleve</option>
                                    <option value="" class="bold_text">English Medium</option>
                                    <option value="">Play</option>
                                    <option value="">Nursary</option>
                                    <option value="">KG</option>
                                    <option value="">One</option>
                                    <option value="">Two</option>
                                    <option value="">Three</option>
                                    <option value="">Four</option>
                                    <option value="">Five</option>
                                    <option value="">Six</option>
                                    <option value="">Seven</option>
                                    <option value="">Eight</option>
                                    <option value="">Nine</option>
                                    <option value="">Ten</option>
                                    <option value="">Eleven</option>
                                    <option value="">Tweleve</option>
                                </select>
                            </td>
                            <td>
                                <select name="" id="">
                                    <option value="">All &nbsp;&nbsp;&nbsp;</option>
                                    <option value="">Morning</option>
                                    <option value="">Night</option>
                                </select>
                            </td>
                            <td>
                                <select name="" id="">
                                    <option value="">Select Section</option>
                                </select>
                            </td>
                            <td><input type="text" name="" id=""></td>
                            <td><input type="text" name="" id=""></td>
                            <td><input type="text" name="" id=""></td>
                            <td><input type="text" name="" id=""></td>
                            <td><input type="text" name="" id=""></td>
                            <td><input type="text" name="" id=""></td>
                            <td><input type="text" name="" id=""></td>
                            <td><input type="text" name="" id=""></td>

                            <td>
                                <select name="" id="">
                                    <option value="">All</option>
                                    <option value="">Yes</option>
                                    <option value="">No</option>
                                </select>
                            </td>
                            <td></td>
                        </tr>

                             @foreach($student_info as $key=>$item)
                                <tr>
                                    <td>{{$key+=1}}</td>
                                    <td>{{ $item->StudentAdmit->session_name }}</td>
                                    <td>{{ $all_class->getClassName($item->StudentAdmit->class_name) }}</td>
                                    <td>{{ $item->StudentAdmit->shift_name }}</td>
                                    <td>{{ $item->StudentAdmit->section_name }}</td>
                                    <td>{{ $item->student_name_en }}</td>
                                    <td>{{ $item->StudentAdmit->student_id }}</td>
                                    <td>{{ $item->StudentAdmit->roll_number }}</td>
                                    <td>{{ $item->StudentAdmit->device_serial }}</td>
                                    <td>(not set)</td>
                                    <td>(not set)</td>
                                    <td>{{ $item->guardian_phone }}</td>
                                    <td>{{ $item->birth_date }}</td>
                                    <td>{{ $item->status }}</td>
                                    <td class="link_table">
                                        <a href="{{ route('student_view',$item->id) }}"><i class="fa-solid fa-eye"></i></a>&nbsp
                                        <a href="{{ route('student_edit',$item->id) }}"><i class="fa-solid fa-pencil"></i></a>&nbsp
                                        <a id="delete" href="{{ route('students.delete',$item->id) }}"><i class="fa-solid fa-trash"></i></a>&nbsp
                                    </td>
                                </tr>
                            @endforeach

                    </tbody>
                </table>
            </div>


        </div>
    </section>
    @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif
</div>
@endsection

@section('fotter_js')
<script>
    $(document).ready(function () {
        $('#SubjectTable').DataTable({
            columnDefs: [
                {
                    targets: [0],
                    orderData: [0, 1],
                },
                {
                    targets: [1],
                    orderData: [1, 0],
                },
                {
                    targets: [4],
                    orderData: [4, 0],
                },
                {
                    targets: [14],
                    orderData: [14, 0],
                },
            ],
        });
    });

</script>
@endsection

