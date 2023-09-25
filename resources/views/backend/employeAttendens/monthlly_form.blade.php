@extends('layouts.AdminPanal')
@section('content')
<div class="u-body">
    <section class="es-form-area">
        <div class="card">
            <header class="card-header bg-gradient border-0 pt-5 pb-5 d-flex align-items-center">
                <h2 class="text-white mb-0">Employee Attendence Summary Monthly</h2>
            </header>

            <div class="academic_info student_search">

                <div class="container">
                    <form action="{{route('employee.monthly.attendance.details')}}" method="post">
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
                                <p style="color: red;">{{$message}}</p>
                                @enderror
                            </div><br><br>

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
                        <!-- 
                    <div class="row mt-3 mb-4">

                        <div class="col-12 col-md-6 col-lg-4">
                            <label for="">Date <span class="text-danger">*</span></label>
                            <input type="date" name="" id="">
                        </div>

                    </div> -->
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