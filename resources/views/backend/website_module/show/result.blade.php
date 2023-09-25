@extends('layouts.AdminPanal')
@section('content')
<div class="u-body">

<section class="es-form-area">
    <div class="card">
        <header class="card-header bg-gradient border-0 pt-5 pb-5 d-flex align-items-center">
            <h2 class="text-white mb-0">
                Board Result View
            </h2>
        </header>

        <div class="card-body table-responsive" id="institue">
            <form action="" class="es-form es-add-form">
                <div class="session_view_link mt-2 mb-5">
                    <a href="{{route('add_board_result')}}" class="btn btn-primary"><i class="fa-solid fa-plus"></i></a>
                    <a href="{{route('board_result_edit', $findId->id)}}" class="btn btn-primary"><i class="fa-solid fa-pencil"></i></a>
                </div>
                <!---- Session View table  ----->
                    <table class="table table-bordered table-striped mt-3 branch_view_table">
                        <tbody>
                            <tr>
                                <th>Exam Type</th>
                                <td>{{$findId->exam_type}}</td>
                            </tr>
                            <tr>
                                <th>Year</th>
                                <td>{{$findId->year}}</td>
                            </tr>
                            <tr>
                                <th>Total Student	</th>
                                <td>{{$findId->t_student}}</td>
                            </tr>
                            <tr>
                                <th>Passed</th>
                                <td>{{$findId->pass_student}}</td>
                            </tr>
                            <tr>
                                <th>Passed (%)	</th>
                                <td>{{$findId->passes}}</td>
                            </tr>
                            <tr>
                                <th>Details</th>
                                <td>{!!$findId->details!!}</td>
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
@endsection
