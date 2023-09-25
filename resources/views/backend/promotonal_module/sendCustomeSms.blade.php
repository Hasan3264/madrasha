@extends('layouts.AdminPanal')
@section('content')
<div class="u-body">
    <section class="es-form-area">
        <div class="card">
            <header class="card-header bg-gradient border-0 pt-5 pb-5 d-flex align-items-center">
                <h3 class="text-white mb-0">
                    <ul class="nav nav-tabs">
                        <li class="nav-item">
                            <a class="nav-link " href="javascript:void(0)" onclick="stuInformation()">Student
                                Information</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="javascript:void(0)"
                                onclick="empInformation()">Employees Information</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="javascript:void(0)" onclick="custInformation()">Custom
                                Group Information</a>
                        </li>
                    </ul>
                </h3>
            </header>

            <div id="studentInformation">

                <div class="academic_info">

                    <div class="container">

                        <div class="row mt-3 mb-4">

                            <div class="col-6">
                                <label for="">Session <span class="text-danger">*</span></label>
                                <select name="" id="">
                                    <option value="">2021</option>
                                    <option value="">2020</option>
                                    <option value="">2019</option>
                                </select>
                            </div>

                            <div class="col-6">
                                <label for="">Shift <span class="text-danger">*</span></label>
                                <select name="" id="">
                                    <option value="">Select Shift</option>
                                    <option value="">Morning</option>
                                    <option value="">Day</option>
                                </select>
                            </div>

                        </div>

                        <div class="row mt-3 mb-4">

                            <div class="col-6">
                                <label for="">Class <span class="text-danger">*</span></label>
                                <select name="" id="">
                                    <option value="">Select Class</option>
                                    <option value="" class="bold_text">Bangla Medium</option>
                                    <option value="">Play</option>
                                    <option value="">Nursary</option>
                                    <option value="">KG</option>
                                    <option value="">One</option>
                                    <option value="">Two</option>
                                    <option value="">Three</option>
                                    <option value="">Four</option>
                                    <option value="">Five</option>
                                    <option value="">Six</option>
                                    <option value="">Seven</option>
                                    <option value="">Eight</option>
                                    <option value="">Nine</option>
                                    <option value="">Ten</option>
                                    <option value="">Eleven</option>
                                    <option value="">Tweleve</option>
                                    <option value="" class="bold_text">English Medim</option>
                                    <option value="">Play</option>
                                    <option value="">Nursary</option>
                                    <option value="">KG</option>
                                    <option value="">One</option>
                                    <option value="">Two</option>
                                    <option value="">Three</option>
                                    <option value="">Four</option>
                                    <option value="">Five</option>
                                    <option value="">Six</option>
                                    <option value="">Seven</option>
                                    <option value="">Eight</option>
                                    <option value="">Nine</option>
                                    <option value="">Ten</option>
                                    <option value="">Eleven</option>
                                    <option value="">Tweleve</option>
                                </select>
                            </div>

                            <div class="col-6">
                                <label for="">Section <span class="text-danger">*</span></label>
                                <select name="" id="">
                                    <option value="">Select Section</option>
                                    <option value="">A</option>
                                    <option value="">B</option>
                                </select>
                            </div>

                        </div>

                        <div class="row mt-3 mb-4">

                            <div class="col-6">
                                <label for="">Gender</label>
                                <select name="" id="">
                                    <option value="">Select Gender</option>
                                    <option value="">Male</option>
                                    <option value="">Female</option>
                                </select>
                            </div>

                            <div class="col-6">
                                <label for="">Blood Group</label>
                                <select name="" id="">
                                    <option value="">Select Blood Group</option>
                                    <option value="">A+</option>
                                    <option value="">A-</option>
                                    <option value="">B+</option>
                                    <option value="">B-</option>
                                    <option value="">AB</option>
                                </select>
                            </div>
                        </div>

                        <div class="row mt-3 mb-4">

                            <div class="col-6">
                                <label for="">Student ID <span class="text-danger">*</span></label>
                                <input type="text">
                            </div>


                        </div>

                    </div>

                </div>

                <div class="academic_info">

                    <div class="container">

                        <div class="row mt-3 mb-4">

                            <div class="col-6">
                                <label for="">Mobile <span>*</span></label>
                                <textarea name="" id="textBox" cols="30" rows="10"></textarea>
                            </div>

                            <div class="col-6">
                                <label for="">SMS Body <span>*</span></label>
                                <textarea name="" id="textBox" cols="30" rows="10"></textarea>
                            </div>

                        </div>

                    </div>

                </div>

                <p class="text-center">
                    <a href="#" class="btn btn-primary px-5">Send</a>
                </p>

            </div>


            <div id="employeInformation">

                <div class="academic_info">

                    <div class="container">

                        <div class="row mt-3 mb-4">

                            <div class="col-6">
                                <label for="">Employees <span class="text-danger">*</span></label>
                                <select name="" id="">
                                    <option value="">Select Employees Type</option>
                                    <option value="">All</option>
                                    <option value="">Casual</option>
                                    <option value="">Contractual</option>
                                    <option value="">Full-time</option>
                                    <option value="">Part-time</option>
                                </select>
                            </div>

                        </div>

                    </div>

                </div>

                <div class="academic_info">

                    <div class="container">

                        <div class="row mt-3 mb-4">

                            <div class="col-6">
                                <label for="">Mobile <span>*</span></label>
                                <textarea name="" id="textBox" cols="30" rows="10"></textarea>
                            </div>

                            <div class="col-6">
                                <label for="">SMS Body <span>*</span></label>
                                <textarea name="" id="textBox" cols="30" rows="10"></textarea>
                            </div>

                        </div>

                    </div>

                </div>

                <p class="text-center">
                    <a href="#" class="btn btn-primary px-5">Send</a>
                </p>

            </div>


            <div id="customInformation">

                <div class="academic_info">

                    <div class="container">

                        <div class="row mt-3 mb-4">

                            <div class="col-6">
                                <label for="">Group </label>
                                <select name="" id="">
                                    <option value="">Select Group</option>
                                </select>
                            </div>

                        </div>

                    </div>

                </div>

                <div class="academic_info">

                    <div class="container">

                        <div class="row mt-3 mb-4">

                            <div class="col-6">
                                <label for="">Mobile <span>*</span></label>
                                <textarea name="" id="textBox" cols="30" rows="10"></textarea>
                            </div>

                            <div class="col-6">
                                <label for="">SMS Body <span>*</span></label>
                                <textarea name="" id="textBox" cols="30" rows="10"></textarea>
                            </div>

                        </div>

                    </div>

                </div>

                <p class="text-center">
                    <a href="#" class="btn btn-primary px-5">Send</a>
                </p>

            </div>


        </div>
    </section>

</div>
@endsection
