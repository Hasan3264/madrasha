@extends('layouts.AdminPanal')
@section('content')

    <div class="u-content">
    <div class="u-body">
        <section class="es-form-area">
            <div class="card">
                <header class="card-header bg-gradient border-0 pt-5 pb-5 d-flex align-items-center">
                    <h2 class="text-white mb-0">Student Attendence Details</h2>
                </header>
<form action="{{route('details_attendance')}}" method="post">
    @csrf
    <div class="academic_info student_search">


    <div class="container">

        <div class="row mt-3 mb-4">

            <div class="col-12 col-md-6 col-lg-4">
                <label for="">Session <span class="text-danger">*</span></label>
                    <select name="session_name" id="">
                        <option selected disabled>Select Session</option>
                        @foreach($all_session as $item)
                        <option value="{{ $item->name }}" {{ old('session_name') == $item->name ? 'selected' : '' }}>{{ $item->name}}</option>
                        @endforeach
                    </select><br>
                     @error('session_name')
                        <span style="color: red;">{{ $message }}</span>
                    @enderror
            </div> <br><br>

            <div class="col-12 col-md-6 col-lg-4">
                <label for="">Class Name <span class="text-danger">*</span></label>
            <select name="class_name" id="">
                <option selected disabled>Select Class</option>
            @foreach($all_medium as $medium)
                <option value="{{ $medium->medium_code }} class="bold_text" disabled>{{ $medium->medium_name }}</option>
                    @foreach($all_class as $item)
                    @if($item->medium_name == $medium->medium_code)
                    <option value="{{$item->class_code}}" class="bold_text"  {{ old('class_name') == $item->class_code ? 'selected' : '' }}>{{$item->class_name}}</option>
                    @endif
                    @endforeach
             @endforeach
            </select>
                                        <br>
                     @error('class_name')
                        <span style="color: red;">{{ $message }}</span>
                    @enderror
            </div> <br><br>

            <div class="col-12 col-md-6 col-lg-4">
                <label for="">Shift <span class="text-danger">*</span></label>
                <select name="shift_id" id="">
                                        <option selected disabled>Select Shift</option>
                                            @foreach($all_shift as $item)
                                            <option value="{{ $item->id }}" {{ old('shift_id') == $item->id ? 'selected' : '' }}>{{ $item->shift_name}}-({{ $medium->mediumName($item->medium_name)}})</option>
                                            @endforeach
                                        </select>
                                        <br>
                     @error('shift_id')
                        <span style="color: red;">{{ $message }}</span>
                    @enderror
            </div> <br><br>

        </div>

        <div class="row mt-3 mb-4">

            <div class="col-12 col-md-6 col-lg-4">
                <label for="">Section <span class="text-danger">*</span></label>
                <select name="section_name" id="" required>
                                    <option selected disabled>Select Section</option>
                                            @foreach($all_section as $item)
                                            <option value="{{ $item->name}}"  {{ old('section_name') == $item->name ? 'selected' : '' }}>{{ $item->name}}</option>
                                            @endforeach
                                    </select>
                                    <br>
                     @error('section_name')
                        <span style="color: red;">{{ $message }}</span>
                    @enderror
            </div> <br><br>

            <div class="col-12 col-md-6 col-lg-4">
                <label for="">Student <span class="text-danger">*</span></label>
                <select name="student" id="" required class="@error('student') is-invalid @enderror">
                                    <option selected disabled>Select Student</option>
                                    @foreach($all_student as $item)
                                    <option value="{{$item->id}}"  {{ old('student') == $item->id ? 'selected' : '' }}>{{$item->student_id}} - {{$item->student_name_en}}</option>
                                    @endforeach
                                </select>
                                <br>
                     @error('student')
                        <span style="color: red;">{{ $message }}</span>
                    @enderror
            </div><br><br>

            <div class="col-12 col-md-6 col-lg-4">
                <label for="">Month <span class="text-danger">*</span></label>
                <select name="month" id="">
                    <option disabled selected>Select Month</option>
                    @foreach($month as $item)
                        <option value="{{ $item }}"  {{ old('month') == $item ? 'selected' : '' }}>{{ $item }}</option>
                    @endforeach
                </select>
                <br>
                     @error('month')
                        <span style="color: red;">{{ $message }}</span>
                    @enderror
            </div> <br><br>

        </div>


        <div class="row mt-3 mb-4">


            <div class="col-12 col-md-6 col-lg-4">
                <label for="">Year</label>
                <select name="year" id="">
                    <option disabled selected>Select Year</option>
                    @foreach($year as $item)
                        <option value="{{ $item }}"  {{ old('year') == $item ? 'selected' : '' }}>{{ $item }}</option>
                    @endforeach
                </select>
                <br>
                     @error('year')
                        <span style="color: red;">{{ $message }}</span>
                    @enderror
            </div> <br><br>

        </div>

    </div>

    </div>


    <p class="text-center">
        <button type="submit" class="btn btn-primary px-5">Submit</button>
    </p>
</form>

<div class="container">
    <div class="d-flex justify-content-between mt-5">
    </div>
</div>

<div class="attendence_summary">
    <div class="attendence_summary_top text-center">
        <h1>Learning Campus (Main Branch)</h1>
        <a href="#">www.LearningCampus.com</a>
        <p>Mirpur-3, Dhaka</p>
        <h3>Attendance Details for the Month of 0 0</h3>
        <p>ID : 0, Name : 0</p>
        <h3>
            <span class="text-primary">Weekend : 0</span>,
            <span class="text-info">Holidays : 0</span>,
            <span class="text-danger">Absent : 0</span>,
            <span class="text-secondary">Green : 0</span>,
            <span class="text-warning"> Orange : 0</span>,
            <span class="text-danger"> Red : 0</span>
        </h3>
    </div>

    <div class="attendence_summary_mid table-responsive">

           <!---- student table  ----->
           <table class="table table-bordered mt-3 text-center table-striped">
            <thead class="table-bordered">
                <tr>
                    <th scope="col">SL</th>
                    <th scope="col">Date</th>
                    <th scope="col"><span style="color: green;">Attend</span>  / <span style="color: red;">Absent</span></th>
                    <th scope="col"><span style="color: green;">IN</span></th>
                    <th scope="col"><span style="color: red;">OUT</span></th>
                    <th scope="col">Middle Punches</th>
                    <th scope="col" ><span style="background-color: green;color: white;padding: 8px 14px;font-weight: 600;">G</span></th>
                    <th scope="col"><span style="background-color: yellow;color: white;padding: 8px 14px;font-weight: 600;">Y</span></th>
                    <th scope="col"><span style="background-color: red;color: white;padding: 8px 14px;font-weight: 600;">R</span></th>
                </tr>
            </thead>
            <tbody>


            </tbody>
        </table>
    <!---- /student table ----->
    </div>

</div>


</div>
</section>

</div>
</div>

@endsection
