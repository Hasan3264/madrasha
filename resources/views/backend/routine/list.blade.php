@extends('layouts.AdminPanal')
@section('content')
<div class="u-body">

    <section class="es-form-area">
        <div class="card mb-8 my-6">
            <header class="card-header bg-gradient border-0 pt-5 pb-5 d-flex align-items-center">
                <h2 class="text-white mb-0"> Routine List</h2>
            </header>
        </div>
       <table id="routine" class="table table-bordered mt-10  text-center branch_table">
            <thead class="table-bordered">
                <tr>
                    <th scope="col">SL</th>
                    <th scope="col">Routine Days</th>
                    <th scope="col">Medium</th>
                    <th scope="col">Class</th>
                    <th scope="col">Subject</th>
                    <th scope="col">Shift</th>
                    <th scope="col">Teacher</th>
                    <th scope="col">Start Time</th>
                    <th scope="col">End Time</th>
                    <th scope="col">Brack</th>
                    <th scope="col">Status</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($all_routine as $key => $routine)
                <tr id="tr_{{$routine->id}}">
                    <th scope="row">{{$key+1}}</th>
                    <td id="myTable">{{$routine->routine_day}}</td>
                    <td>{{$routine->getMediumName($routine->medium_id)}}</td>
                    <td>{{$routine->relation_AllClass->class_name}}</td>
                    <td>{{$routine->relation_AllSubject->name}}</td>
                    <td>{{$routine->relation_AllShift->shift_name}}</td>
                    <td>{{$routine->teacher_id}}</td>
                    <td>{{date("h:i A", strtotime($routine->s_time))}}</td>
                    <td>{{date("h:i A", strtotime($routine->e_time))}}</td>
                    <td>@if ($routine->brack_time == 0)
                        {{'NO'}}
                        @else
                        {{'YES'}}
                         @endif
                </td>
                    <td>{{$routine->status}}</td>
                    <td>
                        <a class="deleteRecord cursor-pointer" data-id="{{ $routine->id }}"><i
                                class="fa-solid fa-trash"></i></a>&nbsp; &nbsp;
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </section>
</div>


@if(session('success'))
<div class="alert alert-success">
    {{ session('success') }}
</div>
@endif

@endsection
@section('fotter_js')
<script>
    $(document).ready(function () {
        $('#routine').DataTable({
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
                    url: "{{ route('routine.delete') }}",
                    data: {
                        'del_id': del_id
                    },
                    success: function (response) {
                        $('#' + response['tr']).slideUp("slow");
                         Swal.fire(
                            'Done!',
                            response.success,
                            'success'
                        )

                    }
                });

            }
        });
    });

</script>
@endsection
