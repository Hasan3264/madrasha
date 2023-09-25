@extends('layouts.AdminPanal')
@section('content')
<div class="u-body">

    <section class="es-form-area">
        <div class="card">
            <header class="card-header bg-gradient border-0 pt-5 pb-5 d-flex align-items-center">
                <h2 class="text-white mb-0">
                    Employee's Salary Chart
                </h2>
            </header>

            <div class="card-body table-responsive" id="institue">
                <form action="" class="es-form es-add-form">
                    <a href="{{ route('employee-salary.add')}}" class="btn btn-primary"><i class="fa-solid fa-plus"></i></a>
                    <p class="text-right">Showing 1-1 of 1 item</p>
                    <!---- session table  ----->
                    <table class="table table-bordered mt-3 text-center branch_table">
                        <thead class="table-bordered">
                            <tr>
                                <th scope="col">Srl</th>
                                <th scope="col">Employee Type</th>
                                <th scope="col">Payrolls Head</th>
                                <th scope="col">Actions</th>
                            </tr>
                        </thead>
                        <tbody>

                            <tr>
                                <th scope="row"></th>
                                <td>
                                    <select name="" id="">
                                        <option value="">All</option>
                                        <option value="">Casual</option>
                                        <option value="">Contractual</option>
                                        <option value="">Full-time</option>
                                        <option value="">Half-time</option>
                                        <option value="">Shift-Worker</option>
                                    </select>
                                </td>

                                <td> </td>

                                <td></td>
                            </tr>

                            <tr>
                                <td>1</td>
                                <td>Pay Scale 1</td>
                                <td>Permanent</td>
                                <td>
                                    <a href="{{ route('employee-salary.view')}}"><i class="fa-solid fa-eye"></i></a>&nbsp &nbsp
                                    <a href="{{ route('employee-salary.edit')}}"><i class="fa-solid fa-pencil"></i></a>&nbsp &nbsp
                                    <a href=""><i class="fa-solid fa-trash"></i></a>&nbsp &nbsp
                                </td>
                            </tr>

                        </tbody>
                    </table>

                    <!---- /session table ----->

                </form>
            </div>

        </div>
    </section>

</div>
@endsection