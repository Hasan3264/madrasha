@extends('layouts.AdminPanal')
@section('content')
<div class="u-body">
    <section class="es-form-area">
        <div class="card">
            <header class="card-header bg-gradient border-0 pt-5 pb-5 d-flex align-items-center">
                <h2 class="text-white mb-0">
                    Assign Exam View
                </h2>
            </header>
    
            <div class="session_view_link ml-3 mt-4 mb-5">
                <a href="{{ route('addexamassign') }}" class="btn btn-primary"><i class="fa-solid fa-plus"></i></a>
                <a href="{{ route('editassign',$examassign->id) }}" class="btn btn-primary"><i class="fa-solid fa-pen"></i></a>
            </div>
    
            <div class="card-body table-responsive" id="institue">
                <form action="" class="es-form es-add-form">
                    <!---- Branch View table  ----->
                        <table class="table table-bordered table-striped mt-3 branch_view_table">
                            <tbody >
                                <tr>
                                    <th>Session</th>
                                    <td>{{ Carbon\Carbon::parse($examassign->created_at)->format('Y') }}</td>
                                </tr>
                                <tr>
                                    <th>Exam Term</th>
                                    <td>{{$examassign->examterms ? $examassign->examterms->term_name : 'Noterms' }}</td>
                                </tr>
                                <tr>
                                    <th>Exam Part</th>
                                    <td>{{$examassign->exampart ? $examassign->exampart->name : 'No part' }}</td>
                                </tr>
                                <tr>
                                    <th>Class</th>
                                    <td>{{$examassign->clssname ? $examassign->clssname->class_name : 'no class' }}</td>
                                </tr>
                                <tr>
                                    <th>Individual Pass ?</th>
                                    <td>
                                        @if($examassign->individual_part == 'yes')
                                            <b>YES</b>
                                            @else
                                            <b>NO</b>
                                            @endif
                                    </td>
                                </tr>
                                <tr>
                                    <th>Consider Fail on Absent ?</th>
                                    <td>
                                        @if($examassign->absent == 'yes')
                                            <b>YES</b>
                                            @else
                                            <b>NO</b>
                                            @endif
                                    </td>
                                </tr>
                                <tr>
                                    <th>Marks for Term (%)</th>
                                    <td>{{ $examassign->marks_term }}%</td>
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

