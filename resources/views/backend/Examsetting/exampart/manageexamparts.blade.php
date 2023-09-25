@extends('layouts.AdminPanal')
@section('content')
<div class="u-body">
    <section class="es-form-area">
        <div class="card">
            <header class="card-header bg-gradient border-0 pt-5 pb-5 d-flex align-items-center">
                <h2 class="text-white mb-0">
                    Manage Exam Parts
                </h2>
            </header>
    
            <div class="card-body table-responsive" id="institue">
                <form action="" class="es-form es-add-form">
                    <a href="{{ route('addexamparts') }}" class="btn btn-primary"><i class="fa-solid fa-plus"></i></a>
                   <p class="text-right">Showing 1-1 of 1 item</p>
                    <!---- session table  ----->
                    <table id="myTable" class="table table-bordered mt-3 text-center">
                            <thead class="table-bordered">
                                <tr>
                                    <th scope="col">Srl</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Rank</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($examparts as $key=>$exampart)
                                <tr>
                                        <td>{{ $key+1 }}</td>
                                        <td>{{ $exampart->name }}</td>
                                        <td>{{ $exampart->rank }}</td>
                                        <td>
                                            @if($exampart->status == 'active')
                                            <b>Active</b>
                                            @else
                                            <b>Inactive</b>
                                            @endif
                                        </td>
                                        <td>
                                            <a href="{{ route('showpart',$exampart->id) }}"><i class="fa-solid fa-eye"></i></a>&nbsp &nbsp
                                            <a href="{{ route('editpart',$exampart->id) }}"><i class="fa-solid fa-pencil"></i></a>&nbsp &nbsp
                                            <a href="{{ route('deletepart',$exampart->id) }}"><i class="fa-solid fa-trash"></i></a>&nbsp &nbsp
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

