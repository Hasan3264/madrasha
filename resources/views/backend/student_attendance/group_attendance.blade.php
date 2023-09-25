@extends('layouts.AdminPanal')
@section('content')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

   <div class="u-content">
    <div class="u-body">
        <section class="es-form-area">
            <div class="card">
                <header class="card-header bg-gradient border-0 pt-5 pb-5 d-flex align-items-center">
                    <h2 class="text-white mb-0">Student Manual Attendence</h2>
                </header>

<div class="academic_info">
<form action="{{ route('group_attendance') }}" method="post">
    @csrf
<div class="container">

    <div class="row mt-3 mb-4">

        <div class="col-6">
            <label for="">Day <span class="text-danger">*</span></label>
            <input type="date" name="day" id="">
        </div>

        <div class="col-6">
            <label for="">Class <span class="text-danger">*</span></label>
           <select name="class_name" id="">
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
        </div>

    </div>

    <div class="row mt-3 mb-4">

        <div class="col-6">
            <label for="">Shift <span class="text-danger">*</span></label>
            <select name="shift_name" id="">
                <option selected disabled>Select Shift</option>
                    @foreach($all_shift as $item)
                    <option value="{{ $item }}">{{ $item}}</option>
                    @endforeach
            </select>
    </div>

        <div class="col-6">
            <label for="">Section <span class="text-danger">*</span></label>
                <select name="section_name" id="" required>
                                <option selected disabled>Select Section</option>
                                        @foreach($all_section as $item)
                                        <option value="{{ $item->name}}">{{ $item->name}}</option>
                                        @endforeach
                                </select>
        </div>

    </div>

    <div class="row mt-3 mb-4">

        <div class="col-6">
          <button type="submit" class="btn btn-primary">Submit</button>
        </div>

    </div>

</div>
</form>
<div class="attendenceTable table-responsive">
    <table class="table table-bordered table-striped">
        <thead>
          <tr style="background-color:rgb(226, 226, 226);">
            <th scope="col">SL</th>
            <th scope="col">Student ID</th>
            <th scope="col">Student Name</th>
            <th scope="col">Roll</th>
            <th scope="col">Gurdian's Name</th>
            <th scope="col">Gurdian's Mobile</th>
            <th scope="col">
                <div class="sms_div">
                    <h6 class="checkbox_txt">All Present | Absent</h6>
                </div>
            </th>
          </tr>
        </thead>
        <tbody>

        @foreach($group as $key=>$item)
          <tr>
            <th scope="row">{{$key+=1}}</th>
            <td>{{$item->student_id}}</td>
            <td>
                <img src="{{asset($item->studentInfo->photo)}}" class="student_img" alt="">
                <span>{{$item->studentInfo->student_name_en}}</span>
            </td>
            <td>{{$item->roll_number}}</td>
            <td>{{$item->studentInfo->guardian_name}}</td>
            <td>{{$item->studentInfo->guardian_phone }}</td>
            <td>
                <div class="sms_div">
                    <label class="switch" for="checkbox.{{$key}}">
                    <input type="checkbox" id="checkbox.{{$key}}" onchange="myfun(this.value)" value="{{$item->student_id}}" {{ $attend_status->status($item->student_id)== 1 ? 'checked':'' }}>
                    <div class="slider round"></div>
                    </label>
                    <h6 class="checkbox_txt">{{ $attend_status->status($item->student_id)== 1 ? 'Present':'Absent' }}</h6>
                </div>
            </td>
          </tr>
        @endforeach

        </tbody>
      </table>
</div>

</div>


</div>
</section>

</div>
</div>



<script type="text/javascript">

     $.ajaxSetup({
        headers:{
            'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')
        }
    })

    $('#attendance').click(function (){
        if($(this).is(':checked')){
            $('input[type = checkbox]').prop('checked',true);
        }else {
            $('input[type = checkbox]').prop('checked',false);
        }
    })
    $('#attendance').click(function (){
       var id =  $(this).is(':checked') ? 1: 0
            $.ajax({
                method:'GET',
                url:'/student/attendance/'+id,
                dataType:'json',
                success:function(data){
                    // alert(data.success);



                      // Start Message
                    const Toast = Swal.mixin({
                        toast: true,
                        position: 'top-end',
                        icon: 'success',
                        showConfirmButton: false,
                        timer: 3000
                    })
                    if ($.isEmptyObject(data.error)) {
                        Toast.fire({
                            type: 'success',
                            title: data.success
                        })
                    }else{
                        Toast.fire({
                            type: 'error',
                            title: data.error
                        })
                    }// End Message
                }
            })
    })



    ///single student attend

    function myfun(id){
       $.ajax({
                method:'GET',
                url:'/student/single/attendance/'+id,
                dataType:'json',
                success:function(data){


                    // Start Message
                    const Toast = Swal.mixin({
                        toast: true,
                        position: 'top-end',
                        icon: 'success',
                        showConfirmButton: false,
                        timer: 3000
                    })
                    if ($.isEmptyObject(data.error)) {
                        Toast.fire({
                            type: 'success',
                            title: data.success
                        })
                    }else{
                        Toast.fire({
                            type: 'error',
                            title: data.error
                        })
                    }// End Message

                }

       })
    }

 </script>


@endsection
