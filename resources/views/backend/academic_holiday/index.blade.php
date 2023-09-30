@extends("layouts.AdminPanal")
@section('content')
@can('watch')
@if(session('success'))
<div class="alert alert-success">
    {{ session('success') }}
</div>
@endif
<div class="u-body">
    <section class="es-form-area">
        <div class="card">
            <header class="card-header bg-gradient border-0 pt-5 pb-5 d-flex align-items-center">
                <h2 class="text-white mb-0">
                    Manage Academic Holiday
                </h2>
            </header>

            <div class="card-body table-responsive" id="institue">
                <form action="" class="es-form es-add-form">

                    <a href="{{route('academic-holiday.create')}}" class="btn btn-primary"><i
                            class="fa-solid fa-plus"></i></a>
                    <!---- Branch table  ----->
                    <table class="table table-bordered mt-3 text-center academic_table">
                        <thead class="table-bordered">
                            <tr>
                                <th scope="col">Srl</th>
                                <th scope="col">Type</th>
                                <th scope="col">Title</th>
                                <th scope="col">Status</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row"></th>
                                <td>
                                    <select name="" id="">
                                        <option value="">All</option>
                                        <option value="">Activitys</option>
                                        <option value="">Holidays</option>
                                    </select>
                                </td>
                                <td><input type="text" name="" id=""></td>
                                <td>
                                    <select name="" id="">

                                        <option value="">All</option>
                                        <option value="">Active</option>
                                        <option value="">Inactive</option>
                                    </select>
                                </td>
                                <td></td>
                            </tr>
                            @foreach($holidays as $holiday)
                            <tr>
                                <th scope="row">{{$holiday->id}}</th>
                                <td>{{$holiday->type}}</td>
                                <td>{{$holiday->title}}</td>
                                <td>{{$holiday->status}}</td>
                                <td>
                                    <a href="{{route('academic-holiday.view', ['id' => $holiday->id])}}"><i
                                            class="fa-solid fa-eye"></i></a>&nbsp &nbsp
                                    <a href="{{route('academic-holiday.edit', ['id' => $holiday->id])}}"><i
                                            class="fa-solid fa-pencil"></i></a>&nbsp &nbsp
                                    <a href="{{route('academic-holiday.delete', ['id' => $holiday->id])}}"
                                        onclick="return confirm('Sure want to Delete?')"><i
                                            class="fa-solid fa-trash"></i></a>&nbsp &nbsp
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>

                    <!---- /Branch table ----->


                </form>
            </div>

        </div>
    </section>

</div>
@endcan
@endsection
