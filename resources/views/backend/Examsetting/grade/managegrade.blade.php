@extends('layouts.AdminPanal')
@section('content')
<div class="u-body">

<section class="es-form-area">
    <div class="card">
        <header class="card-header bg-gradient border-0 pt-5 pb-5 d-flex align-items-center">
            <h2 class="text-white mb-0">
                Manage Exam Grade
            </h2>
        </header>

        <div class="card-body table-responsive" id="institue">
                <a href="{{ route('addgrade') }}" class="btn btn-primary"><i class="fa-solid fa-plus"></i></a>
               <p class="text-right">Showing 1-1 of 1 item</p>
                <!---- session table  ----->
                <table id="myTable" class="table table-bordered mt-3 text-center">
                        <thead class="table-bordered">
                            <tr>
                                <th scope="col">Srl</th>
                                <th scope="col">Session</th>
                                <th scope="col">Classes</th>
                                <th scope="col">Start Marks</th>
                                <th scope="col">End Marks</th>
                                <th scope="col">Grade Letter</th>
                                <th scope="col">Grade Point</th>
                                <th scope="col">Remarks</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($grades as $key=>$grade )
                            <tr>
                                <td>{{ $key+1 }}</td>
                                <td>{{  Carbon\Carbon::parse($grade['created_at'])->format('Y') }}</td>
                                <td>{{ $grade->classname ? $grade->classname['class_name'] : 'noClass' }}</td>
                                <td>{{ $grade->start_mark }}</td>
                                <td>{{ $grade->end_mark }}</td>
                                <td>{{ $grade->grade_latter }}</td>
                                <td>{{ $grade->grade_point }}</td>
                                <td>{{ $grade->remarks }}</td>
                                <td>
                                    <a href="{{ route('gradeshow',$grade->id) }}"><i class="fa-solid fa-eye"></i></a>&nbsp &nbsp
                                    <a href="{{ route('gradeedit',$grade->id) }}"><i class="fa-solid fa-pencil"></i></a>&nbsp &nbsp
                                    <a href="{{ route('gradedelete',$grade->id) }}"><i class="fa-solid fa-trash"></i></a>&nbsp &nbsp
                                </td>
                            </tr>
                            @endforeach

                        </tbody>
                    </table>
                   <div class="mt-3" style="margin-left: 80%">
                     {{ $grades->links() }}
                   </div>
                <!---- /session table ----->
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