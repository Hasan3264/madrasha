@extends('layouts.AdminPanal')
@section('content')
<div class="u-body">

    <section class="es-form-area">
        <div class="card">
            <header class="card-header bg-gradient border-0 pt-5 pb-5 d-flex align-items-center">
                <h2 class="text-white mb-0">
                    Employee Paysale View
                </h2>
            </header>

            <div class="session_view_link ml-3 mt-4 mb-5">
                <a href="{{ route('employee-payscale.add')}}" class="btn btn-primary"><i class="fa-solid fa-plus"></i></a>
                <a href="{{ route('employee-payscale.edit')}}" class="btn btn-primary"><i class="fa-solid fa-pencil"></i></a>
            </div>

            <div class="card-body table-responsive" id="institue">
                <form action class="es-form es-add-form">

                    <!---- Branch View table  ----->
                    <table class="table table-bordered table-striped mt-3 branch_view_table">
                        <tbody>
                            <tr>
                                <th>Pay Scale Title </th>
                                <td>Pay Scale 1</td>
                            </tr>
                            <tr>
                                <th>Employee Type</th>
                                <td>Permanent</td>
                            </tr>
                            <tr>
                                <th>Grade</th>
                                <td>Grade 1</td>
                            </tr>
                            <tr>
                                <th>Basic Salary</th>
                                <td>12000</td>
                            </tr>
                            <tr>
                                <th>Status</th>
                                <td>Active</td>
                            </tr>
                            <tr>
                                <th>Created At</th>
                                <td>2020-08-13 06:24:35</td>
                            </tr>
                            <tr>
                                <th>Created By</th>
                                <td>2020-08-13 06:24:35</td>
                            </tr>
                            <tr>
                                <th>Modified At</th>
                                <td>tsit</td>
                            </tr>
                            <tr>
                                <th>Modified By</th>
                                <td>tsit</td>
                            </tr>

                        </tbody>
                    </table>

                    <!---- /Branch View table ----->

                    <h2 class="mt-5 mb-3">Pay Scale Chart</h2>

                    <table class="table">
                        <thead class="thead-light">
                            <tr>
                                <th scope="col">Payroll Chart</th>
                                <th scope="col">Amount</th>
                            </tr>
                        </thead>
                        <tbody>

                            <tr>
                                <th scope="row">14.00 House Rent</th>
                                <td>9000</td>
                            </tr>

                            <tr>
                                <th scope="row">14.00 House Rent</th>
                                <td>9000</td>
                            </tr>

                            <tr>
                                <th scope="row">14.00 House Rent</th>
                                <td>9000</td>
                            </tr>

                            <tr>
                                <th scope="row">14.00 House Rent</th>
                                <td>9000</td>
                            </tr>

                            <tr>
                                <th scope="row">14.00 House Rent</th>
                                <td>9000</td>
                            </tr>

                        </tbody>
                    </table>

                </form>
            </div>

        </div>
    </section>

</div>
@endsection