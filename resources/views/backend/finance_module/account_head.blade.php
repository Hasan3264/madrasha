@extends('layouts.AdminPanal')
@section('content')

        <div class="u-content">
        <div class="u-body">

<section class="es-form-area">
    <div class="card">
        <header class="card-header bg-gradient border-0 pt-5 pb-5 d-flex align-items-center">
            <h2 class="text-white mb-0">
                Manage Account Head
            </h2>
        </header>

        <div class="card-body table-responsive" id="institue">
            <form action="" class="es-form es-add-form">
            <a href="{{ route('add_account_head') }}" class="btn btn-primary"><i class="fa-solid fa-plus"></i></a>
               <p class="text-right">Showing 1-1 of 1 item</p>
                <!---- session table  ----->
                    <table id="oioprtp" class="table table-bordered mt-3 text-center branch_table">
                        <thead class="table-bordered">
                            <tr>
                                <th scope="col">Srl</th>
                                <th scope="col">A/C Type</th>
                                <th scope="col">A/C Category</th>
                                <th scope="col">A/C Parents</th>
                                <th scope="col">A/C Head</th>
                                <th scope="col">A/C Code</th>
                                <th scope="col">Yearly / Monthly</th>
                                <th scope="col">Has Child ? </th>
                                <th scope="col" width="35px">Status</th>
                                <th scope="col">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($accounts as $key =>  $value)
                            <tr id="tr_{{$value->id}}">
                                <td>{{$key+1}}</td>
                                <td>{{$value->actype}}</td>
                                <td>{{$value->acCat}}</td>
                                <td>{{$value->acparents}}</td>
                                <td>{{$value->achead}}</td>
                                <td>{{$value->accode}}</td>
                                <td>{{$value->yarmont}}</td>
                                <td>{{$value->haschild}}</td>
                                <td>{{$value->status}}</td>
                                <td>
                                  <a href="{{ route('account_head_view', $value->id) }}"><i class="fa-solid fa-eye"></i></a>&nbsp &nbsp
                                    <a href="{{ route('edit_account_head', $value->id) }}"><i class="fa-solid fa-pencil"></i></a>&nbsp &nbsp
                                    <a class="deleteRecord cursor-pointer" data-id="{{ $value->id }}"><i
                                        class="fa-solid fa-trash"></i></a>&nbsp &nbsp
                                </td>
                            </tr>
                            @endforeach

                        </tbody>
                    </table>

                <!---- /session table ----->

            </form>
        </div>

    </div>
</section>

    </div>
</div>

@endsection
@section('fotter_js')
<script>
    $(document).ready(function () {
        $('#oioprtp').DataTable();
    });

</script>



<script>
    $('.deleteRecord').click(function () {
        var el = $(this);
        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.isConfirmed) {

                var del_id = el.data("id");
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                $.ajax({
                    type: 'POST',
                    url: "{{ route('delete_account_head') }}",
                    data: {
                        'del_id': del_id
                    },
                    success: function (response) {
                        $('#' + response['tr']).slideUp("slow");
                        Swal.fire(
                            'Done!',
                            data.success,
                            'success'
                        )

                    }
                });

            }
        });
    });

</script>
@endsection
