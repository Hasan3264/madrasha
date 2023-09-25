@extends("layouts.AdminPanal")
@section("content")
<div class="u-body">
    <section class="es-form-area">
        <div class="card">
            <header class="card-header bg-gradient border-0 pt-5 pb-5 d-flex align-items-center">
                <h2 class="text-white mb-0">Add New Student</h2>
            </header>

            <form action="{{route('archive_students_store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="academic_info">
                    <h5>
                        <i class="fa-solid fa-circle-info"></i> Acamedic Information
                    </h5>

                    <div class="container">

                        <div class="row mt-3 mb-4">

                            <div class="col-6">
                                <label for="">Session <span class="text-danger">*</span></label>
                                <select name="session_name" id="" required>
                                    <option selected disabled>Select Session</option>
                                    @foreach($all_session as $item)
                                    <option value="{{ $item->name }}">{{ $item->name }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="col-6">
                                <label for="">Shift <span class="text-danger">*</span></label>
                                <select name="shift_name" id="" required>
                                    <option selected disabled>Select Shift</option>
                                    @foreach($all_shift as $item)
                                    <option value="{{ $item }}">{{ $item}}</option>
                                    @endforeach
                                </select>
                            </div>

                        </div>

                        <div class="row mt-3 mb-4">

                            <div class="col-6">
                                <label for="">Class <span class="text-danger">*</span></label>
                                <select name="class_name" id="" required>
                                    <option selected disabled>Select Class</option>
                                    @foreach($all_medium as $medium)
                                        <option value="{{ $medium->medium_code }} class="bold_text" disabled>{{ $medium->medium_name }}</option>
                                            @foreach($all_class as $item)
                                            @if($item->medium_name == $medium->medium_code)
                                            <option value="{{$item->class_code}}" class="bold_text">{{$item->class_name}}</option>
                                            @endif
                                            @endforeach
                                    @endforeach
                                </select>
                            </div>

                            <div class="col-6">
                                <label for="">Section <span class="text-danger">*</span></label>
                                <select name="section_name" id="" required>
                                    <option selected disabled>Select Section</option>
                                    @foreach($all_section as $item)
                                    <option value="{{ $item->name }}">{{ $item->name }}</option>
                                    @endforeach
                                </select>
                            </div>

                        </div>

                        <div class="row mt-3 mb-4">

                            <div class="col-6">
                                <label for="">Device Serial / MAC</label>
                                <input type="text" name="device_serial" placeholder="1" value="{{old('device_serial')}}">
                            </div>

                            <div class="col-6">
                                <label for="">Student ID <span class="text-danger">*</span></label>
                                <input type="text" name="student_id" required value="{{old('student_id')}}">
                            </div>

                        </div>

                        <div class="row mt-3 mb-4">

                            <div class="col-6">
                                <label for="">Tracking ID</label>
                                <input type="text" name="tracking_id" placeholder="Last Finger Id" value="{{old('tracking_id')}}">
                            </div>

                            <div class="col-6">
                                <label for="">Roll No <span class="text-danger">*</span></label>
                                <input type="text" name="roll_number" required value="{{old('roll_number')}}">
                            </div>

                        </div>

                        <div class="row mt-3 mb-4">

                            <div class="col-6">
                                <label for="">RFID Card No</label>
                                <input type="text" name="rfid_card_no" placeholder="No Depends On Device Id" value="{{old('rfid_card_no')}}">
                            </div>

                            <div class="col-6 toggle-group">
                                <div class="sms_div">
                                    <label class="switch" for="checkbox">
                                        <input type="checkbox" id="checkbox" name="attendance_sms" />
                                        <div class="slider round"></div>
                                    </label>
                                    <h6 class="checkbox_txt">Attendance SMS</h6>
                                </div>
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
                                <input type="text" name="student_name_en" id="" required value="{{old('student_name_en')}}">
                            </div>

                            <div class="col-6">
                                <label for="">Blood Group <span class="text-danger">*</span></label>
                                <input type="text" name="blood_group" id="" value="{{old('blood_group')}}" required>
                            </div>

                        </div>

                        <div class="row mt-3 mb-4">

                            <div class="col-6">
                                <label for="">Name(In Bengali) <span class="text-danger">*</span></label>
                                <input type="text" name="student_name_bn" id="" value="{{old('student_name_bn')}}" required>
                            </div>

                            <div class="col-6">
                                <label for="">Religion <span class="text-danger">*</span></label>
                                <select name="religion" id="" required>
                                    <option selected disabled>Select Religion</option>
                                    <option value="Islam">Islam</option>
                                    <option value="Hindu">Hindu</option>
                                    <option value="Buddo">Buddo</option>
                                </select>
                            </div>

                        </div>

                        <div class="row mt-3 mb-4">

                            <div class="col-6">
                                <label for="">Device Serial / MAC</label>
                                <input type="text" placeholder="1" name="device_serial" value="{{old('device_serial')}}">
                            </div>

                            <div class="col-6">
                                <label for="">Student ID <span class="text-danger">*</span></label>
                                <input type="text" name="student_id" required value="{{old('student_id')}}">
                            </div>

                        </div>

                        <div class="row mt-3 mb-4">

                            <div class="col-6">
                                <label for="">Date Of Birth</label>
                                <input type="date" name="birth_date" required>
                            </div>

                            <div class="col-6">
                                <label for="">Nationality <span class="text-danger">*</span></label>
                                <input type="text" name="nationality" required value="{{old('nationality')}}">
                            </div>

                        </div>

                        <div class="row mt-3 mb-4">

                            <div class="col-6">
                                <label for="">Gender</label>
                                <select name="gender" id="" required>
                                    <option selected disabled>Select Gender</option>
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                    <option value="other">other</option>
                                </select>
                            </div>

                            <div class="col-6 toggle-group">
                                <label for="">Photo</label>
                                <input type="file" name="photo" id="file" value="{{old('photo')}}">
                                <label for="file" id="fileCustom" class="add_messageFile"><i class="fa-solid fa-camera"></i> Choose Photo</label>
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
                                <input type="text" name="phone" id="" required value="{{old('phone')}}">
                            </div>

                            <div class="col-6">
                                <label for="">Email</label>
                                <input type="text" name="email" id="" value="{{old('email')}}">
                            </div>

                        </div>

                        <div class="row mt-3 mb-4">

                            <div class="col-6">
                                <label for="">Present Address <span class="text-danger">*</span></label>
                                <textarea name="present_address" id="" cols="30" rows="10" value="{{old('present_address')}}" required></textarea>
                            </div>

                            <div class="col-6">
                                <label for="">Parmanant Address <span class="text-danger">*</span></label>
                                <textarea name="permanent_address" id="" cols="30" rows="10" value="{{old('permanent_address')}}" required></textarea>
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
                                <input type="text" name="father_name" id="" required value="{{old('father_name')}}">
                            </div>

                            <div class="col-6">
                                <label for="">Mother's Name <span class="text-danger">*</span></label>
                                <input type="text" name="mother_name" id=""required value="{{old('mother_name')}}">
                            </div>

                        </div>

                        <div class="row mt-3 mb-4">

                            <div class="col-6">
                                <label for="">Father's Phone <span class="text-danger">*</span></label>
                                <input type="text" name="father_phone" id="" required value="{{old('father_phone')}}">
                            </div>

                            <div class="col-6">
                                <label for="">Mother's Phone <span class="text-danger">*</span></label>
                                <input type="text" name="mother_phone" id="" required value="{{old('mother_phone')}}">
                            </div>

                        </div>

                        <div class="row mt-3 mb-4">

                            <div class="col-6">
                                <label for="">Father's NID</label>
                                <input type="text" name="father_nid" id="" value="{{old('father_nid')}}">
                            </div>

                            <div class="col-6">
                                <label for="">Mother's NID</label>
                                <input type="text" name="mother_nid" id="" value="{{old('mother_nid')}}">
                            </div>

                        </div>

                        <div class="row mt-3 mb-4">

                            <div class="col-6">
                                <label for="">Father's Profession</label>
                                <input type="text" name="father_profession" id="" value="{{old('father_profession')}}">
                            </div>

                            <div class="col-6">
                                <label for="">Mother's Profession</label>
                                <input type="text" name="mother_profession" id="" value="{{old('mother_profession')}}">
                            </div>

                        </div>

                        <div class="row mt-3 mb-4">

                            <div class="col-6">
                                <label for="">Father's Designation</label>
                                <input type="text" name="father_designation" id="" value="{{old('father_designation')}}">
                            </div>

                            <div class="col-6">
                                <label for="">Mother's Designation</label>
                                <input type="text" name="mother_designation" id="" value="{{old('mother_designation')}}">
                            </div>

                        </div>

                        <div class="row mt-3 mb-4">

                            <div class="col-6">
                                <label for="">Office Name & Addres</label>
                                <textarea name="father_office_name_address" id="" cols="30" rows="10" value="{{old('father_office_name_address')}}"></textarea>
                            </div>

                            <div class="col-6">
                                <label for="">Office Name & Addres</label>
                                <textarea name="mother_office_name_address" id="" cols="30" rows="10" value="{{old('mother_office_name_address')}}"></textarea>
                            </div>

                        </div>

                        <div class="row mt-3 mb-4">

                            <div class="col-6">
                                <label for="">Father's Office Contact No.</label>
                                <input type="text" name="father_office_contact_no" id="" value="{{old('father_office_contact_no')}}">
                            </div>

                            <div class="col-6">
                                <label for="">Mother's Office Contact No.</label>
                                <input type="text" name="mother_office_contact_no" id="" value="{{old('mother_office_contact_no')}}">
                            </div>

                        </div>

                        <div class="row mt-3 mb-4">

                            <div class="col-6">
                                <label for="">Father's Photo</label>
                                <input type="file" name="father_photo" id="file" value="{{old('father_photo')}}">
                                <label for="file" id="fileCustom" class="add_messageFile"><i class="fa-solid fa-camera"></i> Choose Photo</label><br>
                                <label for=""><span>(maximum image size 300 KB)</span></label>
                            </div>

                            <div class="col-6">
                                <label for="">Mother's Photo</label>
                                <input type="file" name="mother_photo" id="" value="{{old('mother_photo')}}">
                                <label for="file" id="fileCustom" class="add_messageFile"><i class="fa-solid fa-camera"></i> Choose Photo</label><br>
                                <label for=""><span>(maximum image size 300 KB)</span></label>
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
                                <input type="checkbox" name="guardian_receiver" id="check" value="Father"><span>Father</span>
                                <input type="checkbox" name="guardian_receiver" id="check" value="Mother"><span>Mother</span>
                                <input type="checkbox" name="guardian_receiver" id="check"value="Other"><span>Other</span>
                            </div>

                            <div class="col-6">
                                <label for="">Guardian's Profession</label>
                                <input type="text" name="guardian_profession" id="" value="{{old('guardian_profession')}}">
                            </div>

                        </div>

                        <div class="row mt-3 mb-4">

                            <div class="col-6">
                                <label for="">Guardian's Name <span class="text-danger">*</span></label>
                                <input type="text" name="guardian_name" id="" required value="{{old('guardian_name')}}">
                            </div>

                            <div class="col-6">
                                <label for="">Guardian's Designation</label>
                                <input type="text" name="guardian_designation" id="" value="{{old('guardian_designation')}}">
                            </div>

                        </div>

                        <div class="row mt-3 mb-4">

                            <div class="col-6">
                                <label for="">Relation With Student</label>
                                <input type="text" name="guardian_relation" id="" value="{{old('guardian_relation')}}">
                            </div>

                            <div class="col-6">
                                <label for="">Office Contact No.</label>
                                <input type="text" name="guardian_office_no" id="" value="{{old('guardian_office_no')}}">
                            </div>

                        </div>

                        <div class="row mt-3 mb-4">

                            <div class="col-6">
                                <label for="">Guardian's Phone <span>*</span></label>
                                <input type="text" name="guardian_phone" id="" required value="{{old('guardian_phone')}}">
                            </div>

                            <div class="col-6">
                                <label for="">Office Name & Address</label>
                                <input type="text" name="guardian_office_name_address" id="" value="{{old('guardian_office_name_address')}}">
                            </div>

                        </div>

                        <div class="row mt-3 mb-4">

                            <div class="col-6">
                                <label for="">Status</label>
                                <select name="status" id="">
                                    <option value="active">Active</option>
                                    <option value="inactive">Deactive</option>
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
    @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif
</div>
@endsection
