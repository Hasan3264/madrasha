@extends("layouts.AdminPanal")
@section("content")
<div class="u-body">
    @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif
    <section class="es-form-area">
        <div class="card">
            <header class="card-header bg-gradient border-0 pt-5 pb-5 d-flex align-items-center">
                <h2 class="text-white mb-0">Edit Student</h2>
            </header>

            <form action="{{route('students.update')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="id" value="{{$student_info->id }}">
                <input type="hidden" name="StudentInfo_id" value="{{$student_info->StudentInfo_id }}">
                <div class="academic_info">
                    <h5>
                        <i class="fa-solid fa-circle-info"></i> Acamedic Information
                    </h5>

                    <div class="container">

                        <div class="row mt-3 mb-4">
                            <div class="col-6">
                                <label for="">Shift <span class="text-danger">*</span></label>
                                <select name="shift_name" id="" >
                                    <option selected disabled>Select Shift</option>
                                    @foreach($all_shift as $item)
                                    <option value="{{ $item }}" {{ $item == $student_info->StudentAdmit->shift_name ?'selected':''}}>{{ $item}}</option>
                                    @endforeach
                                </select>
                            </div>

                        </div>

                        <div class="row mt-3 mb-4">

                            <div class="col-6">
                                <label for="">Class <span class="text-danger">*</span></label>
                                <select name="class_name" id="" >

                                    @foreach($all_medium as $medium)
                                    <option value="{{ $medium->medium_code }} class="bold_text" disabled>{{ $medium->medium_name }}</option>
                                        @foreach($all_class as $item)
                                        @if($item->medium_name == $medium->medium_code)
                                        <option value="{{$item->class_code}}" {{ $item->class_code == $student_info->StudentAdmit->class_name ?'selected':'' }} class="bold_text">{{$item->class_name}}</option>
                                        @endif
                                        @endforeach
                                    @endforeach
                                </select>
                            </div>

                        </div>

                        <div class="row mt-3 mb-4">

                            <div class="col-6">
                                <label for="">Student ID <span class="text-danger">*</span></label>
                                <input type="text" name="student_id"  value="{{$student_info->StudentAdmit->student_id}}">
                            </div>

                        </div>

                        <div class="row mt-3 mb-4">
                            <div class="col-6">
                                <label for="">Roll No <span class="text-danger">*</span></label>
                                <input type="text" name="roll_number"  value="{{$student_info->StudentAdmit->roll_number}}">
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
                                <label for="">Name(In English) <span class="text-danger">*</span></label>
                                <input type="text" name="student_name_en" id="" value="{{$student_info->student_name_en}}">
                            </div>

                            <div class="col-6">
                                <label for="">Blood Group <span class="text-danger">*</span></label>
                                <input type="text" name="blood_group" id="" value="{{$student_info->blood_group}}">
                            </div>

                        </div>

                        <div class="row mt-3 mb-4">

                            <div class="col-6">
                                <label for="">Name(In Bengali) <span class="text-danger">*</span></label>
                                <input type="text" name="student_name_bn" id="" value="{{$student_info->student_name_bn}}" >
                            </div>

                            <div class="col-6">
                                <label for="">Religion <span class="text-danger">*</span></label>
                                <select name="religion" id="" >
                                    <option selected disabled>Select Religion</option>
                                    <option value="Islam" {{$student_info->religion =='Islam'?'selected':''}}>Islam</option>
                                    <option value="Hindu" {{$student_info->religion =='Hindu'?'selected':''}}>Hindu</option>
                                    <option value="Buddo"{{$student_info->religion =='Buddo'?'selected':''}}>Buddo</option>
                                </select>
                            </div>

                        </div>

                        <div class="row mt-3 mb-4">
                            <div class="col-6">
                                <label for="">Student ID <span class="text-danger">*</span></label>
                                <input type="text" name="student_id" value="{{$student_info->student_id}}">
                            </div>
                            <div class="col-6">
                                <label for="">Birth/Nid <span class="text-danger">*</span></label>
                                <input type="text" name="student_identity">
                            </div>

                        </div>

                        <div class="row mt-3 mb-4">

                            <div class="col-6">
                                <label for="">Date Of Birth</label>
                                <input type="date" name="birth_date"  value="{{ $student_info->birth_date }}">
                            </div>

                            <div class="col-6">
                                <label for="">Nationality <span class="text-danger">*</span></label>
                                <input type="text" name="nationality"  value="{{$student_info->nationality}}">
                            </div>

                        </div>

                        <div class="row mt-3 mb-4">

                            <div class="col-6">
                                <label for="">Gender</label>
                                <select name="gender" id="" >
                                    <option value="male" {{$student_info->gender=='male'?'selected':''}}>Male</option>
                                    <option value="female" {{$student_info->gender=='female'?'selected':''}}>Female</option>
                                    <option value="other"{{$student_info->gender=='other'?'selected':''}}>other</option>
                                </select>
                            </div>

                            <div class="col-6 toggle-group">
                                <label for="">Photo</label>
                                <input type="file" name="photo" id="file" value="{{$student_info->photo? asset($student_info->photo):''}}">
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
                                <label for="">Mobile <span class="text-danger">*</span></label>
                                <input type="text" name="phone" id=""  value="{{$student_info->phone}}">
                            </div>

                            <div class="col-6">
                                <label for="">Email</label>
                                <input type="text" name="email" id="" value="{{$student_info->email}}">
                            </div>

                        </div>

                        <div class="row mt-3 mb-4">

                            <div class="col-6">
                                <label for="">Present Address <span class="text-danger">*</span></label>
                                <textarea name="present_address" id="" cols="30" rows="10" value="{{$student_info->present_address}}" >{{$student_info->present_address}}</textarea>
                            </div>

                            <div class="col-6">
                                <label for="">Parmanant Address <span class="text-danger">*</span></label>
                                <textarea name="permanent_address" id="" cols="30" rows="10" value="{{$student_info->permanent_address}}" >{{$student_info->permanent_address}}</textarea>
                                <br>
                                <input type="checkbox" name="checkbox" id="check"><span>Same as parmanant</span>
                            </div>

                        </div>

                    </div>

                </div>


                <div class="academic_info">
                    <h5>
                        <i class="fa-solid fa-circle-info"></i> Parents Information
                    </h5>

                    <div class="container">

                        <div class="row mt-3 mb-4">

                            <div class="col-6">
                                <label for="">Father's Name <span class="text-danger">*</span></label>
                                <input type="text" name="father_name" id=""  value="{{$student_info->father_name}}">
                            </div>

                            <div class="col-6">
                                <label for="">Mother's Name <span class="text-danger">*</span></label>
                                <input type="text" name="mother_name" id="" value="{{$student_info->mother_name}}">
                            </div>

                        </div>

                        <div class="row mt-3 mb-4">

                            <div class="col-6">
                                <label for="">Father's Phone <span class="text-danger">*</span></label>
                                <input type="text" name="father_phone" id=""  value="{{$student_info->father_phone}}">
                            </div>

                            <div class="col-6">
                                <label for="">Mother's Phone <span class="text-danger">*</span></label>
                                <input type="text" name="mother_phone" id=""  value="{{$student_info->mother_phone}}">
                            </div>

                        </div>

                        <div class="row mt-3 mb-4">

                            <div class="col-6">
                                <label for="">Father's NID</label>
                                <input type="text" name="father_nid" id="" value="{{$student_info->father_nid}}">
                            </div>

                            <div class="col-6">
                                <label for="">Mother's NID</label>
                                <input type="text" name="mother_nid" id="" value="{{$student_info->mother_nid}}">
                            </div>

                        </div>

                        <div class="row mt-3 mb-4">

                            <div class="col-6">
                                <label for="">Father's Profession</label>
                                <input type="text" name="father_profession" id="" value="{{$student_info->father_profession}}">
                            </div>

                            <div class="col-6">
                                <label for="">Mother's Profession</label>
                                <input type="text" name="mother_profession" id="" value="{{$student_info->mother_profession}}">
                            </div>

                        </div>

                        <div class="row mt-3 mb-4">

                            <div class="col-6">
                                <label for="">Father's Designation</label>
                                <input type="text" name="father_designation" id="" value="{{$student_info->father_designation}}">
                            </div>

                            <div class="col-6">
                                <label for="">Mother's Designation</label>
                                <input type="text" name="mother_designation" id="" value="{{$student_info->mother_designation}}">
                            </div>

                        </div>

                        <div class="row mt-3 mb-4">

                            <div class="col-6">
                                <label for="">Office Name & Addres</label>
                                <textarea name="father_office_name_address" id="" cols="30" rows="10" value="{{$student_info->father_office_name_address}}">{{$student_info->father_office_name_address}}</textarea>
                            </div>

                            <div class="col-6">
                                <label for="">Office Name & Addres</label>
                                <textarea name="mother_office_name_address" id="" cols="30" rows="10" value="{{$student_info->mother_office_name_address}}">{{$student_info->mother_office_name_address}}"</textarea>
                            </div>

                        </div>

                        <div class="row mt-3 mb-4">

                            <div class="col-6">
                                <label for="">Father's Office Contact No.</label>
                                <input type="text" name="father_office_contact_no" id="" value="{{$student_info->father_office_contact_no}}">
                            </div>

                            <div class="col-6">
                                <label for="">Mother's Office Contact No.</label>
                                <input type="text" name="mother_office_contact_no" id="" value="{{$student_info->mother_office_contact_no}}">
                            </div>

                        </div>

                        <div class="row mt-3 mb-4">

                            <div class="col-6">
                                <label for="">Father's Photo</label>
                                <input type="file" name="father_photo" id="file"{{$student_info->father_photo?$student_info->father_photo:''}}>
                            </div>

                            <div class="col-6">
                                <label for="">Mother's Photo</label>
                                <input type="file" name="mother_photo" id="" value="{{$student_info->StudentAdmit->device_serial}}">
                            </div>

                        </div>

                    </div>

                </div>


                <div class="academic_info">
                    <h5>
                        <i class="fa-solid fa-circle-info"></i> Guardian / Receiver Information
                    </h5>

                    <div class="container">

                        <div class="row mt-3 mb-4">

                            <div class="col-6">
                                <label for="">Guardian / Receiver</label>
                                <input type="checkbox" name="guardian_receiver" id="check" value="Father"{{$student_info->guardian_receiver =='Father'?'checked':''}}><span>Father</span>
                                <input type="checkbox" name="guardian_receiver" id="check" value="Mother"{{$student_info->guardian_receiver =='Mother'?'checked':''}}><span>Mother</span>
                                <input type="checkbox" name="guardian_receiver" id="check" value="Other"{{$student_info->guardian_receiver =='Other'?'checked':''}} value="Other"><span>Other</span>
                            </div>

                            <div class="col-6">
                                <label for="">Guardian's Profession</label>
                                <input type="text" name="guardian_profession" id="" value="{{$student_info->guardian_profession}}">
                            </div>

                        </div>

                        <div class="row mt-3 mb-4">

                            <div class="col-6">
                                <label for="">Guardian's Name <span class="text-danger">*</span></label>
                                <input type="text" name="guardian_name" id=""  value="{{$student_info->guardian_name}}">
                            </div>

                            <div class="col-6">
                                <label for="">Guardian's Designation</label>
                                <input type="text" name="guardian_designation" id="" value="{{$student_info->guardian_designation}}">
                            </div>

                        </div>

                        <div class="row mt-3 mb-4">

                            <div class="col-6">
                                <label for="">Relation With Student</label>
                                <input type="text" name="guardian_relation" id="" value="{{$student_info->guardian_relation}}">
                            </div>

                            <div class="col-6">
                                <label for="">Office Contact No.</label>
                                <input type="text" name="guardian_office_no" id="" value="{{$student_info->guardian_office_no}}">
                            </div>

                        </div>

                        <div class="row mt-3 mb-4">

                            <div class="col-6">
                                <label for="">Guardian's Phone <span>*</span></label>
                                <input type="text" name="guardian_phone" id=""  value="{{$student_info->guardian_phone}}">
                            </div>

                            <div class="col-6">
                                <label for="">Office Name & Address</label>
                                <input type="text" name="guardian_office_name_address" id="" value="{{$student_info->guardian_office_name_address}}">
                            </div>

                        </div>

                        <div class="row mt-3 mb-4">

                            <div class="col-6">
                                <label for="">Status</label>
                                <select name="status" id="">
                                    <option value="active" {{$student_info->status=='active'?'active':'inactive'}}>Active</option>
                                    <option value="inactive" {{$student_info->status=='active'?'active':'inactive'}}>Deactive</option>
                                </select>
                            </div>
                        </div>

                    </div>

                </div>

                <p class="text-center">
                    <button type="submit" class="btn btn-primary px-5">Save</button>
                </p>
            </form>
        </div>
    </section>

</div>
@endsection
