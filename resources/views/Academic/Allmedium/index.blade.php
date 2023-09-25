@extends('layouts.AdminPanal')
@section('content')
<div class="u-body">
    <section class="es-form-area">
        <div class="card">
            <header class="card-header bg-gradient border-0 pt-5 pb-5 d-flex align-items-center">
                <h2 class="text-white mb-0">
                    All Medium
                </h2>
            </header>
    
            <div class="card-body table-responsive" id="institue">
                <form action="" class="es-form es-add-form">
                    <a href="{{ route('createmedium') }}" class="btn btn-primary"><i class="fa-solid fa-plus"></i></a>
                    <!---- session table  ----->
                        <table class="table table-bordered mt-3 text-center">
                            <thead class="table-bordered">
                                <tr>
                                    <th scope="col">Srl</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Medium Code</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                    @foreach ($allmediums as $key=>$allmedium)
                                        <tr>
                                            <td>{{ $key+1 }}</td>
                                            <td>{{ $allmedium->medium_name }}</td>
                                            <td>{{ $allmedium->medium_code }}</td>
                                            <td>
                                                @if($allmedium->medium_status == 'active')
                                                  <p> Active </p>
                                                @else
                                                <p> Inactive </p>
                                                @endif
                                            </td>
                                            <td>
                                                <a href="session_view.html"><i class="fa-solid fa-eye"></i></a>&nbsp &nbsp
                                                <a href="{{ route('allmediumedit',$allmedium->id) }}"><i class="fa-solid fa-pencil"></i></a>&nbsp &nbsp
                                                <a id="delete" href="{{ route('allmediumdelete',$allmedium->id) }}"><i class="fa-solid fa-trash"></i></a>&nbsp &nbsp
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
@endsection
