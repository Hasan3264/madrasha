@extends('layouts.AdminPanal')
@section('content')
    <div class="u-content">
        <div class="u-body">

<section class="es-form-area">
    <div class="card">
        <header class="card-header bg-gradient border-0 pt-5 pb-5 d-flex align-items-center">
            <h2 class="text-white mb-0">
                Class View
            </h2>
        </header>

        <div class="card-body table-responsive" id="institue">
            <form action="" class="es-form es-add-form">
                <div class="session_view_link mt-2 mb-5">
                    <a href="{{ route('add-class') }}" class="btn btn-primary"><i class="fa-solid fa-plus"></i></a>
                    <a href="{{ route('edit-class',$class_data->id) }}" class="btn btn-primary"><i class="fa-solid fa-pencil"></i></a>
                </div>
                <!---- Session View table  ----->
                    <table class="table table-bordered table-striped mt-3 branch_view_table">
                        <tbody >
                            <tr>
                                <th>Medium Name</th>
                                <td>{{ $class_data->medium_name =="bangla_medium" ? "Bangla Medium":"English Medium" }}</td>
                            </tr>
                            <tr>
                                <th>Class Name</th>
                                <td>{{ $class_data->class_name }}</td>
                            </tr>
                            <tr>
                                <th>Class Code</th>
                                <td>{{ $class_data->class_code }}</td>
                            </tr>
                            <tr>
                                <th>Create At</th>
                                <td>{{ $class_data->created_at }}</td>
                            </tr>
                            <tr>
                                <th>Create By</th>
                                <td>{{ Auth::user()->name }}</td>
                            </tr>
                            <tr>
                                <th>Modified At</th>
                                <td>{{ $class_data->updated_at }}</td>
                            </tr>
                            <tr>
                                <th>Modified By</th>
                                <td>Learning Campus</td>
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
