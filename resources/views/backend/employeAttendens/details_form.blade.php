@extends('layouts.AdminPanal')
@section('content')
<div class="u-body">
    <section class="es-form-area">
        <div class="card">
            <header class="card-header bg-gradient border-0 pt-5 pb-5 d-flex align-items-center">
                <h2 class="text-white mb-0">Employee Attendence Details</h2>
            </header>

            <div class="academic_info student_search">


                <div class="container">
                    <form action="{{route('employee.attendance.details')}}" method="post">
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
                            <!-- 
                        <div class="col-12 col-md-6 col-lg-4">
                            <label for="">Working Shift <span class="text-danger">*</span></label>
                            <select name="" id="">
                                <option value="">Select Working Shift</option>
                            </select>
                        </div><br><br> -->

                            <div class="col-12 col-md-6 col-lg-4">
                                <label for="">Employee<span class="text-danger">*</span></label>
                                <select name="employee" id="employee-id">
                                </select>
                                @error('Employee')
                                <span class="text-red-500 text-sm">{{$message}}</span>
                                @enderror
                            </div><br><br>
                            <div class="col-12 col-md-6 col-lg-4">
                                <label for="">Month <span class="text-danger">*</span></label>
                                <select name="month" id="">
                                    <option disabled selected>Select Month</option>
                                    <option value="01">January</option>
                                    <option value="02">February</option>
                                    <option value="03">March</option>
                                    <option value="04">April</option>
                                    <option value="05">May</option>
                                    <option value="06">June</option>
                                    <option value="07">July</option>
                                    <option value="08">August</option>
                                    <option value="09">September</option>
                                    <option value="10">October</option>
                                    <option value="11">November</option>
                                    <option value="12">December</option>
                                </select>
                                @error('month')
                                <p style="color: red;">{{$message}}</p>
                                @enderror
                            </div><br><br>

                        </div>

                        <div class="row mt-3 mb-4">

                            <div class="col-12 col-md-6 col-lg-4">
                                <label for="">Year <span class="text-danger">*</span></label>
                                <!-- <select name="" id="">
                                <option value="">Select Year</option>
                                <option value="">2022</option>
                                <option value="">2021</option>
                                <option value="">2020</option>
                                <option value="">2019</option>
                            </select> -->
                                <input type="text" name="year">
                                @error('year')
                                <p style="color: red;">{{$message}}</p>
                                @enderror
                            </div><br><br>

                        </div>
                        <p class="text-center">
                            <button type="submit" class="btn btn-primary px-5">Submit</button>
                        </p>
                    </form>

                </div>

            </div>

        </div>
    </section>

</div>
@endsection

@section('fotter_js')
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->
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

                    // console.log(result.employees)
                }
            });
        });
    });
</script>
@endsection