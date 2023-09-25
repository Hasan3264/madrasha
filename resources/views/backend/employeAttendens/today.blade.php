@extends('layouts.AdminPanal')
@section('content')
<div class="u-body">

<section class="es-form-area">
    <div class="card">
        <header class="card-header bg-gradient border-0 pt-5 pb-5 d-flex align-items-center">
            <h2 class="text-white mb-0">
                 Employe Attendence (31 March 2022)
            </h2>
        </header>

        <div class="card-body table-responsive" id="institue">
            <p class="total_count">Total <span>(0)</span></p>
            <form action="" class="es-form es-add-form">

                <!---- student table  ----->
                    <table class="table table-bordered mt-3 text-center ">
                        <thead class="table-bordered">
                            <tr style="background-color:#ccc">
                                <th scope="col">ID</th>
                                <th scope="col">Designation</th>
                                <th scope="col">Name</th>
                                <th scope="col" style="color: green; font-weight: 800;">In</th>
                                <th scope="col" style="color: red; font-weight: 800;">Out</th>
                                <th scope="col">Punch IN Zone</th>
                            </tr>
                        </thead>
                        <tbody>

                            <tr>
                                <td>1</td>
                                <td>Teacher</td>
                                <td>Afzal</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>


                        </tbody>
                    </table>
                <!---- /student table ----->
            </form>
        </div>

    </div>
</section>

    </div>
@endsection

@section('fotter_js')

@endsection
