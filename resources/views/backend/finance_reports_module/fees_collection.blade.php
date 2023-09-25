@extends('layouts.AdminPanal')
@section('content')
<div class="u-body">
    <section class="es-form-area">
        <div class="card">
            <header class="card-header bg-gradient border-0 pt-5 pb-5 d-flex align-items-center">
                <h2 class="text-white mb-0">Student's Fees Collection Report </h2>
            </header>

            <div class="academic_info">
                <h5>

                </h5>

                <div class="container">

                    <div class="row mt-3 mb-4">

                        <div class="col-6 col-md-6 col-lg-6">
                            <label for="">Session <span class="text-danger">*</span></label>
                            <select name="" id="">
                                <option value="">Select Session</option>
                                <option value="">2022</option>
                                <option value="">2021</option>
                                <option value="">2020</option>
                            </select>
                        </div><br><br>

                        <div class="col-6 col-md-6 col-lg-6">
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
                                <option value="" class="bold_text">English Medium</option>
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
                        </div><br><br>

                    </div>


                    <div class="row mt-3 mb-4">

                        <div class="col-6 col-md-6 col-lg-6">
                            <label for="">Start Date <span class="text-danger">*</span></label>
                            <input type="date" name="" id="">
                        </div><br>

                        <div class="col-6 col-md-6 col-lg-6">
                            <label for="">End Date <span class="text-danger">*</span></label>
                            <input type="date" name="" id="">
                        </div><br>
                    </div>

                    <div class="row mt-3 mb-4">
                        <div class="col-6 col-md-4 mt-4">
                            <a href="#" class="btn btn-primary px-5">Save</a>
                        </div>
                    </div>

                </div>

                <div class="feesBox">
                    <p>No data exists !</p>
                </div>


            </div>

        </div>

    </section>
</div>
@endsection