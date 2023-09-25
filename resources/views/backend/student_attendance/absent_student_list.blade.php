@extends('layouts.AdminPanal')
@section('content')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <div class="u-content">
    <div class="u-body">
        <section class="es-form-area">
            <div class="card">
                <header class="card-header bg-gradient border-0 pt-5 pb-5 d-flex align-items-center">
                    <h2 class="text-white mb-0"> Today Students Absent ({{ date('Y M d') }})</h2>
                </header>

<div class="academic_info">

<div class="container">

  <p class="total_count"><i class="fa-solid fa-users"></i> Total Absent {{ count($total_absent) }}</p>

    <div class="row mt-3 mb-4">

        <div class="col-md-4">
            <div class="absentClassLeft">

                 <ul>

                     @foreach($all_absent as $key=>$students)
                     <li><a href="#">
                         <span>{{$all_class->getClassName($key)}} ({{ $all_medium->mediumName($all_class->mediumName($key)) }})</span>

                         <span>{{count($students)}}</span>

                         </a>
                    </li>
                    @endforeach



                 </ul>
            </div>
        </div>


        <div class="col-md-8">
            <div class="absentStudentRight table-responsive">
                <!---- student table  ----->
                <table class="table table-bordered mt-3 text-center">
                    <thead class="table-bordered">
                        <tr>
                            <th scope="col"><input type="checkbox" name="" id="check"></th>
                            <th scope="col">ID</th>
                            <th scope="col">Roll</th>
                            <th scope="col">Shift</th>
                            <th scope="col">Section</th>
                            <th scope="col">Name</th>
                            <th scope="col"><button class="btn btn-secondary">Send SMS</button></th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($total_absent as $item)
                         <tr>
                            <td><input type="checkbox" name="" id="check"></td>
                            <td>{{ $item->student_id }}</td>
                            <td>{{ $student_admission->roll($item->student_id) }}</td>
                            <td>{{$item->shift_name}}</td>
                            <td>{{ $item->section_name }}</td>
                            <td>
                                <img src="{{ asset($student_info->getStudentPhoto($item->student_id)) }}" class="curentStuImage" alt="">
                                <br><a href="#">{{ $student_info->getStudentName($item->student_id) }}</a>
                             </td>
                             <td>
                                 <button class="btn btn-primary">Send SMS</button>
                            </td>
                         </tr>
                    @endforeach
                    </tbody>
                </table>
            <!---- /student table ----->
            </div>
        </div>

    </div>

</div>
</div>
</div>
</section>

</div>
</div>


<script type="text/javascript">

        $('#check').click(function (){
        if($(this).is(':checked')){
            $('input[type = checkbox]').prop('checked',true);
        }else {
            $('input[type = checkbox]').prop('checked',false);
        }
    })

</script>

@endsection
