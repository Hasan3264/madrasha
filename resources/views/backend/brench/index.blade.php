@extends('layouts.AdminPanal')
@section('content')
<div class="u-body">

    <section class="es-form-area">
        <div class="card">
            <header class="card-header bg-gradient border-0 pt-5 pb-5 d-flex align-items-center">
                <h2 class="text-white mb-0">
                    Branch
                </h2>
            </header>

            <div class="card-body table-responsive" id="institue">
                <form action="" class="es-form es-add-form">
                    <a href="{{route('branch.add')}}" class="btn btn-primary"><i class="fa-solid fa-plus"></i></a>
                    <!---- Branch table  ----->
                    <table class="table table-bordered mt-3 text-center branch_table">
                        <thead class="table-bordered">
                            <tr>
                                <th scope="col">SL</th>
                                <th scope="col">Address</th>
                                <th scope="col">City</th>
                                <th scope="col">Zip Code</th>
                                <th scope="col">Has Medium</th>
                                <th scope="col">Has Shift &nbsp;</th>
                                <th scope="col">Status</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row"></th>
                                <td><input type="text" name="" id="filterInput"></td>
                                <td><input type="text" name="" id="filterInput1"></td>
                                <td><input type="text" name="" id="filterInput2"></td>
                                <td><input type="text" name="" id="filterInput3"></td>
                                <td><input type="text" name="" id="filterInput4"></td>
                                <td>
                                    <select id="filterSelect" name="" style="display: none;">
                                        <option value="">All &nbsp;&nbsp;&nbsp;</option>
                                        <option value="Yes">Yes</option>
                                        <option value="No">No</option>
                                    </select>
                                    <div class="nice-select" tabindex="0"><span class="current">All
                                            &nbsp;&nbsp;&nbsp;</span>
                                        <ul class="list">
                                            <li data-value="" class="option selected focus">All &nbsp;&nbsp;&nbsp;</li>
                                            <li data-value="" class="option">Yes</li>
                                            <li data-value="" class="option">No</li>
                                        </ul>
                                    </div>
                                </td>
                                <td>
                                    <select name="" style="display: none;">
                                        <option value="">All &nbsp;&nbsp;&nbsp;</option>
                                        <option value="">Yes</option>
                                        <option value="">No</option>
                                    </select>
                                    <div class="nice-select" tabindex="0"><span class="current">All
                                            &nbsp;&nbsp;&nbsp;</span>
                                        <ul class="list">
                                            <li data-value="" class="option selected focus">All &nbsp;&nbsp;&nbsp;</li>
                                            <li data-value="" class="option">Yes</li>
                                            <li data-value="" class="option">No</li>
                                        </ul>
                                    </div>
                                </td>
                                <td>
                                    <select name="" style="display: none;">
                                        <option value="">All</option>
                                        <option value="">Yes</option>
                                        <option value="">No</option>
                                    </select>
                                    <div class="nice-select" tabindex="0"><span class="current">All</span>
                                        <ul class="list">
                                            <li data-value="" class="option selected focus">All</li>
                                            <li data-value="" class="option">Yes</li>
                                            <li data-value="" class="option">No</li>
                                        </ul>
                                    </div>
                                </td>
                                <td>
                                    <select name="" style="display: none;">
                                        <option value="">All &nbsp;&nbsp;&nbsp;</option>
                                        <option value="Active">Active</option>
                                        <option value="Inactive">Inactive</option>
                                    </select>
                                    <div class="nice-select" tabindex="0"><span class="current">All
                                            &nbsp;&nbsp;&nbsp;</span>
                                        <ul class="list">
                                            <li data-value="" class="option selected">All &nbsp;&nbsp;&nbsp;</li>
                                            <li data-value="" class="option">Active</li>
                                            <li data-value="" class="option">Inactive</li>
                                        </ul>
                                    </div>
                                </td>
                                <td></td>
                            </tr>


                            @foreach ($branchdetials as $key => $branchdetial)
                            <tr  id="tr_{{$branchdetial->id}}">
                                <th scope="row">{{$key+1}}</th>
                                <td>{{$branchdetial->address}}</td>
                                <td>{{$branchdetial->city}}</td>
                                <td>{{$branchdetial->zip_code}}</td>
                                <td>{{$branchdetial->zip_code}}</td>
                                <td>{{$branchdetial->zip_code}}</td>
                                <td>{{$branchdetial->status}}</td>
                                <td>
                                    <a href="{{route('branch.show', $branchdetial->id)}}"><i
                                            class="fa-solid fa-eye"></i></a>&nbsp; &nbsp;
                                    <a href="{{route('branch.edit', $branchdetial->id)}}"><i
                                            class="fa-solid fa-pencil"></i></a>&nbsp; &nbsp;
                                    <a class="deleteRecord cursor-pointer" data-id="{{ $branchdetial->id }}"><i
                                            class="fa-solid fa-trash"></i></a>&nbsp; &nbsp;
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
@endsection

@section('fotter_js')
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
                    url: '/branchdelete',
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
