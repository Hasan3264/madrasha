@extends('layouts.AdminPanal')
@section('content')
    <div class="u-content">
        <div class="u-body">

            <section class="es-form-area">
                <div class="card">
                    <header class="card-header bg-gradient border-0 pt-5 pb-5 d-flex align-items-center">
                        <h2 class="text-white mb-0">
                            Manage Notice
                        </h2>
                    </header>

                    <div class="card-body " id="institue">
                        <form action="" class="es-form es-add-form">
                            <a href="{{ route('add_notice') }}" class="btn btn-primary"><i class="fa-solid fa-plus"></i></a>
                            <div class="table-responsive">
                                <!---- slide show table  ----->
                                <table class="table table-bordered mt-3 text-center">
                                    <thead class="table-bordered">
                                        <tr>
                                            <th scope="col">Srl</th>
                                            <th scope="col">Title</th>
                                            <th scope="col">File Upload</th>
                                            <th scope="col">Status</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($noties as $key => $value)

                                        <tr id="tr_{{$value->id}}">
                                            <th scope="row">{{$key+1}}</th>
                                            <td>{{$value->title}}</td>
                                            <td>{{$value->pdf}}</td>
                                            <td>{{$value->status}}</td>
                                            <td>
                                                <a href="{{route('notice.view', $value->id)}}"><i class="fa-solid fa-eye"></i></a>&nbsp &nbsp
                                                <a href="{{route('notice.edit', $value->id)}}"><i class="fa-solid fa-pencil"></i></a>&nbsp &nbsp
                                                 <a class="deleteRecord cursor-pointer" data-id="{{ $value->id }}"><i
                                                class="fa-solid fa-trash"></i></a>&nbsp &nbsp
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>

                            <!---- /slide show table ----->

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
        $('#dfldddsfljdsfl').DataTable();
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
                    url: "{{ route('delete.notice') }}",
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