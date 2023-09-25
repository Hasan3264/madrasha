@extends('layouts.AdminPanal')
@section('content')

<div class="u-content">
    <div class="u-body">

        <section class="es-form-area">
            <div class="card">
                <header class="card-header bg-gradient border-0 pt-5 pb-5 d-flex align-items-center">
                    <h2 class="text-white mb-0">
                        Manage Leaves
                    </h2>
                </header>

                <div class="card-body table-responsive" id="institue">
                    <form action="" class="es-form es-add-form">
                        <a href="{{ route('leave_entry') }}" class="btn btn-primary"><i
                                class="fa-solid fa-plus"></i></a>
                        <p class="text-right">Showing 1-1 of 1 item</p>
                        <!---- session table  ----->
                        <table id="leave" class="table table-bordered mt-3 text-center branch_table">
                            <thead class="table-bordered">
                                <tr>
                                    <th scope="col">Srl</th>
                                    <th scope="col">Employee Type</th>
                                    <th scope="col">Employee</th>
                                    <th scope="col">Leave Type</th>
                                    <th scope="col">End Date</th>
                                    <th scope="col">Total Days</th>
                                    <th scope="col">status</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($leaves as $key => $value)

                                <tr id="tr_{{$value->id}}">
                                    <td>{{$key+1}}</td>
                                    <td>{{$value->relation_type->name}}</td>
                                    <td>{{$value->relation_employee->name}}</td>
                                    <td>{{$value->relation_leaveType->title}}</td>
                                    <td>{{$formatted_date = date('d-m-Y', strtotime($value->e_date))}}</td>
                                    <td>{{$value->t_days}}</td>
                                    <td>{{$value->status}}</td>
                                    <td>
                                        <a href="{{ route('view_leave',$value->id) }}"><i class="fa-solid fa-eye"></i></a>&nbsp
                                        &nbsp
                                        <a href="{{ route('edit_leave', $value->id) }}"><i class="fa-solid fa-pencil"></i></a>&nbsp
                                        &nbsp
                                        <a class="deleteRecord cursor-pointer" data-id="{{ $value->id }}"><i
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
        $('#leave').DataTable({
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
                    url:  "{{ route('delete_leave') }}",
                    data: {
                        'del_id': del_id
                    },
                    success: function (response) {
                       $('#'+response['tr']).slideUp("slow");
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
