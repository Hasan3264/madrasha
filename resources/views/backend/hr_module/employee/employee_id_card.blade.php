@extends('layouts.AdminPanal')
@section('content')
<div class="u-body">
    <section class="es-form-area">
        <div class="card">
            <header class="card-header bg-gradient border-0 pt-5 pb-5 d-flex align-items-center">
                <h2 class="text-white mb-0">Employee ID Card</h2>
            </header>

            <div class="academic_info student_search">


                <div class="container">
                    <form action="{{route('employee.downloadID')}}" method="post">
                        @csrf
                        <div class="row mt-3 mb-4">

                            <div class="col-12 col-md-6 col-lg-4">
                                <label for="">Type <span class="text-danger">*</span></label>
                                <select name="type_id" id="type-id">
                                    <option disabled selected>All</option>
                                    @foreach($all_types as $type)
                                    <option value="{{$type->id}}">{{$type->name}}</option>
                                    @endforeach
                                </select>
                            </div><br><br>

                            <div class="col-12 col-md-6 col-lg-4">
                                <label for=""> Shift <span class="text-danger">*</span></label>
                                <select name="shift_id" id="shift-id">
                                    <option disabled selected>All</option>
                                    @foreach($all_shifts as $shift)
                                    <option value="{{$shift->id}}">{{$shift->name}}</option>
                                    @endforeach
                                </select>
                            </div><br><br>

                            <div class="col-12 col-md-6 col-lg-4">
                                <label for="">Employee<span class="text-danger">*</span></label>
                                <select name="emp_id" id="employee-id">
                                </select>
                            </div><br><br>

                        </div>
            <p class="text-center">
                <button type="submit" class="btn btn-primary px-5">Download ID</button>
            </p>
                    </form>


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
                url: "{{url('hr/api/fetch-employees')}}",
                type: "POST",
                data: {
                    type_id: idType,
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