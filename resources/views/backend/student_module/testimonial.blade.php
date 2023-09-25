@extends('layouts.AdminPanal')
@section('content')
<div class="u-body">
    <section class="es-form-area">
        <div class="card">
            <header class="card-header bg-gradient border-0 pt-5 pb-5 d-flex align-items-center">
                <h2 class="text-white mb-0">Student Testomonial</h2>
            </header>

            <form method="POST" action="{{ route('testimonial') }}">
                @csrf
                    <
                    <div class="academic_info student_search">
                    <h5>
                        <i class="fa-solid fa-circle-info"></i> Student Search (Current)
                    </h5>

                    <div class="container">

                        <div class="row mt-3 mb-4">

                            <div class="col-12 col-md-6 col-lg-4">
                                <label for="">Session <span class="text-danger">*</span></label>
                                <select name="session_name" id="" required>
                                    <option selected disabled>Select Shift</option>
                                    @foreach($all_session as $item)
                                    <option value="{{ $item->name }}">{{ $item->name}}</option>
                                    @endforeach
                                </select>
                            </div> <br><br>

                            <div class="col-12 col-md-6 col-lg-4">
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
                            </div><br><br>

                            <div class="col-12 col-md-6 col-lg-4">
                                <label for="">Shift <span class="text-danger">*</span></label>
                                <select name="shift_name" id="" required>
                                    <option selected disabled>Select Shift</option>
                                    @foreach($all_shift as $item)
                                    <option value="{{ $item }}">{{ $item}}</option>
                                    @endforeach
                                </select>
                            </div><br><br>

                        </div>

                        <div class="row mt-3 mb-4">

                            <div class="col-12 col-md-6 col-lg-4">
                                <label for="">Section<span class="text-danger">*</span></label>
                                <select name="section_name" id="">
                                     <option selected disabled>Select Shift</option>
                                    @foreach($all_section as $item)
                                    <option value="{{ $item->name}}">{{ $item->name}}</option>
                                    @endforeach
                                </select>
                            </div><br><br>

                            <div class="col-12 col-md-6 col-lg-4">
                                <label for="">Student <span class="text-danger">*</span></label>
                                <select name="student" id="">
                                    <option selected disabled>Select Student</option>
                                    @foreach($all_student as $item)
                                    <option value="{{$item->id}}">{{$item->student_id}} - {{$item->student_name_en}}</option>
                                    @endforeach
                                </select>
                            </div><br><br>
                        </div>

                    </div>

                </div>

                <p class="text-center">
                    <button type="submit" class="btn btn-primary px-5">Submit</button>
                </p>
            </form>

            <div class="testomonial">

                <div class="testomonialBox">

                    <div class="testomonialTop">
                        <h1>Learning Campus</h1>
                        <p>Uttara, Uttarkhan Dhaka 1230</p>
                        <p>Phone : 01234567890</p>
                        <p>Email : learningcampus@gmail.com</p>
                        <h2><span>Testomonial</span> </h2>
                    </div>

                    <div class="testomonialText">

                        <p>
                            <i>
                                This is certify that <b>Rony</b> son/daughter of <b>Rony Biswas</b> and <b>Roxy Das</b> , a student of this institute bearing Roll No. 1 passed the annual examination of class <b>Nine</b> in <b>2020</b> and secured <b>G.P.A 4.50</b> on scale of 5.00. His/her date of birth as recorded in his/her Registration Book is 11-Aug-2020 .
                                To the best of my knowledge and belief he/she is a good student. During this study period he/she did not take part in any activities subversive of the state or discipline.
                            </i>
                        </p>
                        <p>
                            <i>I wish him/her every success in his/her life.</i>
                        </p>
                        <h6>
                            <span>Date</span>
                            <span>Signature of principal</span>
                        </h6>
                    </div>
                </div>

            </div>


        </div>
    </section>
    @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif
</div>

@endsection
