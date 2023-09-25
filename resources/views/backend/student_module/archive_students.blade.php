
@extends('layouts.AdminPanal')
@section('content')
<div class="u-body">
    <section class="es-form-area">
        <div class="card">
            <header class="card-header bg-gradient border-0 pt-5 pb-5 d-flex align-items-center">
                <h2 class="text-white mb-0">
                    Archive Student
                </h2>
            </header>

            <div class="card-body table-responsive" id="institue">
                <form action="" class="es-form es-add-form">

                    <a href="{{ route('archive_students_add') }}" class="btn btn-primary"><i class="fa-solid fa-plus"></i></a>
                    <div class="studetn_count">
                        <h3>
                            <p><i class="fa-solid fa-person"></i> Total Male :{{$male}}

                        </p>
                            <p><i class="fa-solid fa-person-dress"></i> Total Female : {{$female}}</p>
                        </h3>
                        <p class="text-right">Showing {{ count($student_info) }} item</p>
                    </div>
                    <!---- student table  ----->
                    <div class="table-responsive">
                        <table id="SubjectTable" class="table table-bordered mt-3 text-center current_student_table">
                            <thead class="table-bordered">
                                <tr>
                                    <th scope="col">SL</th>
                                    <th scope="col">Session</th>
                                    <th scope="col">Class</th>
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

                            @foreach($student_info as $key=>$item)
                                <tr>
                                    <td>{{$key++}}</td>
                                    <td>{{ $item->StudentAdmit->session_name }}</td>
                                    <td>{{ $all_class->getClassName($item->StudentAdmit->class_name) }}</td>
                                    <td>{{ $item->StudentAdmit->shift_name }}</td>
                                    <td>{{ $item->StudentAdmit->section_name }}</td>
                                    <td>
                                        <img src="{{ asset($item->photo) }}" class="curentStuImage" alt="">
                                        <br><a href="#"> </a>
                                    </td>
                                    <td>{{ $item->StudentAdmit->student_id }}</td>
                                    <td>{{ $item->StudentAdmit->roll_number }}</td>
                                    <td>{{ $item->StudentAdmit->device_serial }}</td>
                                    <td>(not set)</td>
                                    <td>(not set)</td>
                                    <td>{{ $item->guardian_phone }}</td>
                                    <td>{{ $item->birth_date }}</td>
                                    <td>{{ $item->status }}</td>
                                    <td class="link_table">
                                        <a href="{{ route('archive_students_view',$item->id) }}"><i class="fa-solid fa-eye"></i></a>&nbsp
                                        <a href="{{ route('archive_students_edit',$item->id) }}"><i class="fa-solid fa-pencil"></i></a>&nbsp
                                        <a id="delete" href="{{ route('archive_students_delete',$item->id) }}"><i class="fa-solid fa-trash"></i></a>&nbsp
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    <!---- /student table ----->
                </form>
            </div>

        </div>
    </section>

</div>
@endsection

@section('fotter_js')
<script>
    $(document).ready(function () {
        $('#SubjectTable').DataTable({
            columnDefs: [{
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
            ],
        });
    });

</script>
@endsection
