@extends('layouts.AdminPanal')
@section('content')
<div class="u-body">
    <section class="es-form-area">
        <div class="card">
            <header class="card-header bg-gradient border-0 pt-5 pb-5 d-flex align-items-center">
                <h2 class="text-white mb-0">
                    Payroll Head
                </h2>
            </header>

            <div class="card-body table-responsive" id="institue">
                <form action class="es-form es-add-form">
                    <a href="{{ route('payroll-head.add') }}" class="btn btn-primary"><i class="fa-solid fa-plus"></i></a>
                    <p class="text-right">Showing 1-1 of 1 item</p>
                    <!---- session table  ----->
                    <table class="table table-bordered mt-3 text-center branch_table">
                        <thead class="table-bordered">
                            <tr>
                                <th scope="col">Srl</th>
                                <th scope="col">A/C Category</th>
                                <th scope="col">A/C Parents</th>
                                <th scope="col">A/C Head</th>
                                <th scope="col">A/C Code</th>
                                <th scope="col">Yead/Montly</th>
                                <th scope="col">Has Child?</th>
                                <th scope="col">Absent
                                    Deduction?</th>
                                <th scope="col">Status</th>
                                <th scope="col">Actions</th>
                            </tr>
                        </thead>
                        <tbody>

                            <tr>
                                <td>1</td>
                                <td>Addition</td>
                                <td>GRAND PARENT</td>
                                <td>Salary</td>
                                <td>21.00</td>
                                <td>Monthly</td>
                                <td>No</td>
                                <td>No</td>
                                <td>Active</td>
                                <td>
                                    <a href="{{ route('payroll-head.view') }}"><i class="fa-solid fa-eye"></i></a>&nbsp
                                    &nbsp
                                    <a href="{{ route('payroll-head.edit') }}"><i class="fa-solid fa-pencil"></i></a>&nbsp
                                    &nbsp
                                    <a href><i class="fa-solid fa-trash"></i></a>&nbsp
                                    &nbsp
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