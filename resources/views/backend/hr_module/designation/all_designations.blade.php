@extends('layouts.AdminPanal')
@section('content')
@can('watch')
<div class="u-body">

    <section class="es-form-area">
        <div class="card">
            <header class="card-header bg-gradient border-0 pt-5 pb-5 d-flex align-items-center">
                <h2 class="text-white mb-0">
                    Manage Designation
                </h2>
            </header>

            <div class="card-body table-responsive" id="institue">
                    <a href="{{ route('add.designation') }}" class="btn btn-primary"><i class="fa-solid fa-plus"></i></a>
                    <p class="text-right">Showing 1-1 of 1 item</p>
                    <!---- session table  ----->
                    <table id="designationTable" class="table table-bordered mt-3 text-center">
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
                            @foreach($designations as $designation)
                            <tr>
                                <td>{{$designation->id}}</td>
                                <td>{{$designation->type}}</td>
                                <td>{{$designation->title}}</td>
                                <td>{{$designation->status}}</td>
                                <td>
                                    <a href="{{ route('show.designation', $designation->id) }}"><i class="fa-solid fa-eye"></i></a>&nbsp &nbsp
                                    <a href="{{ route('edit.designation', $designation->id) }}"><i class="fa-solid fa-pencil"></i></a>&nbsp &nbsp
                                    <a href="{{ route('delete.designation', $designation->id )}}" onclick="return confirm('Sure want to Delete?')"><i class="fa-solid fa-trash"></i></a>&nbsp &nbsp
                                </td>
                            </tr>
                            @endforeach

                        </tbody>
                    </table>
                    <!---- /session table ----->


            </div>

        </div>
    </section>

</div>
@endcan
@endsection

@section('fotter_js')
<script>
    $(document).ready(function() {
        $('#designationTable').DataTable({
            //       columnDefs: [
            //     {
            //         targets: [0],
            //         orderData: [0, 1],
            //     },
            //     {
            //         targets: [1],
            //         orderData: [1, 0],
            //     },
            //     {
            //         targets: [4],
            //         orderData: [4, 0],
            //     },
            // ],
        });
    });
</script>
@endsection
