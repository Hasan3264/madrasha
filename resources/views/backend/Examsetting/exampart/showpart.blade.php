@extends('layouts.AdminPanal')
@section('content')
<div class="u-body">
    <section class="es-form-area">
        <div class="card">
            <header class="card-header bg-gradient border-0 pt-5 pb-5 d-flex align-items-center">
                <h2 class="text-white mb-0">
                    Exam Part View
                </h2>
            </header>
    
            <div class="card-body table-responsive" id="institue">
                <form action="" class="es-form es-add-form">
                    <div class="session_view_link mt-2 mb-5">
                        <a href="{{ route('addexamparts') }}" class="btn btn-primary"><i class="fa-solid fa-plus"></i></a>
                        <a href="{{ route('editpart',$exampart->id) }}" class="btn btn-primary"><i class="fa-solid fa-pencil"></i></a>
                    </div>
                    <!---- Session View table  ----->
                        <table class="table table-bordered table-striped mt-3 branch_view_table">
                            <tbody >
                                <tr>
                                    <th>Name</th>
                                    <td>{{ $exampart->name }}</td>
                                </tr>
                                <tr>
                                    <th>Rank</th>
                                    <td>{{ $exampart->rank }}</td>
                                </tr>
                                <tr>
                                    <th>Status</th>
                                    <td>
                                           @if($exampart->status == 'active')
                                            <b>Active</b>
                                            @else
                                            <b>Inactive</b>
                                            @endif
                                    </td>
                                </tr>
                                <tr>
                                    <th>Create At</th>
                                    <td>{{ Carbon\Carbon::parse($exampart->updated_at)->format('Y-m-d G:i a') }}</td>
                                </tr>
                                <tr>
                                    <th>Create By</th>
                                    <td>{{ $exampart->uusernamecreated ? $exampart->uusernamecreated->name : 'Admin' }}</td>
                                </tr>
                                <tr>
                                    <th>Modified At</th>
                                    <td>{{ Carbon\Carbon::parse($exampart->updated_at)->format('Y-m-d G:i a') }}</td>
                                </tr>
                                <tr>
                                    <th>Modified By</th>
                                    <td>{{ $exampart->uusernameupdated ? $exampart->uusernameupdated->name : 'Admin' }}</td>
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

