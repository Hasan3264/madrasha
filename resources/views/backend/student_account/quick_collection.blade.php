@extends('layouts.AdminPanal')
@section('content')

<div class="u-content">
    <div class="u-body">

        <section class="es-form-area">
            <div class="card">
                <header class="card-header bg-gradient border-0 pt-5 pb-5 d-flex align-items-center">
                    <h2 class="text-white mb-0">Student Fees Collection (Quick)</h2>
                </header>
                <form action="{{route('filture.data')}}" method="POST">
                    @csrf
                    <div class="branch_edit">
                        <div class="row">
                            @csrf
                            <div class="col-md-10 mb-3">
                                <label for="">Session <span>*</span></label>
                                <select name="session_id" id="session_id">
                                    <option value="">Select Session</option>
                                    @foreach ($allsession as $session)
                                    <option value="{{$session->id}}">{{$session->name}}</option>
                                    @endforeach
                                </select>
                                @error('session_id')
                                <strong class="text-danger">{{$message}}</strong>
                                @enderror
                            </div>

                            <div class="col-md-10 mb-3">
                                <label for="">Mediums <span>*</span></label>
                                <select name="medium_id" id="medium">
                                    <option value="">Select mediums</option>
                                    @foreach ($mediums as $medium)
                                    <option value="{{$medium->medium_code}}">{{$medium->medium_name}}</option>
                                    @endforeach
                                </select>
                                @error('medium_id')
                                <strong class="text-danger">{{$message}}</strong>
                                @enderror
                            </div>

                            <div class="col-md-10 mb-3">
                                <label for="">class <span>*</span></label>
                                <select name="class_id" id="class">
                                </select>
                                @error('class_id')
                                <strong class="text-danger">{{$message}}</strong>
                                @enderror
                            </div>

                            <div class="col-md-10 mb-3">
                                <label for="">Student <span>*</span></label>
                                <select name="student_id" id="student">
                                </select>
                                @error('student_id')
                                <strong class="text-danger">{{$message}}</strong>
                                @enderror
                            </div>

                            <div class="col-md-10 mb-3">
                                <label for="">Month <span>*</span></label>
                                <select name="month" id="monthselect">
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
                                @error('month')
                                <strong class="text-danger">{{$message}}</strong>
                                @enderror
                            </div>

                            <div class="col-md-10 mt-4 mb-3">
                                <p>
                                    <button type="submit" class="btn bg-gradient border-0 text-white">Search</button>
                                    <button type="reset" class="btn  cancel_btn border-0 text-white">Cancel</button>
                                </p>
                            </div>
                </form>

            </div>

    </div>

   

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
