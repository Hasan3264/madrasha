@extends('layouts.AdminPanal')
@section('content')
<div class="u-body">

    <section class="es-form-area">
        <div class="card">
            <header class="card-header bg-gradient border-0 pt-5 pb-5 d-flex align-items-center">
                <h2 class="text-white mb-0">
                    Grade View
                </h2>
            </header>
    
            <div class="card-body table-responsive" id="institue">
                <form action="" class="es-form es-add-form">
                    <div class="session_view_link mt-2 mb-5">
                        <a href="{{ route('addgrade') }}" class="btn btn-primary"><i class="fa-solid fa-plus"></i></a>
                        <a href="{{ route('gradeedit',$gradeshow->id) }}" class="btn btn-primary"><i class="fa-solid fa-pencil"></i></a>
                    </div>
                    <!---- Session View table  ----->
                        <table class="table table-bordered table-striped mt-3 branch_view_table">
                            <tbody >
                                <tr>
                                    <th>Session</th>
                                    <td>{{ Carbon\Carbon::parse($gradeshow->created_at)->format('Y') }}</td>
                                </tr>
                                <tr>
                                    <th>Class</th>
                                    <td>{{ $gradeshow->classname ? $gradeshow->classname['class_name'] : 'noClass' }}</td>
                                </tr>
                                <tr>
                                    <th>Start Marks	</th>
                                    <td>{{ $gradeshow->start_mark }}</td>
                                </tr>
                                <tr>
                                    <th>End Mark</th>
                                    <td>{{ $gradeshow->end_mark }}</td>
                                </tr>
                                <tr>
                                    <th>Grade Letter</th>
                                    <td>{{ $gradeshow->grade_latter }}</td>
                                </tr>
                                <tr>
                                    <th>Grade Point	</th>
                                    <td>{{ $gradeshow->grade_point }}</td>
                                </tr>
                                <tr>
                                    <th>Remarks</th>
                                    <td>{{ $gradeshow->remarks }}</td>
                                </tr>
                                <tr>
                                    <th>Status</th>
                                    <td>
                                        @if ($gradeshow->status == 'active')
                                         <b>Active</b>
                                        @else
                                         <b>Inactive</b>
                                        @endif
                                    </td>
                                </tr>
                                <tr>
                                    <th>Create At</th>
                                    <td>{{ Carbon\Carbon::parse($gradeshow->created_at)->format('Y-m-d G:i a') }}</td>
                                </tr>
                                <tr>
                                    <th>Create By</th>
                                    <td>{{ $gradeshow->uusernamecreated ? $gradeshow->uusernamecreated->name : 'Admin' }}</td>
                                </tr>
                                <tr>
                                    <th>Modified At</th>
                                    <td>{{ Carbon\Carbon::parse($gradeshow->updated_at)->format('Y-m-d G:i a') }}</td>
                                </tr>
                                <tr>
                                    <th>Modified By</th>
                                    <td>{{ $gradeshow->uusernameupdated ? $gradeshow->uusernameupdated->name : 'Admin' }}</td>
                                </tr>
                              
                            </tbody>
                        </table>
                   
                    <!---- /session View table ----->
                </form> 
            </div>
    
        </div>    
    </section>
</div>
@endsection