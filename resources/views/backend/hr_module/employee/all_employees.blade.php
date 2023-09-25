@extends('layouts.AdminPanal')
@section('content')
<div class="u-body">

    <section class="es-form-area">
        <div class="card">
            <header class="card-header bg-gradient border-0 pt-5 pb-5 d-flex align-items-center">
                <h2 class="text-white mb-0">
                    Our Employees
                </h2>
            </header>

            <div class="card-body table-responsive" id="institue">
                <form action="" class="es-form es-add-form">

                    <a href="{{ route('add.employee') }}" class="btn btn-primary"><i class="fa-solid fa-plus"></i></a>
                    <div class="studetn_count">
                        <h3>
                            <p><i class="fa-solid fa-person"></i> Total Male : {{$male_count}}</p>
                            <p><i class="fa-solid fa-person-dress"></i> Total Female : {{$female_count}}</p>
                        </h3>
                        <p class="text-right">Showing 1-1 of 1 item</p>
                    </div>
                    <!---- student table  ----->
                    <table id="employeeTable" class="table table-bordered mt-3 text-center current_student_table">
                        <thead class="table-bordered">
                            <tr>
                                <th scope="col">SL</th>
                                <th scope="col">Rank</th>
                                <th scope="col">Employee Type</th>
                                <th scope="col">Designation</th>
                                <th scope="col">Working Shift</th>
                                <th scope="col">Name</th>
                                <th scope="col">Employee ID</th>
                                <th scope="col">Mobile</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($emp_infos as $emp_info)
                            <tr>
                                <td>{{$emp_info->id}}</td>
                                <td>{{$emp_info->rank}}</td>
                                <td>{{$emp_info->emp_type}}</td>
                                <td>{{$emp_info->desg_type}}</td>
                                <td> {{$emp_info->ws_type}}</td>
                                <td>
                                    <img src="{{asset($emp_info->photo)}}" class="curentStuImage" alt="">
                                    <br><a href="#">{{$emp_info->name}}</a>
                                </td>
                                <td>{{{$emp_info->emp_id}}}</td>
                                <td>{{$emp_info->mobile}}</td>
                                <td class="link_table">
                                    <a href="#"><i class="fa-solid fa-print"></i></a>&nbsp
                                    <a href="{{ route('show.employee', $emp_info->id) }}"><i class="fa-solid fa-eye"></i></a>&nbsp
                                    <a href="{{ route('edit.employee', $emp_info->id) }}"><i class="fa-solid fa-pencil"></i></a>&nbsp
                                    <a href="{{ route('delete.employee', $emp_info->id) }}" onclick="return confirm('Sure want to Delete?')"><i class="fa-solid fa-trash"></i></a>&nbsp
                                </td>
                            </tr>
                            @endforeach

                        </tbody>
                    </table>
                    <!---- /student table ----->
                </form>
            </div>
        </div>
    </section>

</div>
@endsection

@section('fotter_js')
<script>
    $(document).ready(function() {
        $('#employeeTable').DataTable({
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