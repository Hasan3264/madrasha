@extends('layouts.AdminPanal')
@section('content')
<div class="u-body">
    <section class="es-form-area">
        <div class="card">
            <header class="card-header bg-gradient border-0 pt-5 pb-5 d-flex align-items-center">
                <h2 class="text-white mb-0">Update Employee</h2>
            </header>

            <form action="{{route('update.employee', $pro_infos->id)}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="academic_info">

                    <h5>
                        <i class="fa-solid fa-circle-info"></i> Professional Information
                    </h5>
                    <div class="container">
                        <div class="row mt-3 mb-4">
                            <div class="col-6">
                                <label for="">Desgination <span>*</span></label>
                                <select name="desg_id" id="">
                                    <option>Select Desgination</option>
                                    @foreach($all_designations as $designation)
                                    <option value="{{$designation->id}}" {{ $designation->id == $pro_infos->desg_id ? 'selected' : '' }}>{{$designation->title}}</option>
                                    @endforeach
                                </select>
                                @error('designation')
                                <span class="text-red-500 text-sm">{{$message}}</span>
                                @enderror
                            </div>
                            <div class="col-6">
                                <label for="">Employee Type <span>*</span></label>
                                <select name="emp_type_id" id>
                                    <option>Select Employee Type</option>
                                    @foreach($all_emptypes as $emp_type)
                                    <option value="{{$emp_type->id}}" {{ $emp_type->id == $pro_infos->emp_type_id ? 'selected' : '' }}>{{$emp_type->name}}</option>
                                    @endforeach
                                </select>
                                @error('emp_type_id')
                                <span class="text-red-500 text-sm">{{$message}}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mt-3 mb-4">

                            <div class="col-6">
                                <label for="">Working Shift</label>
                                <select name="ws_id" id="">
                                    <option value="">Select Shift Name</option>
                                    @foreach($all_working_shifts as $shifts)
                                    <option value="{{$shifts->id}}" {{ $shifts->id == $pro_infos->ws_id ? 'selected' : '' }}>{{$shifts->name}}</option>
                                    @endforeach
                                </select>
                                @error('ws_id')
                                <span class="text-red-500 text-sm">{{$message}}</span>
                                @enderror
                            </div>

                            <div class="col-6">
                                <label for="">Joining Date </label>
                                <input type="date" name="joining_date" value="{{$pro_infos->joining_date}}">
                                @error('joining_date')
                                <span class="text-red-500 text-sm">{{$message}}</span>
                                @enderror
                            </div>

                        </div>

                        <div class="row mt-3 mb-4">
                            <div class="col-6">
                                <label for="">Rank <span>*</span> </label>
                                <input type="text" name="rank" value="{{$pro_infos->rank}}">
                                @error('rank')
                                <span class="text-red-500 text-sm">{{$message}}</span>
                                @enderror
                            </div>
                            

                            <div class="col-6 toggle-group">
                                <label for="">Bank Account No</label>
                                <input type="text" name="bank_acc_no" value="{{$pro_infos->bank_acc_no}}">
                                @error('bank_acc_no')
                                <span class="text-red-500 text-sm">{{$message}}</span>
                                @enderror
                            </div>

                        </div>

                        <div class="row mt-3 mb-4">

                            <div class="col-6 toggle-group">
                                <label for="">Previous Designation</label>
                                <input type="text" name="prev_des" value="{{$pro_infos->prev_des}}">
                                @error('prev_des')
                                <span class="text-red-500 text-sm">{{$message}}</span>
                                @enderror
                            </div>

                            <div class="col-6 toggle-group">
                                <label for="">Previous Institute</label>
                                <input type="text" name="prev_inst" value="{{$pro_infos->prev_inst}}">
                                @error('prev_inst')
                                <span class="text-red-500 text-sm">{{$message}}</span>
                                @enderror
                            </div>

                        </div>

                        <div class="row mt-3 mb-4">

                            

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
                                <input type="text" name="name" id="" value="{{$personal_infos->name}}">
                                @error('name')
                                <span class="text-red-500 text-sm">{{$message}}</span>
                                @enderror
                            </div>

                            <div class="col-6">
                                <label for="">Father's Name <span class="text-danger">*</span></label>
                                <input type="text" name="father_name" id="" value="{{$personal_infos->father_name}}">
                                @error('father_name')
                                <span class="text-red-500 text-sm">{{$message}}</span>
                                @enderror
                            </div>

                        </div>

                        <div class="row mt-3 mb-4">

                            <div class="col-6">
                                <label for="">Mobile <span class="text-danger">*</span></label>
                                <input type="text" name="mobile" id="" value="{{$personal_infos->mobile}}">
                                @error('mobile')
                                <span class="text-red-500 text-sm">{{$message}}</span>
                                @enderror
                            </div>

                            <div class="col-6">
                                <label for="">Mother's Name <span class="text-danger">*</span></label>
                                <input type="text" name="mother_name" id="" value="{{$personal_infos->mother_name}}">
                                @error('mother_name')
                                <span class="text-red-500 text-sm">{{$message}}</span>
                                @enderror
                            </div>

                        </div>

                        <div class="row mt-3 mb-4">

                            <div class="col-6">
                                <label for="">Email</label>
                                <input type="text" name="email" value="{{$personal_infos->email}}">
                                @error('email')
                                <span class="text-red-500 text-sm">{{$message}}</span>
                                @enderror
                            </div>

                            <div class="col-6">
                                <label for="">Matarial Status<span class="text-danger">*</span></label>
                                <select name="marital_status" id="">
                                    <option value="married" {{ $personal_infos->marital_status == "married" ? 'selected' : '' }}>Married</option>
                                    <option value="unmarried" {{ $personal_infos->marital_status == "unmarried" ? 'selected' : '' }}>Unmarried</option>
                                </select>
                                @error('marital_status')
                                <span class="text-red-500 text-sm">{{$message}}</span>
                                @enderror
                            </div>

                        </div>



                        <div class="row mt-3 mb-4">

                            <div class="col-6">
                                <label for="">Date Of Birth</label>
                                <input type="date" name="dob" value="{{$personal_infos->dob}}">
                                @error('dob')
                                <span class="text-red-500 text-sm">{{$message}}</span>
                                @enderror
                            </div>

                            <div class="col-6">
                                <label for="">Religion <span class="text-danger">*</span></label>
                                <select name="religion" id="">
                                    <option value="islam" {{ $personal_infos->religion == "islam" ? 'selected' : '' }}>Islam</option>
                                    <option value="hindu" {{ $personal_infos->religion == "hindu" ? 'selected' : '' }}>Hindu</option>
                                    <option value="buddhist" {{ $personal_infos->religion == "buddhist" ? 'selected' : '' }}>Buddhist</option>
                                    <option value="christian" {{ $personal_infos->religion == "christian" ? 'selected' : '' }}>Christian</option>
                                    <option value="others" {{ $personal_infos->religion == "others" ? 'selected' : '' }}>Others..</option>
                                </select>
                                @error('religion')
                                <span class="text-red-500 text-sm">{{$message}}</span>
                                @enderror
                            </div>

                        </div>

                        <div class="row mt-3 mb-4">

                            <div class="col-6">
                                <label for="">National Id</label>
                                <input type="number" name="nid" value="{{$personal_infos->nid}}">
                                @error('nid')
                                <span class="text-red-500 text-sm">{{$message}}</span>
                                @enderror
                            </div>

                            <div class="col-6 toggle-group">
                                <label for="">Blood Group</label>
                                <select name="blood_group" id="">
                                    <option value="A+" {{ $personal_infos->blood_group == "A+" ? 'selected' : '' }}>A+</option>
                                    <option value="A-" {{ $personal_infos->blood_group == "A-" ? 'selected' : '' }}>A-</option>
                                    <option value="B+" {{ $personal_infos->blood_group == "B+" ? 'selected' : '' }}>B+</option>
                                    <option value="B-" {{ $personal_infos->blood_group == "B-" ? 'selected' : '' }}>B-</option>
                                    <option value="O+" {{ $personal_infos->blood_group == "O+" ? 'selected' : '' }}>O+</option>
                                    <option value="O-" {{ $personal_infos->blood_group == "O-" ? 'selected' : '' }}>O-</option>
                                    <option value="AB-" {{ $personal_infos->blood_group == "AB-" ? 'selected' : '' }}>AB-</option>
                                    <option value="AB+" {{ $personal_infos->blood_group == "AB+" ? 'selected' : '' }}>AB+</option>
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
                                    <option value="male" {{ $personal_infos->gender == "male" ? 'selected' : '' }}>Male</option>
                                    <option value="female" {{ $personal_infos->gender == "female" ? 'selected' : '' }}>Female</option>
                                    <option value="others" {{ $personal_infos->gender == "others" ? 'selected' : '' }}>Others</option>
                                </select>
                                @error('gender')
                                <span class="text-red-500 text-sm">{{$message}}</span>
                                @enderror
                            </div>

                        </div>

                        <div class="row mt-3 mb-4">

                            <div class="col-6">
                                <label for="">Facebook Link</label>
                                <input type="text" name="fb_link" value="{{$personal_infos->fb_link}}">
                                @error('fb_link')
                                <span class="text-red-500 text-sm">{{$message}}</span>
                                @enderror
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
                                <textarea name="present_address" value="{{$personal_infos->present_address}}" id="" cols="30" rows="10"></textarea>
                                @error('present_address')
                                <span class="text-red-500 text-sm">{{$message}}</span>
                                @enderror
                            </div>

                            <div class="col-6">
                                <label for="">Permanent Address <span class="text-danger">*</span></label>
                                <textarea name="permanent_address" value="{{$personal_infos->permanent_address}}" id="" cols="30" rows="10"></textarea>
                                @error('permanent_address')
                                <span class="text-red-500 text-sm">{{$message}}</span>
                                @enderror
                            </div>

                        </div>

                    </div>

                </div>


                <p class="text-center">
                    <button type="submit" class="btn btn-primary px-5">Update</button>
                    <a href="#" class="btn text-white px-5" style="background-color: red;">Cancel</a>
                </p>

            </form>

        </div>
    </section>

</div>
@endsection