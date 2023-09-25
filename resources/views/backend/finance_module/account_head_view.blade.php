@extends('layouts.AdminPanal')
@section('content')

        <div class="u-content">
        <div class="u-body">

<section class="es-form-area">
    <div class="card">
        <header class="card-header bg-gradient border-0 pt-5 pb-5 d-flex align-items-center">
            <h2 class="text-white mb-0">
                Account View
            </h2>
        </header>

        <div class="session_view_link ml-3 mt-4 mb-5">
            <a href="{{ route('add_account_head') }}" class="btn btn-primary"><i class="fa-solid fa-plus"></i></a>
            <a href="{{ route('edit_account_head', $findId->id) }}" class="btn btn-primary"><i class="fa-solid fa-pencil"></i></a>
        </div>

        <div class="card-body table-responsive" id="institue">
            <form action="" class="es-form es-add-form">

                <!---- Branch View table  ----->
                    <table class="table table-bordered table-striped mt-3 branch_view_table">
                        <tbody >
                            <tr>
                                <th>A/C Type</th>
                                <td>{{$findId->actype}}</td>
                            </tr>
                            <tr>
                                <th>A/C Category</th>
                                <td>{{$findId->acCat}}</td>
                            </tr>
                            <tr>
                                <th>A/C Parents	</th>
                                <td>{{$findId->acparents}}</td>
                            </tr>
                            <tr>
                                <th>A/C Code</th>
                                <td>{{$findId->accode}}</td>
                            </tr>
                            <tr>
                                <th>A/C Head</th>
                                <td>{{$findId->achead}}</td>
                            </tr>
                            <tr>
                                <th>Has Child?</th>
                                <td>{{$findId->yarmont}}</td>
                            </tr>
                            <tr>
                                <th>Has Child?</th>
                                <td>{{$findId->haschild}}</td>
                            </tr>
                            <tr>
                                <th>Status</th>
                                <td>{{$findId->status}}</td>
                            </tr>
                            <tr>
                                <th>Created At</th>
                                <td>{{$findId->created_at}}</td>
                            </tr>
                        </tbody>
                    </table>

                <!---- /Branch View table ----->


            </form>
        </div>

    </div>
</section>

    </div>
</div>

@endsection
