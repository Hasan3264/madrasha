@extends('layouts.AdminPanal')
@section('content')

        <div class="u-content">
        <div class="u-body">

<section class="es-form-area">
    <div class="card">
        <header class="card-header bg-gradient border-0 pt-5 pb-5 d-flex align-items-center">
            <h2 class="text-white mb-0">
                Leave Type View
            </h2>
        </header>

        <div class="card-body table-responsive" id="institue">
            <form action="" class="es-form es-add-form">
                <div class="session_view_link mt-2 mb-5">
                    <a href="{{route('add_leave_type')}}" class="btn btn-primary"><i class="fa-solid fa-plus"></i></a>
                    <a href="{{route('edit_leave_type', $findId->id)}}" class="btn btn-primary"><i class="fa-solid fa-pencil"></i></a>
                </div>
                <!---- Session View table  ----->
                    <table class="table table-bordered table-striped mt-3 branch_view_table">
                        <tbody >
                            <tr>
                                <th>Title</th>
                                <td>{{$findId->title}}</td>
                            </tr>
                            <tr>
                                <th>Short Title</th>
                                <td>{{$findId->short_title}}</td>
                            </tr>
                            <tr>
                                <th>Employee type</th>
                                <td>{{$findId->relation_type->title}}</td>
                            </tr>
                            <tr>
                                <th>Leave Days</th>
                                <td>{{$findId->leave_days}} </td>
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
