@extends('layouts.AdminPanal')
@section('content')
<div class="u-body">
<section class="es-form-area">
    <div class="card">
        <header class="card-header bg-gradient border-0 pt-5 pb-5 d-flex align-items-center">
            <h2 class="text-white mb-0">
                Manage Exam Terms
            </h2>
        </header>

        <div class="card-body table-responsive" id="institue">
            <form action="" class="es-form es-add-form">
                <a href="{{ route('addexamterms') }}" class="btn btn-primary"><i class="fa-solid fa-plus"></i></a>
               <p class="text-right">Showing 1-1 of 1 item</p>
                <!---- session table  ----->
                <table id="myTable" class="table table-bordered mt-3 text-center">
                        <thead class="table-bordered">
                            <tr>
                                <th scope="col">Srl</th>
                                <th scope="col">Session</th>
                                <th scope="col">Term Name</th>
                                <th scope="col">Rank</th>
                                <th scope="col">Related to Final</th>
                                <th scope="col">Final Term</th>
                                <th scope="col">Exam Routine Instruction</th>
                                <th scope="col">Result Publish</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($terms as $key=>$term )
                            <tr>
                                <td>{{ $key+1 }}</td>
                                <td>{{ Carbon\Carbon::parse($term->created_at)->format('Y') }}</td>
                                <td>{{ $term->term_name }}</td>
                                <td>{{ $term->rank }}</td>
                                <td>
                                    @if($term->related_to_final == 'yes')
                                    <b>YES</b>
                                    @else
                                    <b>NO</b>
                                    @endif
                                </td>
                                <td>
                                    @if($term->cfinal_term == 'yes')
                                    <b>YES</b>
                                    @else
                                    <b>NO</b>
                                    @endif
                                </td>
                                <td>
                                    @if($term->routine_instruction == 'yes')
                                    <b>YES</b>
                                    @else
                                    <b>NO</b>
                                    @endif
                                </td>
                                <td>
                                    @if($term->result_publish == 'yes')
                                    <b>YES</b>
                                    @else
                                    <b>NO</b>
                                    @endif
                                </td>
                                <td>
                                    <a href="{{ route('showterms',$term->id) }}"><i class="fa-solid fa-eye"></i></a>&nbsp &nbsp
                                    <a href="{{ route('editterms',$term->id) }}"><i class="fa-solid fa-pencil"></i></a>&nbsp &nbsp
                                    <a href="{{ route('deleteterms',$term->id) }}"><i class="fa-solid fa-trash"></i></a>&nbsp &nbsp
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