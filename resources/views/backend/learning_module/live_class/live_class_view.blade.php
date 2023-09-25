@extends('layouts.AdminPanal')
@section('content')

        <div class="u-content">
        <div class="u-body">

<section class="es-form-area">
    <div class="card">
        <header class="card-header bg-gradient border-0 pt-5 pb-5 d-flex align-items-center">
            <h2 class="text-white mb-0">
                Live Class Details
            </h2>
        </header>

        <div class="card-body table-responsive" id="institue">
            <form action="" class="es-form es-add-form">
                <div class="session_view_link mt-2 mb-5">
                    <a href="add_live_class.html" class="btn btn-primary"><i class="fa-solid fa-plus"></i></a>
                    <a href="live_class_edit.html" class="btn btn-primary"><i class="fa-solid fa-pencil"></i></a>
                    <a href="live_class_report.html" class="btn btn-primary"><i class="fa-solid fa-file-invoice"></i></a>
                </div>
                <!---- Session View table  ----->
                    <table class="table table-bordered table-striped mt-3 branch_view_table">
                        <tbody >
                            <tr>
                                <th>Session</th>
                                <td>2021</td>
                            </tr>
                            <tr>
                                <th>Class</th>
                                <td>Play</td>
                            </tr>
                            <tr>
                                <th>Shift</th>
                                <td>Morning</td>
                            </tr>
                            <tr>
                                <th>Section</th>
                                <td>A</td>
                            </tr>
                            <tr>
                                <th>Subject</th>
                                <td>Math</td>
                            </tr>
                            <tr>
                                <th>Teacher</th>
                                <td>20200005 - Babar</td>
                            </tr>
                            <tr>
                                <th>Class ID</th>
                                <td>72547022683</td>
                            </tr>
                            <tr>
                                <th>Class Topic</th>
                                <td>Math Test Class</td>
                            </tr>
                            <tr>
                                <th>Password</th>
                                <td>123456</td>
                            </tr>
                            <tr>
                                <th>Class Date</th>
                                <td>24, January 2022</td>
                            </tr>
                            <tr>
                                <th>Class Time</th>
                                <td>04:00:00 PM</td>
                            </tr>
                            <tr>
                                <th>Class Duration (Minutes)</th>
                                <td>40</td>
                            </tr>
                            <tr>
                                <th>Host Email</th>
                                <td>tuhintalukdar2101@gmail.com</td>
                            </tr>
                            <tr>
                                <th>Status</th>
                                <td>Done</td>
                            </tr>
                            <tr>
                                <th>Created At</th>
                                <td>2021-12-19 07:39:06</td>
                            </tr>
                            <tr>
                                <th>Created By</th>
                                <td>Learning Campus</td>
                            </tr>
                            <tr>
                                <th>Modified At</th>
                                <td>2022-02-03 04:58:07</td>
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
</div>

@endsection
