@extends('layouts.AdminPanal')
@section('content')
@can('watch')
<div class="u-body">
    @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif
    <section class="es-form-area">
        <div class="card">
            <header class="card-header bg-gradient border-0 pt-5 pb-5 d-flex align-items-center">
                <h2 class="text-white mb-0">Add Employees</h2>
            </header>
            <form action="{{route('store.employee')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="academic_info">

                    <h5>
                        <i class="fa-solid fa-circle-info"></i> Professional Information
                    </h5>
                    <div class="container">



                        <div class="row mt-3 mb-4">

                            <div class="col-6">
                                <label for="">Employee Type <span>*</span></label>
                                <select name="emp_type_id" id="employee-id">
                                    <option disabled selected>Select Employee Type</option>
                                    @foreach($all_employee_types as $emp_type)
                                    <option value="{{$emp_type->id}}">{{$emp_type->name}}</option>
                                    @endforeach
                                </select>
                                @error('emp_type_id')
                                <span class="text-red-500 text-sm">{{$message}}</span>
                                @enderror
                            </div>
                            <div class="col-6">
                                <label for="">Desgination <span>*</span></label>
                                <select name="desg_id" id="designation-id">
                                    <option disabled selected>Select Desgination</option>

                                </select>
                                @error('desg_id')
                                <span class="text-red-500 text-sm">{{$message}}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mt-3 mb-4">

                            <div class="col-6">
                                <label for="">Working Shift</label>
                                <select name="ws_id" id="">
                                    <option disabled selected>Select Shift Name</option>
                                    @foreach($all_working_shifts as $shifts)
                                    <option value="{{$shifts->id}}">{{$shifts->name}}</option>
                                    @endforeach
                                </select>
                                @error('ws_id')
                                <span class="text-red-500 text-sm">{{$message}}</span>
                                @enderror
                            </div>

                            <div class="col-6">
                                <label for="">Joining Date </label>
                                <input type="date" name="joining_date">
                                @error('joining_date')
                                <span class="text-red-500 text-sm">{{$message}}</span>
                                @enderror
                            </div>

                        </div>
                        <div class="row mt-3 mb-4">

                            <div class="col-6">
                                <label for="">Rank <span>*</span> </label>
                                <input type="text" name="rank">
                                @error('rank')
                                <span class="text-red-500 text-sm">{{$message}}</span>
                                @enderror
                            </div>


                            <div class="col-6 toggle-group">
                                <label for="">Bank Account No</label>
                                <input type="text" name="bank_acc_no">
                                @error('bank_acc_no')
                                <span class="text-red-500 text-sm">{{$message}}</span>
                                @enderror
                            </div>

                        </div>

                        <div class="row mt-3 mb-4">
                            <div class="col-6 toggle-group">
                                <label for="">Previous Institute</label>
                                <input type="text" name="prev_inst">
                                @error('prev_inst')
                                <span class="text-red-500 text-sm">{{$message}}</span>
                                @enderror
                            </div>

                            <div class="col-6 toggle-group">
                                <label for="">Previous Designation</label>
                                <input type="text" name="prev_des">
                                @error('prev_des')
                                <span class="text-red-500 text-sm">{{$message}}</span>
                                @enderror
                            </div>

                        </div>

                    </div>

                </div>

                <div class="academic_info">
                    <h5>
                        <i class="fa-solid fa-circle-info"></i> Personal Information
                    </h5>

                    <div class="container">

                        <div class="row mt-3 mb-4">

                            <div class="col-6">
                                <label for="">Name <span class="text-danger">*</span></label>
                                <input type="text" name="name" id="">
                                @error('name')
                                <span class="text-red-500 text-sm">{{$message}}</span>
                                @enderror
                            </div>

                            <div class="col-6">
                                <label for="">Father's Name <span class="text-danger">*</span></label>
                                <input type="text" name="father_name" id="">
                                @error('father_name')
                                <span class="text-red-500 text-sm">{{$message}}</span>
                                @enderror
                            </div>

                        </div>

                        <div class="row mt-3 mb-4">

                            <div class="col-6">
                                <label for="">Mobile <span class="text-danger">*</span></label>
                                <input type="text" name="mobile" id="">
                                @error('mobile')
                                <span class="text-red-500 text-sm">{{$message}}</span>
                                @enderror
                            </div>

                            <div class="col-6">
                                <label for="">Mother's Name <span class="text-danger">*</span></label>
                                <input type="text" name="mother_name" id="">
                                @error('mother_name')
                                <span class="text-red-500 text-sm">{{$message}}</span>
                                @enderror
                            </div>

                        </div>

                        <div class="row mt-3 mb-4">

                            <div class="col-6">
                                <label for="">Email</label>
                                <input type="text" name="email">
                                @error('email')
                                <span class="text-red-500 text-sm">{{$message}}</span>
                                @enderror
                            </div>

                            <div class="col-6">
                                <label for="">Matarial Status<span class="text-danger">*</span></label>
                                <select name="marital_status" id="">
                                    <option disabled selected>Select Marital Status</option>
                                    <option value="married">Married</option>
                                    <option value="unmarried">Unmarried</option>
                                </select>
                                @error('marital_status')
                                <span class="text-red-500 text-sm">{{$message}}</span>
                                @enderror
                            </div>

                        </div>



                        <div class="row mt-3 mb-4">

                            <div class="col-6">
                                <label for="">Date Of Birth</label>
                                <input type="date" name="dob">
                                @error('dob')
                                <span class="text-red-500 text-sm">{{$message}}</span>
                                @enderror
                            </div>

                            <div class="col-6">
                                <label for="">Religion <span class="text-danger">*</span></label>
                                <select name="religion" id="">
                                    <option disabled selected>Select Religion</option>
                                    <option value="islam">Islam</option>
                                    <option value="hindu">Hindu</option>
                                    <option value="buddhist">Buddhist</option>
                                    <option value="christian">Christian</option>
                                    <option value="others">Others..</option>
                                </select>
                                @error('religion')
                                <span class="text-red-500 text-sm">{{$message}}</span>
                                @enderror
                            </div>

                        </div>

                        <div class="row mt-3 mb-4">

                            <div class="col-6">
                                <label for="">National Id</label>
                                <input type="number" name="nid">
                                @error('nid')
                                <span class="text-red-500 text-sm">{{$message}}</span>
                                @enderror
                            </div>

                            <div class="col-6 toggle-group">
                                <label for="">Blood Group</label>
                                <select name="blood_group" id="">
                                    <option disabled selected>Select Blood Group</option>
                                    <option value="A+">A+</option>
                                    <option value="A-">A-</option>
                                    <option value="B+">B+</option>
                                    <option value="B-">B-</option>
                                    <option value="O+">O+</option>
                                    <option value="O-">O-</option>
                                    <option value="AB-">AB-</option>
                                    <option value="AB+">AB+</option>
                                </select>
                                @error('blood_group')
                                <span class="text-red-500 text-sm">{{$message}}</span>
                                @enderror
                            </div>

                        </div>

                        <div class="row mt-3 mb-4">

                            <div class="col-6">
                                <label for="">Photos</label>
                                <input type="file" id="file" name="photo"><br>
                                <span style="color:red">Image Width = 262px and Height = 300px</span>
                                @error('photo')
                                <span class="text-red-500 text-sm">{{$message}}</span>
                                @enderror
                            </div>

                            <div class="col-6 toggle-group">
                                <label for="">Gender</label>
                                <select name="gender" id="">
                                    <option disabled selected>Select Gender</option>
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                    <option value="others">Others</option>
                                </select>
                                @error('gender')
                                <span class="text-red-500 text-sm">{{$message}}</span>
                                @enderror
                            </div>

                        </div>

                        <div class="row mt-3 mb-4">

                            <div class="col-6">
                                <label for="">Facebook Link</label>
                                <input type="text" name="fb_link">
                                @error('fb_link')
                                <span class="text-red-500 text-sm">{{$message}}</span>
                                @enderror
                            </div>

                        </div>

                    </div>

                </div>

                <div class="academic_info">
                    <h5>
                        <i class="fa-solid fa-circle-info"></i> Educational Qualification
                    </h5>

                    <div class="container" id="dynamicAddRemove">

                        <div class="row mt-3 mb-4">

                            <div class="col-6">
                                <label for="">Name of the Institue</label>
                                <input type="text" name="institute_names[]" id="">
                                @error('institute_names')
                                <span class="text-red-500 text-sm">{{$message}}</span>
                                @enderror
                            </div>

                            <div class="col-6">
                                <label for="">Name of the Degree</label>
                                <input type="text" name="degree_names[]" id="">
                                @error('degree_names')
                                <span class="text-red-500 text-sm">{{$message}}</span>
                                @enderror
                            </div>

                            <div class="col-6 mt-2">
                                <label for="">Country Name</label>
                                <input type="text" name="countries[]" id="">
                                @error('countries')
                                <span class="text-red-500 text-sm">{{$message}}</span>
                                @enderror
                            </div>

                            <div class="col-6">
                                <label for="">Major Subject </label>
                                <input type="text" name="major_subjects[]">
                                @error('major_subjects')
                                <span class="text-red-500 text-sm">{{$message}}</span>
                                @enderror
                            </div>

                            <div class="col-6 mt-2">
                                <a href="javascript:void(0)" id="ar_dynamic" class="add_qualification_field">
                                    <i class="fa-solid fa-plus"></i>
                                </a>
                            </div>

                        </div>


                    </div>

                </div>

                <div class="academic_info">
                    <h5>
                        <i class="fa-solid fa-circle-info"></i> Contact Information
                    </h5>

                    <div class="container">

                        <div class="row mt-3 mb-4">

                            <div class="col-6">
                                <label for="">Present Address <span class="text-danger">*</span></label>
                                <textarea name="present_address" id="" cols="30" rows="10"></textarea>
                                @error('present_address')
                                <span class="text-red-500 text-sm">{{$message}}</span>
                                @enderror
                            </div>

                            <div class="col-6">
                                <label for="">Permanent Address <span class="text-danger">*</span></label>
                                <textarea name="permanent_address" id="" cols="30" rows="10"></textarea>
                                @error('permanent_address')
                                <span class="text-red-500 text-sm">{{$message}}</span>
                                @enderror
                            </div>

                        </div>

                    </div>

                </div>


                <p class="text-center">
                    <button type="submit" class="btn btn-primary px-5">Create</button>
                    <a href="#" class="btn text-white px-5" style="background-color: red;">Cancel</a>
                </p>

            </form>

        </div>
    </section>

</div>
@endcan
@endsection

@section('fotter_js')
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
<script type="text/javascript">
    var i = 0;
    $("#ar_dynamic").click(function() {
        ++i;
        $("#dynamicAddRemove").append('<div class="row mt-3 mb-4" id="field_row"><div class="col-6"><label for="">Name of the Institue</label><input type="text" name="institute_names[]" id="">@error("institute_name")<span class="text-red-500 text-sm">{{$message}}</span>@enderror</div><div class="col-6"><label for="">Name of the Degree</label><input type="text" name="degree_names[]" id="">@error("degree_name")<span class="text-red-500 text-sm">{{$message}}</span>@enderror</div><div class="col-6 mt-2"><label for="">Country Name</label><input type="text" name="countries[]" id="">@error("country")<span class="text-red-500 text-sm">{{$message}}</span>@enderror</div><div class="col-6"><label for="">Major Subject </label><input type="text" name="major_subjects[]">@error("major_subject")<span class="text-red-500 text-sm">{{$message}}</span>@enderror</div><div class="col-6 mt-2"><button type="button" class="btn btn-outline-danger remove-input-field">Delete</button></div></div>');
    });
    $(document).on('click', '.remove-input-field', function() {
        $(this).parents('#field_row').remove();
    });
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    $(document).ready(function() {

        $('#employee-id').on('change', function() {
            var idType = this.value;
            // $("#designation-id").html('');
            $.ajax({
                url: "{{url('hr/api/fetch-designation')}}",
                type: "POST",
                data: {
                    type_id: idType,
                    _token: '{{csrf_token()}}'
                },
                dataType: 'json',
                success: function(result) {
                    $('#designation-id').html('<option disabled selected>Select Designation</option>');
                    $.each(result.designations, function(key, value) {
                            $("#designation-id").append('<option value="' + value
                                .id + '">' + value.title + '</option>');
                    });

                    // console.log(result.designations)
                }
            });
        });

        /*------------------------------------------
        --------------------------------------------
        State Dropdown Change Event
        --------------------------------------------
        --------------------------------------------*/
        $('#state-dropdown').on('change', function() {
            var idState = this.value;
            $("#city-dropdown").html('');
            $.ajax({
                url: "{{url('api/fetch-cities')}}",
                type: "POST",
                data: {
                    state_id: idState,
                    _token: '{{csrf_token()}}'
                },
                dataType: 'json',
                success: function(res) {
                    $('#city-dropdown').html('<option value="">-- Select City --</option>');
                    $.each(res.cities, function(key, value) {
                        $("#city-dropdown").append('<option value="' + value
                            .id + '">' + value.name + '</option>');
                    });
                }
            });
        });

    });
</script>
@endsection
