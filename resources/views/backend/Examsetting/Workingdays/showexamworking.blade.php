@extends('layouts.AdminPanal')
@section('content')
<div class="u-body">
    <section class="es-form-area">
        <div class="card">
            <header class="card-header bg-gradient border-0 pt-5 pb-5 d-flex align-items-center">
                <h2 class="text-white mb-0">
                    Workings Exam View
                </h2>
            </header>
    
            <div class="session_view_link ml-3 mt-4 mb-5">
                <a href="{{ route('addexamworkingdays') }}" class="btn btn-primary"><i class="fa-solid fa-plus"></i></a>
                <a href="{{ route('editworking',$examassign->id) }}" class="btn btn-primary"><i class="fa-solid fa-pen"></i></a>
            </div>
    
            <div class="card-body table-responsive" id="institue">
                <form action="" class="es-form es-add-form">
                    <!---- Branch View table  ----->
                        <table class="table table-bordered table-striped mt-3 branch_view_table">
                            <tbody >
                                <tr>
                                    <th>Exam Term</th>
                                    <td>{{$examassign->examterms ? $examassign->examterms->term_name : 'Noterms' }}</td>
                                </tr>
                                <tr>
                                    <th>Class</th>
                                    <td>{{$examassign->clssname ? $examassign->clssname->class_name : 'Nopart' }}</td>
                                </tr>
                                <tr>
                                    <th>Class Start Date</th>
                                    <td>{{ Carbon\Carbon::parse($examassign->start_date)->format('Y-M-d') }}</td>
                                </tr>
                                <tr>
                                    <th>Class End Date</th>
                                    <td>{{ Carbon\Carbon::parse($examassign->end_date)->format('Y-M-d') }}</td>
                                </tr>
                                <tr>
                                    <th>Total Workings Days</th>
                                    <td>{{ $examassign->working_days }}</td>
                                </tr>
                                <tr>
                                    <th>Created At</th>
                                    <td>{{ Carbon\Carbon::parse($examassign->updated_at)->format('Y-m-d G:i a') }}</td>
                                </tr>
                                <tr>
                                    <th>Created By</th>
                                    <td>{{ $examassign->uusernamecreated ? $examassign->uusernamecreated->name : 'Admin' }}</td>
                                </tr>
                                <tr>
                                    <th>Modified At</th>
                                    <td>{{ Carbon\Carbon::parse($examassign->updated_at)->format('Y-m-d G:i a') }}</td>
                                </tr>
                                <tr>
                                    <th>Modified By</th>
                                    <td>{{ $examassign->uusernameupdated ? $examassign->uusernameupdated->name : 'Admin' }}</td>
                                </tr>
                             
                            </tbody>
                        </table>
                   
                    <!---- /Branch View table ----->
                </form> 
            </div>
        </div>    
    </section>
    
</div>
@endsection

