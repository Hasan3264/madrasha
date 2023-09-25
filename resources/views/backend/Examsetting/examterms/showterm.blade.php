@extends('layouts.AdminPanal')
@section('content')
<div class="u-body">
    <section class="es-form-area">
        <div class="card">
            <header class="card-header bg-gradient border-0 pt-5 pb-5 d-flex align-items-center">
                <h2 class="text-white mb-0">
                    Exam Terms View
                </h2>
            </header>
    
            <div class="card-body table-responsive" id="institue">
                <form action="" class="es-form es-add-form">
                    <div class="session_view_link mt-2 mb-5">
                        <a href="{{ route('addexamterms') }}" class="btn btn-primary"><i class="fa-solid fa-plus"></i></a>
                        <a href="{{ route('editterms',$showterm->id) }}" class="btn btn-primary"><i class="fa-solid fa-pencil"></i></a>
                    </div>
                    <!---- Session View table  ----->
                        <table class="table table-bordered table-striped mt-3 branch_view_table">
                            <tbody >
                                <tr>
                                    <th>Session</th>
                                    <td>{{ Carbon\Carbon::parse($showterm->created_at)->format('Y') }}</td>
                                </tr>
                                <tr>
                                    <th>Term Name</th>
                                    <td>{{ $showterm->term_name }}</td>
                                </tr>
                                <tr>
                                    <th>Final Rank</th>
                                    <td>{{ $showterm->rank }}</td>
                                </tr>
                                <tr>
                                    <th>Related to Final Term ?</th>
                                    <td>
                                        @if($showterm->related_to_final == 'yes')
                                        <b>YES</b>
                                        @else
                                        <b>NO</b>
                                        @endif
                                    </td>
                                </tr>
                                <tr>
                                    <th>Final Term ?</th>
                                    <td>
                                        @if($showterm->cfinal_term == 'yes')
                                        <b>YES</b>
                                        @else
                                        <b>NO</b>
                                        @endif
                                    </td>
                                </tr>
                                <tr>
                                    <th>Exam Routine With Instruction ?</th>
                                    <td>
                                        @if($showterm->routine_instruction == 'yes')
                                        <b>YES</b>
                                        @else
                                        <b>NO</b>
                                        @endif
                                    </td>
                                </tr>
                                <tr>
                                    <th>Website Result Publish </th>
                                    <td>
                                        @if($showterm->result_publish == 'yes')
                                        <b>YES</b>
                                        @else
                                        <b>NO</b>
                                        @endif
                                    </td>
                                </tr>
                                <tr>
                                    <th>Status</th>
                                    <td>
                                        @if($showterm->status =='active')
                                        <b>Active</b>
                                        @else
                                        <b>Inactive</b>
                                        @endif
                                    </td>
                                </tr>
                                <tr>
                                    <th>Create At</th>
                                    <td>{{ Carbon\Carbon::parse($showterm->created_at)->format('Y-m-d G:i a') }}</td>
                                </tr>
                                <tr>
                                    <th>Create By</th>
                                    <td>{{ $showterm->uusernamecreated ? $showterm->uusernamecreated->name : 'Admin' }}</td>
                                </tr>
                                <tr>
                                    <th>Modified At</th>
                                    <td>{{ Carbon\Carbon::parse($showterm->updated_at)->format('Y-m-d G:i a') }}</td>
                                </tr>
                                <tr>
                                    <th>Modified By</th>
                                    <td>{{ $showterm->uusernameupdated ? $showterm->uusernameupdated->name : 'Admin' }}</td>
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