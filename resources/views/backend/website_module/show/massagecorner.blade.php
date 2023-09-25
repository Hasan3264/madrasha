@extends('layouts.AdminPanal')
@section('content')
<div class="u-body">

<section class="es-form-area">
    <div class="card">
        <header class="card-header bg-gradient border-0 pt-5 pb-5 d-flex align-items-center">
            <h2 class="text-white mb-0">
                Teachers View
            </h2>
        </header>

        <div class="card-body table-responsive" id="institue">
            <form action="" class="es-form es-add-form">
                <div class="session_view_link mt-2 mb-5">
                    <a href="{{route('add_message')}}" class="btn btn-primary"><i class="fa-solid fa-plus"></i></a>
                    <a href="{{route('updatemassageCorner', $findId->id)}}" class="btn btn-primary"><i class="fa-solid fa-pencil"></i></a>
                </div>
                <!---- Session View table  ----->
                    <table class="table table-bordered table-striped mt-3 branch_view_table">
                        <tbody>
                            <tr>
                                <th>Name</th>
                                <td>{{$findId->name}}</td>
                            </tr>
                            <tr>
                                <th>Designation	</th>
                                <td>{{$findId->designation}}</td>
                            </tr>
                            <tr>
                                <th>Photo	</th>
                                <td><img src="{{asset('uploads/website/masagecorner')}}/{{$findId->photo}}" class="slide_pic" alt=""></td>
                            </tr>
                            <tr>
                                <th>Message	</th>
                                <td>{!!$findId->massage!!}</td>
                            </tr>
                            <tr>
                                <th>Rank</th>
                                <td>{{$findId->rank}}</td>
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

                <!---- /session View table ----->
            </form>
        </div>

    </div>
</section>

    </div>
@endsection
