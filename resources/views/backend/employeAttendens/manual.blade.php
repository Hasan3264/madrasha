@extends('layouts.AdminPanal')
@section('content')
<div class="u-body">
    <section class="es-form-area">
        <div class="card">
            <header class="card-header bg-gradient border-0 pt-5 pb-5 d-flex align-items-center">
                <h2 class="text-white mb-0">Employee Manual Attendence</h2>
            </header>

            <div class="academic_info">
                <div class="container">
                    @if($errors->any())
                    <h4><span style="color:red">{{$errors->first()}}</span></h4>
                    @endif
                    <form action="{{route('manual.store')}}" method="post">
                        @csrf
                        <div class="row mt-3 mb-4">
                            <div class="col-12 col-md-6 col-lg-4">
                                <label for="">Type <span class="text-danger">*</span></label>
                                <select name="Type" id="type-id">
                                    <option disabled selected>All</option>
                                    @foreach($all_types as $type)
                                    <option value="{{$type->id}}">{{$type->name}}</option>
                                    @endforeach
                                </select>
                                @error('Type')
                                <span class="text-red-500 text-sm">{{$message}}</span>
                                @enderror
                            </div><br><br>
                            <div class="col-12 col-md-6 col-lg-4">
                                <label for="">Leave/Holiday</label>
                                <select name="leave_holiday" id="leave-holiday">
                                    <option disabled selected>Select</option>
                                    <option value="leave">Leave</option>
                                    <option value="holiday">Holiday</option>
                                </select>
                                @error('leave_holiday')
                                <span class="text-red-500 text-sm">{{$message}}</span>
                                @enderror
                            </div><br><br>
                            <div class="col-12 col-md-6 col-lg-4">
                                <label for="">Employee<span class="text-danger">*</span></label>
                                <select name="employee" id="employee-id">
                                </select>
                                @error('Employee')
                                <span class="text-red-500 text-sm">{{$message}}</span>
                                @enderror
                            </div><br><br>
                        </div>
                        <div class="row mt-3 mb-4">
                            <div class="col-12 col-md-6 col-lg-4">
                                <label for="">Day <span class="text-danger">*</span></label>
                                <input type="date" name="date" id="">
                            </div>
                            <div class="col-12 col-md-6 col-lg-4" id="in-time">
                                <label for="">In <span>*</span></label>
                                <input type="time" name="in_time" id="">
                            </div>
                            @error('r_limit')
                            <strong class="text-danger">{{$message}}</strong>
                            @enderror
                            <div class="col-12 col-md-6 col-lg-4" id="out-time">
                                <label for="">Out <span>*</span></label>
                                <input type="time" name="out_time" id="">
                            </div>
                            @error('r_limit')
                            <strong class="text-danger">{{$message}}</strong>
                            @enderror
                        </div>
                        <div class="row mt-3 mb-4" id="zone">
                            <div class="col-12 col-md-6 col-lg-4">
                                <label for="">Zone</label>
                                <select name="zone">
                                    <option disabled selected>Select Zone</option>
                                    <option value="Green">Green Zone</option>
                                    <option value="Yellow">Yellow Zone</option>
                                    <option value="Red">Red Zone</option>
                                </select>
                                @error('zone')
                                <span class="text-red-500 text-sm">{{$message}}</span>
                                @enderror
                            </div>

                        </div>
                        <p class="text-center">
                            <button type="submit" class="btn btn-primary px-5">Submit</button>
                        </p>
                    </form>
                </div>
                <div class="attendenceTable table-responsive">
                    <table class="table table-bordered mt-3 text-center current_student_table" id="manualAttendanceTable">
                        <thead>
                            <tr style="background-color:rgb(226, 226, 226);">
                                <th scope="col">SL</th>
                                <th scope="col">Emp. ID</th>
                                <th scope="col">Name</th>
                                <th scope="col">Designation</th>
                                <th scope="col">Mobile</th>
                                <th scope="col">In Time</th>
                                <th scope="col">Out Time</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($attendance_data as $key => $first)
                            @foreach($first as $key => $value)
                            <tr>
                                <th scope="row">{{$value->id}}</th>
                                <td>{{$value->emp_id}}</td>
                                <td>{{$value->employee_name}}</td>
                                <td>{{$value->designation}}</td>
                                <td>{{$value->mobile}}</td>
                                <td>{{$value->in_time}}</td>
                                <td>{{$value->out_time}}</td>
                            </tr>
                            @endforeach
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>

</div>
@endsection

@section('fotter_js')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    $(document).ready(function() {

        $('#type-id').on('change', function() {
            var idType = this.value;
            $("#employee-id").html('');
            $.ajax({
                url: "{{url('employeAttendenc/api/fetch-employees')}}",
                type: "POST",
                data: {
                    Type: idType,
                    _token: '{{csrf_token()}}'
                },
                dataType: 'json',
                success: function(result) {
                    $('#employee-id').html('<option disabled selected>Select Employee</option>');
                    $.each(result.employees, function(key, value) {
                        $.each(value, function(key, value) {
                            $("#employee-id").append('<option value="' + value
                                .emp_code + '">' + value.name + '</option>');
                        });
                    });

                    // console.log(result)
                }
            });
        });

    });
</script>
<script type="text/javascript">
    $(function() {
        // $('#row_dim').hide(); 
        $('#leave-holiday').change(function() {
            $('#in-time').hide();
            $('#out-time').hide();
            $('#zone').hide();
        });
    });
</script>
<script>
    $(document).ready(function() {
        $('#manualAttendanceTable').DataTable({
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