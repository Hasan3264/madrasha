

@extends('layouts.AdminPanal')
@section('content')
<div class="u-content">
            <div class="u-body">
                <section class="es-form-area">
                    <div class="card">
                        <header class="card-header bg-gradient border-0 pt-5 pb-5 d-flex align-items-center">
                            <h2 class="text-white mb-0">Employee Salary Payment</h2>
                        </header>

                        <div class="academic_info student_search">


                            <div class="container">

                                <div class="row mt-3 mb-4">

                                    <div class="col-12 col-md-6 col-lg-4">
                                        <label for=""> </label>
                                        <select name="" id="">
                                            <option value="">Select Employee Type</option>
                                            <option value="">Casual</option>
                                            <option value="">Contractual</option>
                                            <option value="">Full-time</option>
                                            <option value="">Half-time</option>
                                            <option value="">Part-time</option>
                                        </select>
                                    </div><br><br>

                                    <div class="col-12 col-md-6 col-lg-4">
                                        <label for=""></label>
                                        <select name="" id="">
                                            <option value="">January</option>
                                            <option value="">February</option>
                                            <option value="">March</option>
                                            <option value="">Aplril</option>
                                            <option value="">May</option>
                                            <option value="">June</option>
                                            <option value="">July</option>
                                            <option value="">August</option>
                                            <option value="">September</option>
                                            <option value="">October</option>
                                            <option value="">November</option>
                                            <option value="">December</option>
                                        </select>
                                    </div><br><br>

                                    <div class="col-12 col-md-6 col-lg-4">
                                        <label for=""></label>
                                        <select name="" id="">
                                            <option value="">2022</option>
                                            <option value="">2021</option>
                                            <option value="">2020</option>
                                        </select>
                                    </div><br> <br>

                                </div>

                                <div class="row mt-3 mb-4">

                                    <div class="col-12 col-md-6 col-lg-4">
                                        <p class="text-center">
                                            <a href="#" class="btn btn-primary px-5">Submit</a>
                                        </p>
                                    </div>
                                </div>

                            </div>

                        </div>

                    </div>
                </section>

            </div>
</div>
@endsection