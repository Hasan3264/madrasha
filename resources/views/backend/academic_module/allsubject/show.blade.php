@extends('layouts.AdminPanal')
@section('content')
<div class="u-body">

    <section class="es-form-area">
        <div class="card">
            <header class="card-header bg-gradient border-0 pt-5 pb-5 d-flex align-items-center">
                <h2 class="text-white mb-0">
                    Subject View
                </h2>
            </header>

            <div class="card-body table-responsive" id="institue">
                <form action="" class="es-form es-add-form">
                    <div class="session_view_link mt-2 mb-5">
                        <a href="{{route('add.subject')}}" class="btn btn-primary"><i class="fa-solid fa-plus"></i></a>
                        <a href="{{route('edit.subject', $findId->id)}}" class="btn btn-primary"><i class="fa-solid fa-pencil"></i></a>
                    </div>
                    <!---- Session View table  ----->
                    <table class="table table-bordered table-striped mt-3 branch_view_table">
                        <tbody>
                            <tr>
                                <th>Class Name</th>
                                <td>{{$findId->relation_class->class_name}}</td>
                            </tr>
                            <tr>
                                <th>Subject Name</th>
                                <td>{{$findId->name}}</td>
                            </tr>
                            <tr>
                                <th>Subject Code</th>
                                <td>{{$findId->code}}</td>
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
