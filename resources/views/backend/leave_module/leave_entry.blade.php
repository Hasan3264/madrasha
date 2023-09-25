@extends('layouts.AdminPanal')
@section('content')

<div class="u-content">
    <div class="u-body">

        <section class="es-form-area">
            <div class="card">
                <header class="card-header bg-gradient border-0 pt-5 pb-5 d-flex align-items-center">
                    <h2 class="text-white mb-0">Leave Entry</h2>
                </header>
                <form action="{{route('store_leave')}}" method="POST">
                    @csrf
                    <div class="branch_edit">
                        <div class="row">

                            <div class="col-md-10 mb-3">
                                <label for="">Employee Type <span>*</span></label>
                                <select name="emp_type" id="emp_type">
                                    <option value="">Select Employee Type</option>
                                    @foreach ($types as $type)
                                    <option value="{{$type->id}}">{{$type->name}}</option>
                                    @endforeach
                                </select>
                                @error('emp_type')
                                <strong class="text-danger">{{$message}}</strong>
                                @enderror
                            </div>

                            <div class="col-md-10 mb-3">
                                <label for="">Employee<span>*</span></label>
                                <select name="emp_id" id="class">
                                    {{-- <option value="">Select Class</option> --}}
                                    {{-- @foreach($casses as $class)
                                    <option value="{{$class->id}}">{{$class->class_name}}</option>
                                    @endforeach --}}

                                </select>
                                  @error('emp_id')
                                <strong class="text-danger">{{$message}}</strong>
                                @enderror
                            </div>

                            <div class="col-md-10 mb-3">
                                <label for="">Leave Type<span>*</span></label>
                                <select name="leave_type" id="">
                                    <option value="">Select Leave Type</option>
                                    @foreach ($leaveTypes as $leave)
                                    <option value="{{$leave->id}}">{{$leave->title}}</option>
                                    @endforeach
                                </select>
                                @error('leave_type')
                                <strong class="text-danger">{{$message}}</strong>
                                @enderror
                            </div>

                            <div class="col-md-10 mb-3">
                                <label for="">End Date <span>*</span></label>
                                <input type="date" placeholder=" " name="e_date" id="">
                                @error('e_date')
                                <strong class="text-danger">{{$message}}</strong>
                                @enderror
                            </div>

                            <div class="col-md-10 mb-3">
                                <label for="">Total Days <span>*</span></label>
                                <input type="number" placeholder=" " name="t_days" id="">
                                @error('t_days')
                                <strong class="text-danger">{{$message}}</strong>
                                @enderror
                            </div>

                            <div class="col-md-10 mb-3">
                                <label for="">Status <span>*</span></label>
                                <select name="status" id="">
                                    <option value="Active">Active</option>
                                    <option value="Inactive">Inactive</option>
                                </select>
                                @error('status')
                                <strong class="text-danger">{{$message}}</strong>
                                @enderror
                            </div>

                            <div class="col-md-10 mt-4 mb-3">
                                <p>
                                    <button type="submit"   class="btn bg-gradient border-0 text-white">Create</button>
                                    <button type="reset" class="btn  cancel_btn border-0 text-white">Cancel</button>
                                </p>
                            </div>

                        </div>
                    </div>
                </form>
            </div>
        </section>

    </div>
</div>

@endsection
@section('fotter_js')
<script>
    $('#emp_type').change(function () {
        var emptype_id = $(this).val();
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            type: 'POST',
            url: "{{route('getempById')}}",
            data: {
                'emptype_id': emptype_id
            },
            success: function (response) {
                $('#class').html(response);
            }
        });
    });

</script>
@endsection
