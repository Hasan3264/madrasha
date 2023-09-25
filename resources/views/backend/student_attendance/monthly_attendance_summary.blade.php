@extends('layouts.AdminPanal')
@section('content')

    <div class="u-content">
    <div class="u-body">
        <section class="es-form-area">
            <div class="card">
                <header class="card-header bg-gradient border-0 pt-5 pb-5 d-flex align-items-center">
                    <h2 class="text-white mb-0">Student Attendence Summary Monthly</h2>
                </header>

<div class="academic_info student_search">

<form action="{{route('attendance_summary_monthly')}}" method="post">
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
                    <label for="">Month <span class="text-danger">*</span></label>
                    <input type="date" name="date" id="" value="{{old('date')}}"><br>
                    @error('date')
                        <span style="color: red;">{{ $message }}</span>
                    @enderror
            </div><br><br>

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
        <h3>Monthly Attendance Summary</h3>
    </div>

    <div class="attendence_summary_mid table-responsive">
           <!---- student table  ----->
           <table class="table table-bordered mt-3 text-center">
            <thead class="table-bordered">
                <tr>
                    <th scope="col">SL</th>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Class</th>
                    <th scope="col">Roll</th>
                    <th scope="col">Shift</th>
                    <th scope="col">Section</th>
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
