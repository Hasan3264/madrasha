@extends('layouts.AdminPanal')
@section('content')

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>

    <div class="u-content">
    <div class="u-body">
        <section class="es-form-area">
            <div class="card">
                <header class="card-header bg-gradient border-0 pt-5 pb-5 d-flex align-items-center">
                    <h2 class="text-white mb-0">Student Attendence Summary Monthly</h2>
                </header>

<div class="academic_info student_search">



<div class="container">
 <div class="d-flex justify-content-between mt-5">
    <button onclick="MyPrint('print')" class="print_btn"><i class="fa-solid fa-print"></i>  Print</button>
    <a href="{{ route('monthly_attendance_pdf') }}" class="print_btn"><i class="fa-solid fa-download"></i>  Download</a>
</div>
</div>

<div class="attendence_summary"id='print'>
    <div class="attendence_summary_top text-center">
        <h1>Learning Campus (Main Branch)</h1>
        <a href="#">www.LearningCampus.com</a>
        <p>Mirpur-3, Dhaka</p>
        <h3>Monthly Attendance Summary ({{$m}})</h3>
    </div>

    <div class="attendence_summary_mid table-responsive" >
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
            @foreach($attendance as $key=>$item)
                 <tr>
                    <td>{{$key+=1}}</td>
                    <td>{{ $item->student_id }}</td>
                    <td>
                        <img src="{{asset($student_info->getStudentPhoto($item->student_id))}}" class="curentStuImage" alt="">
                        <br><a href="#">{{$student_info->getStudentName($item->student_id)}}</a>
                     </td>
                     <td> {{ $class->getClassName($item->class_name)}} </td>
                     <td> {{$admission->roll($item->student_id)}} </td>
                     <td> {{$item->shift_name}} </td>
                     <td> {{ $item->section_name }} </td>
                    @if($item->attendance == 1)
                        <td style="color: green; font-weight: 900;">Present</td>
                    @endif
                    @if($item->attendance == 0)
                     <td style="color: red; font-weight: 900;">Absent</td>
                    @endif
                     <td>{{ $shift[0]->start_time }}</td>
                     <td>{{ $shift[0]->end_time }}</td>
                     <td></td>
                     <td>{{ $shift[0]->green_limit }}</td>
                     <td>{{ $shift[0]->orange_limit }}</td>
                     <td>{{ $shift[0]->red_limit }}</td>
                 </tr>
            @endforeach
            </tbody>
        </table>
    <!---- /student table ----->
    </div>
</div>


</div>
</section>

</div>
</div>

<script type="text/javascript">

    function MyPrint(print){
        var printContent = document.getElementById(print).innerHTML;
        document.body.innerHTML =printContent;
        window.print();
    }


</script>

<script type="text/javascript">

    $(document).ready(function (){
    $('#myForm').validate({
        rules: {
            session_name: {
                required : true,
            }
        },
        messages :{
            session_name: {
                required : 'Please Enter User Name',
            }
        },
        errorElement : 'span',
        errorPlacement: function (error,element) {
            error.addClass('invalid-feedback');
            element.closest('.form-group').append(error);
        },
        highlight : function(element, errorClass, validClass){
            $(element).addClass('is-invalid');
        },
        unhighlight : function(element, errorClass, validClass){
            $(element).removeClass('is-invalid');
        },
    });
});

</script>

@endsection

