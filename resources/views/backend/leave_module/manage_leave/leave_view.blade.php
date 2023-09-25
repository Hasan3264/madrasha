@extends('layouts.AdminPanal')
@section('content')

        <div class="u-content">
        <div class="u-body">

<section class="es-form-area">
    <div class="card">
        <header class="card-header bg-gradient border-0 pt-5 pb-5 d-flex align-items-center">
            <h2 class="text-white mb-0">
                Leave View
            </h2>
        </header>

        <div class="card-body table-responsive" id="institue">
            <form action="" class="es-form es-add-form">
                <div class="session_view_link mt-2 mb-5">
                    <a href="{{route('store_leave')}}" class="btn btn-primary"><i class="fa-solid fa-plus"></i></a>
                    <a href="{{route('edit_leave',$findId->id)}}" class="btn btn-primary"><i class="fa-solid fa-pencil"></i></a>
                </div>
                <!---- Session View table  ----->
                    <table class="table table-bordered table-striped mt-3 branch_view_table">
                        <tbody >
                            <tr>
                                <th>Employee Type</th>
                                <td>{{$findId->relation_type->name}} </td>
                            </tr>
                            <tr>
                                <th>Employee</th>
                                <td>{{$findId->relation_employee->name}}</td>
                            </tr>
                            <tr>
                                <th>Leave Type</th>
                                <td>{{$findId->relation_leaveType->title}}</td>
                            </tr>
                            <tr>
                                <th>End Date</th>
                                <td>{{$formatted_date = date('d-m-Y', strtotime($findId->e_date))}}</td>
                            </tr>
                            <tr>
                                <th>Total Days</th>
                                <td>{{$findId->t_days}}</td>
                            </tr>
                            <tr>
                                <th>Status</th>
                                <td>{{$findId->status}}</td>
                            </tr>
                        </tbody>
                    </table>

                <!---- /session View table ----->
            </form>
        </div>

    </div>
</section>

    </div>
</div>

@endsection
