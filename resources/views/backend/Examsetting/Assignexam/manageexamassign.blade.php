@extends('layouts.AdminPanal')
@section('content')
<div class="u-body">
    <section class="es-form-area">
        <div class="card">
            <header class="card-header bg-gradient border-0 pt-5 pb-5 d-flex align-items-center">
                <h2 class="text-white mb-0">
                    Manage Assigned Exam
                </h2>
            </header>
    
            <div class="card-body table-responsive" id="institue">
                <form action="" class="es-form es-add-form">
                    <a href="{{ route('addexamassign') }}" class="btn btn-primary"><i class="fa-solid fa-plus"></i></a>
                   <p class="text-right">Showing 1-1 of 1 item</p>
                    <!---- session table  ----->
                      <table id="myTable" class="table table-bordered mt-3 text-center">
                            <thead class="table-bordered">
                                <tr>
                                    <th scope="col">Srl</th>
                                    <th scope="col">Session</th>
                                    <th scope="col">Exam Term</th>
                                    <th scope="col">Exam Part</th>
                                    <th scope="col">Class</th>
                                    <th scope="col">Individual Pass ?</th>
                                    <th scope="col">Consider Fail on Absent ?</th>
                                    <th scope="col">Marks for Term (%)</th>
                                    <th scope="col">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($examassigns as $key=>$examassign )
                                    <tr>
                                        <td>{{ $key+1 }}</td>
                                        <td>{{ Carbon\Carbon::parse($examassign->created_at)->format('Y') }}</td>
                                        <td>{{$examassign->examterms ? $examassign->examterms->term_name : 'Noterms' }}</td>
                                        <td>{{$examassign->exampart ? $examassign->exampart->name : 'Nopart' }}</td>
                                        <td>{{$examassign->clssname ? $examassign->clssname->class_name : 'Nopart' }}</td>
                                        <td>
                                            @if($examassign->individual_part == 'yes')
                                            <b>YES</b>
                                            @else
                                            <b>NO</b>
                                            @endif
                                        </td>
                                        <td>
                                            @if($examassign->absent == 'yes')
                                            <b>YES</b>
                                            @else
                                            <b>NO</b>
                                            @endif
                                        </td>
                                        <td>{{ $examassign->marks_term }}%</td>
                                        <td>
                                            <a href="{{ route('showassign',$examassign->id) }}"><i class="fa-solid fa-eye"></i></a>&nbsp &nbsp
                                            <a href="{{ route('editassign',$examassign->id) }}"><i class="fa-solid fa-pencil"></i></a>&nbsp &nbsp
                                            <a href="{{ route('deleteassign',$examassign->id) }}"><i class="fa-solid fa-trash"></i></a>&nbsp &nbsp
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

