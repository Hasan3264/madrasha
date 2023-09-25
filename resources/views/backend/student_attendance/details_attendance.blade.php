@extends('layouts.AdminPanal')
@section('content')

    <div class="u-content">
    <div class="u-body">
        <section class="es-form-area">
            <div class="card">
                <header class="card-header bg-gradient border-0 pt-5 pb-5 d-flex align-items-center">
                    <h2 class="text-white mb-0">Student Attendence Details</h2>
                </header>


<div class="container">
    <div class="d-flex justify-content-between mt-5">
        <button  onclick="MyPrint('print')"  class="print_btn"><i class="fa-solid fa-print"></i>  Print</button>
        <a href="{{ route('details_attendance_pdf') }}" class="print_btn"><i class="fa-solid fa-download"></i>  Download</a>
    </div>
</div>

<div class="attendence_summary" id="print">
    <div class="attendence_summary_top text-center">
        <h1>Learning Campus (Main Branch)</h1>
        <a href="#">www.LearningCampus.com</a>
        <p>Mirpur-3, Dhaka</p>
        <h3>Attendance Details for the Month of {{$get_month}} {{$get_year}}</h3>
        <p>ID : {{$student_name[0]->student_id}}, Name : {{$student_name[0]->student_name_en}}</p>
        <h3>
            <span class="text-primary">Attendance : {{$attend}}</span>,
            <span class="text-info">Holidays : 0</span>,
            <span class="text-danger">Absent : {{$absent}}</span>,
            <span class="text-secondary">Green : {{ $shift[0]->green_limit }}</span>,
            <span class="text-warning"> Orange : {{ $shift[0]->orange_limit }}</span>,
            <span class="text-danger"> Red : {{ $shift[0]->red_limit }}</span>
        </h3>
    </div>

    <div class="attendence_summary_mid table-responsive"  >

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

            @foreach($attendance_details as $key=>$item)
                 <tr>
                    <td>{{$key+=1}}</td>
                    <td>{{$item->date}}</td>
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


@endsection
