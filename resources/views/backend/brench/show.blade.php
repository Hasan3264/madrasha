@extends('layouts.AdminPanal')
@section('content')
<div class="u-body">

<section class="es-form-area">
    <div class="card">
        <header class="card-header bg-gradient border-0 pt-5 pb-5 d-flex align-items-center">
            <h2 class="text-white mb-0">
                Branch View
            </h2>
        </header>


        <div class="card-body table-responsive" id="institue">
            <form action="" class="es-form es-add-form">
                <div class="session_view_link mt-2 mb-5">
                    <a href="{{route('branch.add')}}" class="btn btn-primary"><i class="fa-solid fa-plus"></i></a>
                    <a href="{{route('branch.edit', $branch->id)}}" class="btn btn-primary"><i class="fa-solid fa-pencil"></i></a>
                </div>
                <!---- Branch View table  ----->
                    <table class="table table-bordered table-striped mt-3 branch_view_table">
                        <tbody>
                            <tr>
                                <th>Address</th>
                                <td>{{$branch->address}}</td>
                            </tr>
                            <tr>
                                <th>City</th>
                                <td>{{$branch->city}}</td>
                            </tr>
                            <tr>
                                <th>Zip Code</th>
                                <td>{{$branch->zip_code}}</td>
                            </tr>
                            <tr>
                                <th>Phone/Mobile</th>
                                <td>{{$branch->number}}</td>
                            </tr>
                            <tr>
                                <th>Fax</th>
                                <td>{{$branch->fax}}</td>
                            </tr>
                            <tr>
                                <th>Email</th>
                                <td>{{$branch->email}}</td>
                            </tr>
                            <tr>
                                <th>Weekly Holiday</th>
                                <td>{{$branch->holydays}}</td>
                            </tr>
                            <tr>
                                <th>Has Medium</th>
                                <td></td>
                            </tr>
                            <tr>
                                <th>Has Shift</th>
                                <td>Yes</td>
                            </tr>
                            <tr>
                                <th>Has Shift</th>
                                <td>Yes</td>
                            </tr>
                            <tr>
                                <th>Status</th>
                                <td>{{$branch->status}}</td>
                            </tr>
                        </tbody>
                    </table>

                <!---- /Branch View table ----->


            </form>
        </div>

    </div>
</section>

    </div>
@endsection
