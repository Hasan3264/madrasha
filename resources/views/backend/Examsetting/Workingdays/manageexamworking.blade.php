@extends('layouts.AdminPanal')
@section('content')
<div class="u-body">
    <section class="es-form-area">
        <div class="card">
            <header class="card-header bg-gradient border-0 pt-5 pb-5 d-flex align-items-center">
                <h2 class="text-white mb-0">
                    Manage Working Days
                </h2>
            </header>
    
            <div class="card-body table-responsive" id="institue">
                <form action="" class="es-form es-add-form">
                    <a href="{{ route('addexamworkingdays') }}" class="btn btn-primary mb-5"><i class="fa-solid fa-plus"></i></a>
                    <!---- session table  ----->
                      <table id="myTable" class="table table-bordered mt-3 text-center">
                            <thead class="table-bordered">
                                <tr>
                                    <th scope="col">Srl</th>
                                    <th scope="col">Session</th>
                                    <th scope="col">Exam Term</th>
                                    <th scope="col">Classes</th>
                                    <th scope="col">Class Start Date</th>
                                    <th scope="col">Class End Date</th>
                                    <th scope="col">Total Working Days</th>
                                    <th scope="col">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($examworkings as $key=>$examassign )
                                <tr>
                                    <td>{{ $key+1 }}</td>
                                    <td>{{ Carbon\Carbon::parse($examassign->created_at)->format('Y') }}</td>
                                    <td>{{$examassign->examterms ? $examassign->examterms->term_name : 'Noterms' }}</td>
                                    <td>{{$examassign->clssname ? $examassign->clssname->class_name : 'no class' }}</td>
                                    <td>{{ Carbon\Carbon::parse($examassign->start_date)->format('Y-M-d') }}</td>
                                    <td>{{ Carbon\Carbon::parse($examassign->end_date)->format('Y-M-d') }}</td>
                                    <td>{{ $examassign->working_days }}</td>
                                    <td>
                                        <a href="{{ route('showworking',$examassign->id) }}"><i class="fa-solid fa-eye"></i></a>&nbsp &nbsp
                                        <a href="{{ route('editworking',$examassign->id) }}"><i class="fa-solid fa-pencil"></i></a>&nbsp &nbsp
                                        <a href="{{ route('deleteworking',$examassign->id) }}"><i class="fa-solid fa-trash"></i></a>&nbsp &nbsp
                                    </td>
                                </tr>
                                @endforeach

                            </tbody>
                        </table>
                   
                    <!---- /session table ----->
            
                </form> 
            </div>
    
        </div>    
    </section>
    
</div>
@section('fotter_js')
<script>
    $(document).ready(function() {
        $('#myTable').DataTable({
        });
    });
</script>
@endsection
@endsection

