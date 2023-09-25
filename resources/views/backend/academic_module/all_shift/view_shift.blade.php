@extends('layouts.AdminPanal')
@section('content')

    <div class="u-content">
        <div class="u-body">

<section class="es-form-area">
    <div class="card">
        <header class="card-header bg-gradient border-0 pt-5 pb-5 d-flex align-items-center">
            <h2 class="text-white mb-0">
                Working Shift View
            </h2>
        </header>

        <div class="card-body table-responsive" id="institue">
            <form action="" class="es-form es-add-form">
                <div class="session_view_link mt-2 mb-5">
                    <a href="{{ route('add-shift') }}" class="btn btn-primary"><i class="fa-solid fa-plus"></i></a>
                    <a href="{{ route('edit-shift',$shift_data->id) }}" class="btn btn-primary"><i class="fa-solid fa-pencil"></i></a>
                </div>
                <!---- Session View table  ----->
                    <table class="table table-bordered table-striped mt-3 branch_view_table">
                        <tbody >
                            <tr>
                                <th>Name</th>
                                <td>{{ucfirst($shift_data->shift_name)}}</td>
                            </tr>
                            <tr>
                                <th>Start Time	</th>
                                <td>{{date("g:i a", strtotime($shift_data->start_time))}}</td>
                            </tr>
                            <tr>
                                <th>End Time</th>
                                <td>{{date("g:i a", strtotime($shift_data->end_time))}}</td>
                            </tr>
                            <tr>
                                <th>Status</th>
                                <td>{{ucfirst($shift_data->status)}}</td>
                            </tr>
                            <tr>
                                <th>Create At</th>
                                <td>{{$shift_data->created_at}}</td>
                            </tr>
                            <tr>
                                <th>Create By</th>
                                <td>{{ucfirst(Auth::user()->name)}}</td>
                            </tr>
                            <tr>
                                <th>Modified At</th>
                                <td>{{ $shift_data->updated_at }}</td>
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
