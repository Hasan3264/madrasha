@extends('layouts.AdminPanal')
@section('content')
<div class="u-body">
    @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif
    <section class="es-form-area">
        <div class="card mb-8 my-6">
            <header class="card-header bg-gradient border-0 pt-5 pb-5 d-flex align-items-center">
                <h2 class="text-white mb-0">General Routine</h2>
            </header>
            <form action="{{route('add.routine')}}" method="POST">
                @csrf
                <div class="branch_edit">
                    <div class="row">
                        <div class="col-md-10 mb-3">
                            <label for="">Medium <span>*</span></label>
                            <select name="medium" id="medium">
                                <option value="">Select Medium</option>
                                @foreach ($allMedium as $medium)
                                <option value="{{$medium->medium_code}}" class="bold_text">{{$medium->medium_name}}
                                </option>
                                @endforeach
                            </select>
                            @if (session('medium'))
                            <strong class="text-danger">{{ $message }}</strong>
                            @endif
                        </div>
                        <div class="col-md-10 mb-3">
                            <label for="">Class <span>*</span></label>
                            <select name="class" id="class">
                                {{-- <option value="selectClass">Select Class</option> --}}
                                {{-- @foreach ($allcalsses as $class)
                                <option value="banglaMedium" class="bold_text">Bangla Medium</option>
                                @endforeach --}}

                            </select>
                            @if (session('class'))
                            <strong class="text-danger">{{ $message }}</strong>
                            @endif
                        </div>

                        <div class="col-md-10 mb-3">
                            <label for="">Shift <span>*</span></label>
                            <select name="shift" id="">
                                <option value="">Select Shift</option>
                                @foreach ($allShift as $shift)
                                <option value="{{$shift->id}}">{{$shift->shift_name}}</option>
                                @endforeach
                            </select>
                            @if (session('shift'))
                            <strong class="text-danger">{{ $message }}</strong>
                            @endif
                        </div>
                        <div class="col-md-10 mb-3">
                            <label for="">Routine Day <span>*</span></label>
                            <select name="days" id="">
                                <option value="">Select Routine Day</option>
                                <option value="Saturday">Saturday</option>
                                <option value="Sunday">Sunday</option>
                                <option value="Monday">Monday</option>
                                <option value="Tuesday">Tuesday</option>
                                <option value="Wednessday">Wednessday</option>
                                <option value="Thursday">Thursday</option>
                                <option value="Friday">Friday</option>
                            </select>
                            @if (session('days'))
                            <strong class="text-danger">{{ $message }}</strong>
                            @endif
                        </div>

                        <div class="col-md-10 mb-3">
                            <label for="">Start Time<span>*</span></label>
                            <input type="time" name="s_time" id="">
                            @if (session('s_time'))
                            <strong class="text-danger">{{ $message }}</strong>
                            @endif
                        </div>

                        <div class="col-md-10 mb-3">
                            <label for="">End Time<span>*</span></label>
                            <input type="time" name="e_time" id="">
                            @if (session('e_time'))
                            <strong class="text-danger">{{ $message }}</strong>
                            @endif
                        </div>

                        <div class="col-md-10 mb-3">
                            <label for="">Break / Tiffin ? <span>*</span></label>
                            <p class="rad_text">
                                <input type="radio" name="a" value="1" id="check">
                                <b>Yes</b>
                            </p> &nbsp; &nbsp;
                            <p class="rad_text">
                                <input type="radio" name="a" value="0" id="check">
                                <b>No</b>
                            </p>
                            @if (session('a'))
                            <strong class="text-danger">{{ $message }}</strong>
                            @endif
                        </div>

                        <div class="col-md-10 mb-3">
                            <label for="">Subject <span>*</span></label>
                            <select name="subject" id="">
                                <option value="">Select Subject</option>
                                @foreach ($All_subject as $subject)
                                <option value="{{$subject->id}}">{{$subject->name}}</option>
                                @endforeach
                            </select>
                            @if (session('subject'))
                            <strong class="text-danger">{{ $message }}</strong>
                            @endif
                        </div>


                        <div class="col-md-10 mb-3">
                            <label for="">Teacher <span>*</span></label>
                            <select name="teacher" id="">
                                <option value="1">Select Teacher</option>
                                @foreach ($teachers as $tech)
                                <option value="{{$tech->id}}">{{$tech->name}}</option>
                                @endforeach
                            </select>
                            @if (session('teacher'))
                            <strong class="text-danger">{{ $message }}</strong>
                            @endif
                        </div>

                        <div class="col-md-10 mb-3">
                            <label for="">Status <span>*</span></label>
                            <select name="status" id="">
                                <option value="Active">Active</option>
                                <option value="Inactive">Inactive</option>
                            </select>
                            @if (session('exist'))
                            <strong class="text-danger">{{ $message }}</strong>
                            @endif
                        </div>

                        <div class="col-md-10 mt-4 mb-3">
                            <p>
                                <button type="submit" class="btn bg-gradient border-0 text-white">Save</button>
                                <button type="reset" class="btn  cancel_btn border-0 text-white">Cancel</button>
                            </p>
                        </div>

                    </div>
                </div>
            </form>
        </div>

    </section>
</div>




@endsection
@section('fotter_js')
<script>
    $('#medium').change(function () {
        var medium_id = $(this).val();
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            type: 'POST',
            url: "{{route('getclassbymedium')}}",
            data: {
                'medium_id': medium_id
            },
            success: function (data) {
                $('#class').html(data);
            }
        });
    });

</script>
@endsection
