@extends('layouts.AdminPanal')
@section('content')
<div class="u-body">

    <section class="es-form-area">
        <div class="card">
            <header class="card-header bg-gradient border-0 pt-5 pb-5 d-flex align-items-center">
                <h2 class="text-white mb-0">
                    Academic Holiday View
                </h2>
            </header>

            <div class="card-body table-responsive" id="institue">
                <form action="" class="es-form es-add-form">

                    <a href="add_academic_holiday.html" class="btn btn-primary"><i class="fa-solid fa-plus"></i> Add Academic Holiday</a>

                    <!---- Branch View table  ----->
                    <table class="table table-bordered table-striped mt-3 branch_view_table">
                        <tbody>
                            <tr>
                                <th>Type</th>
                                <td>{{$holiday->type}}</td>
                            </tr>
                            <tr>
                                <th>Title</th>
                                <td>{{$holiday->title}}</td>
                            </tr>
                            <tr>
                                <th>Status</th>
                                <td>{{$holiday->status}}</td>
                            </tr>
                            <tr>
                                <th>Created By</th>
                                <td></td>
                            </tr>
                            <tr>
                                <th>Created At</th>
                                <td>{{$holiday->created_at}}</td>
                            </tr>

                            <tr>
                                <th>Modified By</th>
                                <td></td>
                            </tr>
                            <tr>
                                <th>Modified At</th>
                                <td>{{$holiday->updated}}</td>
                            </tr>

                        </tbody>
                    </table>

                    <!---- /Branch View table ----->


                </form>
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