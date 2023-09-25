@extends('layouts.AdminPanal')
@section('content')
<div class="u-body">
    <section class="es-form-area">
        <div class="card">
            <header class="card-header bg-gradient border-0 pt-5 pb-5 d-flex align-items-center">
                <h2 class="text-white mb-0">Student Migration</h2>
            </header>

         <form action="{{ route('students_migration_done') }}" method="post">
            @csrf
            <div class="migrate_div">
                <h6 class="warning">
                    <i class="fa-solid fa-circle-info"></i> Warning ! Please select Migrated From (Current Session) & Migrated To (New Session) carefully ! Otherwise you have to manually.
                </h6>

                    <div class="row">

                        <div class="col-12 col-md-6">
                            <div class="migrate_left">
                                <h4>Migrate From</h4>

                                <div>
                                    <label for="">Session <span>*</span></label>
                                    <select name="session_name" id="">
                                        <option selected disabled>Select Session</option>
                                        @foreach($all_session as $item)
                                        <option value="{{ $item->name }}">{{ $item->name}}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div>
                                    <label for="">Class <span>*</span></label>
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

                                <div>
                                    <label for="">Shift <span>*</span></label>
                                    <select name="shift_name" id="">
                                    <option selected disabled>Select Shift</option>
                                        @foreach($all_shift as $item)
                                        <option value="{{ $item }}">{{ $item}}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div>
                                    <label for="">Section <span>*</span></label>
                                    <select name="section_name" id="" required>
                                <option selected disabled>Select Section</option>
                                        @foreach($all_section as $item)
                                        <option value="{{ $item->name}}">{{ $item->name}}</option>
                                        @endforeach
                                </select>
                                </div>

                            </div>
                        </div>

                        <div class="col-12 col-md-6">
                            <div class="migrate_left">
                                <h4>Migrate To</h4>

                                <div>
                                    <label for="">Migrated Session <span>*</span></label>
                                    <select name="migrate_session" id="">
                                                <option selected disabled>Select Session</option>
                                        @foreach($all_session as $item)
                                        <option value="{{ $item->name }}">{{ $item->name}}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div>
                                    <label for="">Migrated Class <span>*</span></label>
                                    <select name="migrate_class" id="">
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

                                <div>
                                    <label for="">Migrated Shift <span>*</span></label>
                                    <select name="migrate_shift" id="">
                                        <option selected disabled>Select Shift</option>
                                        @foreach($all_shift as $item)
                                        <option value="{{ $item }}">{{ $item}}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div>
                                    <label for="">Migrated Section <span>*</span></label>
                                    <select name="migrate_section" id="">
                                        <option selected disabled>Select Section</option>
                                        @foreach($all_section as $item)
                                        <option value="{{ $item->name}}">{{ $item->name}}</option>
                                        @endforeach
                                    </select>
                                </div>

                            </div>
                        </div>
                    </div>

            </div>

            <p class="text-center mt-5 mb-5">
                <button type="submit" class="btn btn-primary px-5">Review Migration</button>
            </p>

         </form>


            <div class="search_result table-responsive">
                <div class="attendence_summary">

                    <div class="attendence_summary_top text-center">
                        <h1>Learning Campus (Main Branch)</h1>
                        <a href="#">www.LearningCampus.com</a>
                        <p>Mirpur-3, Dhaka</p>
                        <h3>Student Migration List (Class {{$class->to_class}})</h3>
                    </div>

                    <div class="attendence_summary_mid table-responsive">
                        <button onclick="printPage('mainContent')" class="print_btn"><i class="fa-solid fa-print"></i>  Print</button>

                        <!---- student table  ----->
                        <div id="mainContent">
                        <table class="table table-bordered mt-3 text-center">
                            <thead class="table-bordered">
                                <tr>
                                    <th scope="col">SL</th>
                                    <th scope="col">ID</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">From</th>
                                    <th scope="col">To</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($new_student as $key=>$item)
                                <tr>
                                    <td>{{ $key+=1 }}</td>
                                    <td>{{ $item->student_id }}</td>
                                    <td>
                                        <img src="{{ asset($student_info->getStudentPhoto($item->student_id)) }}" class="curentStuImage" alt="">
                                        <br><a href="#">{{ $student_info->getStudentName($item->student_id) }}</a>
                                    </td>
                                    <td> {{$class_name->getClassName($item->from_class)}}({{$item->from_section}})</td>
                                    <td> {{$class_name->getClassName($item->to_class)}}({{$item->to_section}}) </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        </div>

                        <!---- /student table ----->
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

<script>
    function printPage(area){
        var printContent = document.getElementById(area).innerHTML;
        document.body.innerHTML =printContent;
        window.print();
    }

</script>
@endsection

