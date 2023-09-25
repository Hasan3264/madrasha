@extends('layouts.AdminPanal')
@section('content')
<div class="u-body">
 <form action="{{route('add.routine')}}" method="POST">
    @csrf
    <div class="modal" id="my-modal">
        <div class="modal-content">
            <span class="close" onclick="toggleContent()">&times;</span>
            <div class="branch_edit mt-0 text-left ">
                <div class="row">
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
                    <label for="">Teacher <span>*</span></label>
                    <div class="col-md-10 mb-3">
                        <label for="">Teacher <span>*</span></label>
                        <select name="teacher" id="">
                            <option value="1">Select Teacher</option>
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
                    <div class="modal-footer">
                        <button type="submit" class="btn bg-gradient border-0 text-white">Save</button>
                        <button type="reset" class="btn  cancel_btn border-0 text-white">Cancel</button>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <section class="es-form-area">
        <div class="card">
            <header class="card-header bg-gradient border-0 pt-5 pb-5 d-flex align-items-center">
                <h2 class="text-white mb-0">Dynamic Routine</h2>
            </header>
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
                        <label for=""> Section<span>*</span></label>
                        <select name="section" id="">
                            <option value="">Select Section</option>
                            @foreach ($AllSection as $section)
                            <option value="{{$section->id}}">{{$section->name}}</option>
                            @endforeach
                        </select>
                        @if (session('section'))
                        <strong class="text-danger">{{ $message }}</strong>
                        @endif
                    </div>
                </div>


                <div class="routineShort table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">Day</th>
                                <th scope="col"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Saturday</td>
                                <td>
                                    <input class="hkk" type="radio" value="Saturday" name="days" id="radioOption1">
                                    <label onclick="toggleContent()" for="radioOption1" class="radioLabel"></label>

                                </td>
                            </tr>
                            <tr>
                                <td>Sunday</td>
                                <td>
                                    <input class="hkk" type="radio" value="Sunday" name="days" id="radioOption2">
                                    <label onclick="toggleContent()" for="radioOption2" class="radioLabel"></label>

                                </td>
                            </tr>
                            <tr>
                                <td>Monday</td>
                                <td>
                                    <input class="hkk" type="radio" value="Monday"  name="days" id="radioOption3">
                                    <label onclick="toggleContent()" for="radioOption3" class="radioLabel"></label>



                                </td>
                            </tr>
                            <tr>
                                <td>Tuesday</td>
                                <td>
                                    <input class="hkk" type="radio" value="Tuesday" name="days" id="radioOption4">
                                    <label onclick="toggleContent()" for="radioOption4" class="radioLabel"></label>


                                </td>
                            </tr>
                            <tr>
                                <td>Wednesday</td>
                                <td>
                                    <input class="hkk" type="radio" value="Wednesday" name="days" id="radioOption6">
                                    <label onclick="toggleContent()" for="radioOption6" class="radioLabel"></label>



                                </td>
                            </tr>
                            <tr>
                                <td>Thursday</td>
                                <td>

                                    <input class="hkk" type="radio" value="Thursday" name="days" id="radioOption5">
                                    <label onclick="toggleContent()" for="radioOption5" class="radioLabel"></label>


                                </td>
                            </tr>
                            <tr>
                                <td>Friday</td>
                                <td>
                                    <input type="radio" class="hkk" value="Friday" name="days" id="radioOption7">
                                    <label onclick="toggleContent()" for="radioOption7" class="radioLabel"></label>



                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div>

                </div>
            </div>
        </div>

    </section>
</form>
</div>

@endsection
@section('fotter_js')
<style>
    .hkk[type="radio"] {
        display: none;
        /* Hide the default radio button */
    }

    .radioLabel {
        display: inline-block;
        width: 40px;
        height: 40px;
        border: 1px solid #000;
        text-align: center;
        border-radius: 5px;
        cursor: pointer;
        border-color: #0051ff;
        font-size: 17px;
        color: blue;
        line-height: 40px;
    }

    .radioLabel::before {
        content: "+";
    }

    .hkk[type="radio"]:checked+.radioLabel::before {
        content: "-";
    }

</style>
<style>
    .modal {
        position: fixed;
        z-index: 9999999999;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        overflow: auto;
        align-content: center;
        vertical-align: center !important;
        background-color: #aaaaaa79;
    }

    .modal-content {
        background-color: #fefefe;
        margin: 10% auto;
        padding: 20px;
        border: 1px solid #888;
        width: 40%;
    }

    .close {
        color: #aaa;
        float: right;
        font-size: 28px;
        font-weight: bold;
        cursor: pointer;
    }

    .close:hover,
    .close:focus {
        color: #000;
        text-decoration: none;
        cursor: pointer;
    }

</style>


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
                'medium_id': medium_id,
            },
            success: function (data) {
                $('#class').html(data);
            }
        });
    });

</script>


<script>
    function toggleContent() {
        $('#my-modal').fadeToggle();
    }

</script>


@endsection
