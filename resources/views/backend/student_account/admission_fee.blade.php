@extends('layouts.AdminPanal')
@section('content')

        <div class="u-content">
        <div class="u-body">

<section class="es-form-area">
    <div class="card">
        <header class="card-header bg-gradient border-0 pt-5 pb-5 d-flex align-items-center">
            <h2 class="text-white mb-0">Admission Fee</h2>
        </header>
        <form action="{{route('admission.Insert')}}" method="POST">
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
                        <option value="">Select class</option>
                    </select>
                      @if (session('class_id'))
                        <strong class="text-danger">{{ $message }}</strong>
                        @endif
                </div>
                <div class="col-md-10 mb-3">
                    <label for="">Shift <span>*</span></label>
                    <select name="shift_id" id="shift">
                    </select>
                      @if (session('shift_id'))
                        <strong class="text-danger">{{ $message }}</strong>
                        @endif
                </div>

                <div class="col-md-10 mb-3">
                    <label for="">Section <span>*</span></label>
                    <select name="section_id" id="">
                        @foreach ($allsection as $section)
                        <option value="{{$section->id}}">{{$section->name}}</option>
                        @endforeach
                    </select>
                     @if (session('section_id'))
                        <strong class="text-danger">{{ $message }}</strong>
                        @endif
                </div>

                <div class="col-md-10 mb-3">
                    <label for="">Fee Amount <span>*</span></label>
                      <input type="number"  name="fee_amount">
                     @if (session('fee_amount'))
                        <strong class="text-danger">{{ $message }}</strong>
                        @endif
                </div>

                <div class="col-md-10 mb-3">
                    <label for="">Gender <span>*</span></label>
                    <select name="gender" id="">
                        <option value="m">Male</option>
                        <option value="f">Female</option>
                    </select>
                     @if (session('gender'))
                        <strong class="text-danger">{{ $message }}</strong>
                        @endif
                </div>

                <div class="col-md-10 mb-3">
                    <label for=""></label>
                   <p class="rad_text">
                      <input type="radio" placeholder="Education" name="fee_type" value="1" id="check">
                      <b>For New Students (Only for Admission)</b>
                    </p> &nbsp; &nbsp;
                    <p class="rad_text">
                        <input type="radio" placeholder="Education" name="fee_type" value="2" id="check">
                        <b>For Existing & New Students (All)</b>
                    </p>
                    <label for=""></label>
                    <p class="rad_text">
                        <input type="radio" placeholder="Education" name="fee_type" value="3" id="check">
                        <b>For Existing & New Students Except (Special Discount)</b>
                    </p>
                 </div>

                 <div class="col-md-10 mt-4 mb-3">
                    <p style="color:brown; background:pink;padding:5px"><b>Warning!</b>  Fees Setting (Admission) will be applicable for only new/existing students. [ Gender is not mandatory ], Only select Gender when Boy's & Girl's Admission fees are different.</p>
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
    $('#medium').change(function () {
        var medium_ids = $(this).val();
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            type: 'POST',
            url: "{{route('getshiftbymedium')}}",
            data: {
                'medium_ids': medium_ids
            },
            success: function (data) {
                $('#shift').html(data);
            }
        });
    });
</script>
@endsection
