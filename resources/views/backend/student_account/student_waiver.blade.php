@extends('layouts.AdminPanal')
@section('content')

<div class="u-content">
    <div class="u-body">

        <section class="es-form-area">
            <div class="card">
                <header class="card-header bg-gradient border-0 pt-5 pb-5 d-flex align-items-center">
                    <h2 class="text-white mb-0">Student Wise Wavier</h2>
                </header>
               <form action="{{route('input.studenWaiver')}}" method="POST">
                @csrf
                 <div class="session_add">
                    <div class="row">

                        <div class="col-md-10 mb-3">
                            <label for="">Session <span>*</span></label>
                            <select name="session_id" id="">
                                <option value="">Select Session</option>
                                @foreach ($allsession as $session)
                                <option value="{{$session->id}}">{{$session->name}}</option>
                                @endforeach
                            </select>
                            @if (session('session_id'))
                            <strong class="text-danger">{{ $message }}</strong>
                            @endif
                        </div>

                        <div class="col-md-10 mb-3">
                            <label for="">Mediums <span>*</span></label>
                            <select name="medium_id" id="medium">
                                <option value="">Select mediums</option>
                                @foreach ($mediums as $medium)
                                <option value="{{$medium->medium_code}}">{{$medium->medium_name}}</option>
                                @endforeach
                            </select>
                            @if (session('medium_id'))
                            <strong class="text-danger">{{ $message }}</strong>
                            @endif
                        </div>

                        <div class="col-md-10 mb-3">
                            <label for="">class <span>*</span></label>
                            <select name="class_id" id="class">
                            </select>
                            @if (session('class_id'))
                            <strong class="text-danger">{{ $message }}</strong>
                            @endif
                        </div>

                        <div class="col-md-10 mb-3">
                            <label for="">Student <span>*</span></label>
                            <select name="student_id" id="student">
                            </select>
                            @if (session('student_id'))
                            <strong class="text-danger">{{ $message }}</strong>
                            @endif
                        </div>

                        <div class="col-md-10 mb-3">
                            <label for="">Waived Month <span>*</span></label>
                            <select name="month" id="month-select">
                                <option value="January">January</option>
                                <option value="February">February</option>
                                <option value="March">March</option>
                                <option value="April">April</option>
                                <option value="May">May</option>
                                <option value="June">June</option>
                                <option value="July">July</option>
                                <option value="August">August</option>
                                <option value="September">September</option>
                                <option value="October">October</option>
                                <option value="November">November</option>
                                <option value="December">December</option>
                            </select>
                            @if (session('month'))
                            <strong class="text-danger">{{ $message }}</strong>
                            @endif
                        </div>

                        <div class="col-md-10 mb-3">
                            <label for="">Fees Type <span>*</span></label>
                            <select name="fees_type" id="">
                                <option value="">Select Fees Type</option>
                                <option value="1.00">1.00 Tution Fees</option>
                                <option value="11.00">11.00 Registration Fees</option>
                                <option value="18">18 Admission Fees</option>
                                <option value="2.00">2.00 Exam Fees</option>
                                <option value="3.00">3.00 Sports Fees</option>
                                <option value="30.00">30.00 Yearly Tour</option>
                                <option value="32.00">32.00 Day Care</option>
                            </select>
                             @if (session('fees_type'))
                            <strong class="text-danger">{{ $message }}</strong>
                            @endif
                        </div>

                        <div class="col-md-10 mb-3">
                            <label for="">Wavier <span>*</span></label>
                            <input type="number" name="wavier" id="">
                            @if (session('wavier'))
                            <strong class="text-danger">{{ $message }}</strong>
                            @endif
                        </div>

                        <div class="col-md-10 mb-3">
                            <label for="">Status <span>*</span></label>
                            <select name="status" id="">
                                <option value="Active">Active</option>
                                <option value="Inactive">Inactive</option>
                            </select>
                             @if (session('status'))
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
<script>
    $('#class').change(function () {
        var class_id = $(this).val();
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            type: 'POST',
            url: "{{route('getstudent.class')}}",
            data: {
                'class_id': class_id
            },
            success: function (data) {
                $('#student').html(data);
            }
        });
    });

</script>
@endsection
