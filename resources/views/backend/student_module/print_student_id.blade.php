@extends('layouts.AdminPanal')
@section('content')
<div class="u-body">
    <section class="es-form-area">
        <div class="card">
            <header class="card-header bg-gradient border-0 pt-5 pb-5 d-flex align-items-center">
                <h2 class="text-white mb-0">Student ID Card</h2>
            </header>

        <form action="{{ route('print_id_card') }}" method="POST">
            @csrf

            <div class="academic_info student_search">
                <h5>
                </h5>

                <div class="container">

                    <div class="row mt-3 mb-4">

                        <div class="col-12 col-lg-4">
                            <label for="">Session <span class="text-danger">*</span></label>
                            <select name="session_name" id="" required>
                                <option selected disabled>Select Session</option>
                                @foreach($all_session as $item)
                                <option value="{{ $item->name }}">{{ $item->name}}</option>
                                @endforeach
                            </select>
                             @error('session_name')
                                   <br>
                                    <span style="color: red;"> {{$message}} </span>
                            @enderror

                        </div> <br><br>

                        <div class="col-12 col-lg-4">
                            <label for="">Class Name <span class="text-danger">*</span></label>
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
                                @error('class_name')
                                    <br>
                                    <span style="color: red;"> {{$message}} </span>
                                @enderror
                        </div> <br><br>

                        <div class="col-12 col-lg-4">
                            <label for="">Shift <span class="text-danger">*</span></label>
                            <select name="shift_name" id="" required>
                                  <option selected disabled>Select Shift</option>
                                    @foreach($all_shift as $item)
                                    <option value="{{ $item }}">{{ $item}}</option>
                                    @endforeach
                            </select>
                            @error('shift_name')
                                   <br>
                                    <span style="color: red;"> {{$message}} </span>
                            @enderror
                        </div> <br><br>

                    </div>

                    <div class="row mt-3 mb-4">

                        <div class="col-12 col-lg-4">
                            <label for="">Section <span class="text-danger">*</span></label>
                            <select name="section_name" id="" required>
                              <option selected disabled>Select Section</option>
                                    @foreach($all_section as $item)
                                    <option value="{{ $item->name}}">{{ $item->name}}</option>
                                    @endforeach
                            </select>
                                 @error('section_name')
                                   <br>
                                    <span style="color: red;"> {{$message}} </span>
                                @enderror
                        </div> <br><br>

                        <div class="col-12 col-lg-4">
                            <label for="">Student <span class="text-danger">*</span></label>
                            <select name="student" id="" required class="@error('student') is-invalid @enderror">
                                <option selected disabled>Select Student</option>
                                @foreach($all_student as $item)
                                <option value="{{$item->id}}">{{$item->student_id}} - {{$item->student_name_en}}</option>
                                @endforeach
                            </select>
                                @error('student')
                                   <br>
                                    <span style="color: red;"> {{$message}} </span>
                                @enderror
                        </div> <br><br>

                        <div class="col-12 col-lg-4">
                            <label for="">Valid Date <span class="text-danger">*</span></label>
                            <input type="date" name="validity_date" id="" required value="{{ old('validity_date') }}">
                        </div> <br><br>

                    </div>


                    <div class="row mt-3 mb-4">

                        <div class="col-12 col-lg-4">
                            <label for="">Establishment </label>
                            <input type="text" name="establishment" id="">
                        </div> <br><br>

                    </div>

                    <div class="row mt-3 mb-4">

                        <div class="col-12 col-lg-4">
                            <div class="sms_div">
                                <label class="switch" for="checkbox1">
                                    <input type="checkbox" id="checkbox1" name="show_session" value="1"/>
                                    <div class="slider round"></div>
                                </label>
                                <h6 class="checkbox_txt"> Show Session ?</h6>
                            </div>
                        </div> <br><br>

                        <div class="col-12 col-lg-4">
                            <div class="sms_div">
                                <label class="switch" for="checkbox2">
                                    <input type="checkbox" id="checkbox2" name="show_roll" value="1" />
                                    <div class="slider round"></div>
                                </label>
                                <h6 class="checkbox_txt" id="printCheck">Show Roll No.?</h6>
                            </div>
                        </div> <br><br>

                        <div class="col-12 col-lg-4">
                            <div class="sms_div">
                                <label class="switch" for="checkbox3">
                                    <input type="checkbox" id="checkbox3" name="show_blood" value="1" />
                                    <div class="slider round"></div>
                                </label>
                                <h6 class="checkbox_txt" id="printCheck">Blood Group ?</h6>
                            </div>
                        </div> <br><br>

                    </div>

                    <div class="row mt-3 mb-4">

                        <div class="col-12 col-lg-4">
                            <div class="sms_div">
                                <label class="switch" for="checkbox4">
                                    <input type="checkbox" id="checkbox4" name="show_shift" value="1" />
                                    <div class="slider round"></div>
                                </label>
                                <h6 class="checkbox_txt" id="printCheck"> Show Shift ?</h6>
                            </div>
                        </div> <br><br>

                        <div class="col-12 col-lg-4">
                            <div class="sms_div">
                                <label class="switch" for="checkbox5">
                                    <input type="checkbox" id="checkbox5" name="show_group" value="1"/>
                                    <div class="slider round"></div>
                                </label>
                                <h6 class="checkbox_txt" id="printCheck">Show Group ?</h6>
                            </div>
                        </div> <br><br>

                        <div class="col-12 col-lg-4">
                            <div class="sms_div">
                                <label class="switch" for="checkbox6">
                                    <input type="checkbox" id="checkbox6" name="show_picture" value="1"/>
                                    <div class="slider round"></div>
                                </label>
                                <h6 class="checkbox_txt " id="printCheck">Students Who has Picture ?</h6>
                            </div>
                        </div> <br><br>

                    </div>

                </div>

            </div>


            <p class="text-center">
                <button type="submit" class="btn btn-primary px-5">Submit</a>
            </p>
        </form>

        </div>
    </section>

</div>
@endsection
