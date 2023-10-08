@extends('layouts.AdminPanal')
@section('content')

<div class="u-body">
    <section class="es-form-area">
        <div class="card">
            <header class="card-header bg-gradient border-0 pt-5 pb-5 d-flex align-items-center">
                <h2 class="text-white mb-0">
                    Manage User
                </h2>
            </header>
            <div class="card-body table-responsive" id="institue">
                <form action="" class="es-form es-add-form">
                    <a href="{{route('user.add')}}" class=" mb-4 btn btn-primary"><i class="fa-solid fa-plus"></i></a>
                    <a href="{{route('role.index')}}" class=" mb-4 btn btn-primary">Role Management</i></a>
                    <!---- slide show table  ----->
                    <table id="tableUser" class="table table-bordered mt-3 text-center branch_table">
                        <thead class="table-bordered">
                            <tr>
                                <th scope="col">Srl</th>
                                <th scope="col">User Type</th>
                                <th scope="col">Username</th>
                                <th scope="col">Email</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($studentlists as $key => $list)
                            <tr>
                                <th scope="row">{{$key+1}}</th>
                                <td>  @foreach ($list->getRoleNames() as $rol)
                                    <li>{{$rol}}</li>
                                    @endforeach</td>
                                <td><p>{{ $list->name }}</p>
                                </td>
                                    <td>
                                    {{$list->email}}
                                </td>
                                <td>
                                    <a href="{{route('user.show', $list->id)}}"><i
                                            class="fa-solid fa-eye"></i></a>&nbsp; &nbsp;
                                    <a href="{{route('user.edit', $list->id)}}"><i
                                            class="fa-solid fa-pencil"></i></a>&nbsp; &nbsp;
                                  <a href="{{route('user.delete',$list->id)}}"><i
                                            class="fa-solid fa-trash"></i></a>&nbsp; &nbsp;
                                </td>
                            </tr>
                            @endforeach


                        </tbody>
                    </table>

                    <!---- /slide show table ----->

                </form>
            </div>
        </div>
    </section>
</div>

@endsection
@section('fotter_js')
<script>
    $(document).ready(function () {
        $('#tableUser').DataTable();
    });

</script>
@endsection
