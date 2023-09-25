@extends('layouts.AdminPanal')
@section('content')
<div class="u-body">
    <section class="es-form-area">
        <div class="card">
            <header class="card-header bg-gradient border-0 pt-5 pb-5 d-flex align-items-center">
                <h2 class="text-white mb-0">Employee Search</h2>
            </header>

            <div class="academic_info student_search">
                @if($errors->any())
                <h4><span style="color:red">{{$errors->first()}}</span></h4>
                @endif
                <form action="{{route('searched.employee')}}" method="post">
                    @csrf

                    <div class="container">

                        <div class="row mt-3 mb-4">

                            <div class="col-12 col-md-6 col-lg-4">
                                <label for="">Type <span class="text-danger">*</span></label>
                                <select name="type" id="">
                                    <option disabled selected>All</option>
                                    @foreach($all_types as $types)
                                    <option value="{{$types->id}}">{{$types->name}}</option>
                                    @endforeach
                                </select>
                                @error('type')
                                <span class="text-red-500 text-sm">{{$message}}</span>
                                @enderror
                            </div> <br><br>

                            <div class="col-12 col-md-6 col-lg-4">
                                <label for="">Working Shift <span class="text-danger">*</span></label>
                                <select name="working_shift" id="">
                                    <option disabled selected>All</option>
                                    @foreach($all_working_shifts as $ws)
                                    <option value="{{$ws->id}}">{{$ws->name}}</option>
                                    @endforeach
                                </select>
                                @error('working_shift')
                                <span class="text-red-500 text-sm">{{$message}}</span>
                                @enderror
                            </div><br><br>

                            <div class="col-12 col-md-6 col-lg-4">
                                <label for="">Designation<span class="text-danger">*</span></label>
                                <select name="designation" id="">
                                    <option disabled selected>Select Designation</option>
                                    @foreach($all_designations as $designation)
                                    <option value="{{$designation->id}}">{{$designation->title}}</option>
                                    @endforeach
                                </select>
                                @error('designation')
                                <span class="text-red-500 text-sm">{{$message}}</span>
                                @enderror
                            </div><br><br>

                        </div>

                        <div class="row mt-3 mb-4">

                            <div class="col-12 col-md-6 col-lg-4">
                                <label for="">Gender <span class="text-danger">*</span></label>
                                <select name="gender" id="">
                                    <option disabled selected>Select Gender</option>
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                    <option value="others">others</option>
                                </select>
                                @error('gender')
                                <span class="text-red-500 text-sm">{{$message}}</span>
                                @enderror
                            </div><br><br>

                            <div class="col-12 col-md-6 col-lg-4">
                                <label for="">Marital Status <span class="text-danger">*</span></label>
                                <select name="marital_status" id="">
                                    <option disabled selected>Select Marital Status</option>
                                    <option value="married">Married</option>
                                    <option value="unmarried">Unmarried</option>
                                </select>
                                @error('marital_status')
                                <span class="text-red-500 text-sm">{{$message}}</span>
                                @enderror
                            </div><br><br>

                            <div class="col-12 col-md-6 col-lg-4">
                                <label for="">Blood Group <span class="text-danger">*</span></label>
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
                            </div><br><br>

                        </div>


                        <div class="row mt-3 mb-4">

                            <div class="col-12 col-md-6 col-lg-4">
                                <label for="">Date Of Birth </label>
                                <input type="date" name="dob" id="">
                                @error('dob')
                                <span class="text-red-500 text-sm">{{$message}}</span>
                                @enderror
                            </div><br><br>

                            <div class="col-12 col-md-6 col-lg-4">
                                <label for="">Employee ID </label>
                                <input type="text" name="emp_id" id="">
                            </div><br><br>
                            <div class="col-2" style="margin-top: 30px; margin-right:10px">
                                <p class="text-center">
                                    <button type="submit" class="btn btn-primary px-5">Search</button>
                                </p>
                            </div><br><br>


                        </div>

                    </div>

                </form>


            </div>





        </div>
    </section>

</div>
@endsection