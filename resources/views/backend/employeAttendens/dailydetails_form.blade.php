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
                    <form action="{{route('employee.daily.attendance.details')}}" method="post">
                        @csrf
                        <div class="row mt-3 mb-4">

                            <div class="col-12 col-md-6 col-lg-4">
                                <label for="">Type <span class="text-danger">*</span></label>
                                <select name="Type" id="type-id">
                                    <option disabled selected>All</option>
                                    @foreach($emp_type as $type)
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
                                <label for="">Shifts <span class="text-danger">*</span></label>
                                <select name="Shift" id="shift-id">
                                    <option disabled selected>All</option>
                                    @foreach($shifts as $shift)
                                    <option value="{{$shift->id}}">{{$shift->name}}</option>
                                    @endforeach
                                </select>
                                @error('Shift')
                                <p style="color: red;">{{$message}}</p>
                                @enderror
                            </div><br><br>
                            <div class="col-12 col-md-6 col-lg-4">
                                <label for="">Date <span class="text-danger">*</span></label>
                                <input type="date" name="date">
                                @error('date')
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