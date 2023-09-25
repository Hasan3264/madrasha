@extends('layouts.AdminPanal')
@section('content')
<div class="u-body">

    <section class="es-form-area">
        <div class="card">
            <header class="card-header bg-gradient border-0 pt-5 pb-5 d-flex align-items-center">
                <h2 class="text-white mb-0">
                    All Subject
                </h2>
            </header>

            <div class="card-body table-responsive" id="institue">
                <form action="" class="es-form es-add-form">
                    <a href="{{route('add.subject')}}" class="btn btn-primary"><i class="fa-solid fa-plus"></i></a>
                    <!---- session table  ----->
                    <table id="SubjectTable" class="table table-bordered mt-3 text-center shift_table">
                        <thead class="table-bordered">
                            <tr>
                                <th scope="col">Srl</th>
                                <th scope="col">Class Name</th>
                                <th scope="col">Subject Code</th>
                                <th scope="col">Subject Name</th>
                                <th scope="col">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($all_subjects as $key => $subject)

                            <tr id="tr_{{$subject->id}}">
                                <td>{{$key+1}}</td>
                                <td>{{$subject->relation_class->class_name}}</td>
                                <td>{{$subject->code}}</td>
                                <td>{{$subject->name}}</td>
                                <td>
                                    <a href="{{route('subject.view', $subject->id)}}"><i class="fa-solid fa-eye"></i></a>&nbsp; &nbsp;&nbsp;
                                    <a href="{{route('edit.subject', $subject->id)}}"><i class="fa-solid fa-pencil"></i></a>&nbsp;
                                    &nbsp;&nbsp;
                                    <a class="deleteRecord cursor-pointer" data-id="{{ $subject->id }}"><i
                                            class="fa-solid fa-trash"></i></a>&nbsp; &nbsp;
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
@endsection

@section('fotter_js')
<script>
    $(document).ready(function () {
        $('#SubjectTable').DataTable({
            columnDefs: [{
                    targets: [0],
                    orderData: [0, 1],
                },
                {
                    targets: [1],
                    orderData: [1, 0],
                },
                {
                    targets: [4],
                    orderData: [4, 0],
                },
            ],
        });
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
                    url: "{{route('delete.subject')}}",
                    data: {
                        'del_id': del_id
                    },
                    success: function (response) {
                       $('#'+response['tr']).slideUp("slow");
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
