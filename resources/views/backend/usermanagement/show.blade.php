@extends('layouts.AdminPanal')
@section('content')
<div class="u-body">
    <section class="es-form-area">
        <div class="card">
            <header class="card-header bg-gradient border-0 pt-5 pb-5 d-flex align-items-center">
                <h2 class="text-white mb-0">
                    User View
                </h2>
            </header>

            <div class="session_view_link ml-3 mt-4 mb-5">
                <a href="{{route('user.add')}}" class="btn btn-primary"><i class="fa-solid fa-plus"></i></a>
                <a href="user_edit.html" class="btn btn-primary"><i class="fa-solid fa-pencil"></i></a>
            </div>

            <div class="card-body table-responsive" id="institue">
                <form action="" class="es-form es-add-form">

                    <!---- Branch View table  ----->
                    <table class="table table-bordered table-striped mt-3 branch_view_table">
                        <tbody>
                            <tr>
                                <th>User Type</th>
                                <td>{{$findId->user_typ}}</td>
                            </tr>
                            <tr>
                                <th>Username</th>
                                <td>{{$findId->relation_user->name}}</td>
                            </tr>
                            <tr>
                                <th>Email</th>
                                <td>{{$findId->relation_user->email}}</td>
                            </tr>
                            <tr>
                                <th>Photo</th>
                                <td>{{$findId->relation_user->user_photo}}</td>
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
