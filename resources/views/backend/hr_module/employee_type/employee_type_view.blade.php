@extends('layouts.AdminPanal')
@section('content')
<div class="u-body">

    <section class="es-form-area">
        <div class="card">
            <header class="card-header bg-gradient border-0 pt-5 pb-5 d-flex align-items-center">
                <h2 class="text-white mb-0">
                    Employe Type View
                </h2>
            </header>

            <div class="card-body table-responsive" id="institue">
                <form action class="es-form es-add-form">
                    <div class="session_view_link mt-2 mb-5">
                        <a href="{{ route('add.employeetype') }}" class="btn btn-primary"><i class="fa-solid fa-plus"></i></a>
                        <a href="{{ route('edit.employeetype', ['id'=>'$emptype->id']) }}" class="btn btn-primary"><i class="fa-solid fa-pencil"></i></a>
                    </div>
                    <!---- Session View table  ----->
                    <table class="table table-bordered table-striped mt-3 branch_view_table">
                        <tbody>
                            <tr>
                                <th>Type Name </th>
                                <td>{{$emptype->name}}</td>
                            </tr>
                            <tr>
                                <th>Deduct Salary on Absent?</th>
                                <td>{!! $emptype->deduct_salary ? "<span class='green'>Yes</span>" : "<span class='red'>No</span>" !!}</td>
                            </tr>
                            <tr>
                                <th>Has Over Time?</th>
                                <td> {!! $emptype->over_time ? "<span class='green'>Yes</span>" : "<span class='red'>No</span>" !!}</td>
                            </tr>
                            <tr>
                                <th>Status</th>
                                <td> {!! $emptype->status ? "<span class='green'>Yes</span>" : "<span class='red'>No</span>" !!}</td>
                            </tr>
                            <tr>
                                <th>Created At</th>
                                <td>{{$emptype->created_at}}</td>
                            </tr>
                            <tr>
                                <th>Created By</th>
                                <td>tsit</td>
                            </tr>
                            <tr>
                                <th>Modified At</th>
                                <td>{{$emptype->updated_at}}</td>
                            </tr>
                            <tr>
                                <th>Modified By</th>
                                <td>Learning Campus</td>
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