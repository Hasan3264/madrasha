@extends('layouts.AdminPanal')
@section('content')
<div class="u-body">
    <section class="es-form-area">
        <div class="card">
            <header class="card-header bg-gradient border-0 pt-5 pb-5 d-flex align-items-center">
                <h2 class="text-white mb-0">Waived Student List </h2>
            </header>

            <div class="academic_info">
                <h5>

                </h5>

                <div class="container">

                    <div class="row mt-3 mb-4">

                        <div class="col-6 col-md-6 col-xl-4">
                            <label for="">Session <span class="text-danger">*</span></label>
                            <select name="" id="">
                                <option value="">Select Session</option>
                                <option value="">2022</option>
                                <option value="">2021</option>
                                <option value="">2020</option>
                            </select>
                        </div><br><br>

                        <div class="col-6 col-md-6 col-xl-4">
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


                        <div class="col-6 col-md-6 col-xl-4">
                            <label for="">Shift <span class="text-danger">*</span></label>
                            <select name="" id="">
                                <option value="">Select Shift</option>
                                <option value="">Morning</option>
                                <option value="">Day</option>
                            </select>
                        </div><br><br>

                    </div>

                    <div class="row mt-3 mb-4">

                        <div class="col-6 col-md-6 col-xl-4">
                            <label for="">Section <span class="text-danger">*</span></label>
                            <select name="" id="">
                                <option value="">Select Section</option>
                                <option value="">A</option>
                                <option value="">B</option>
                            </select>
                        </div><br><br>

                        <div class="col-6 col-md-6 col-xl-4">
                            <label for="">Student Name <span class="text-danger">*</span></label>
                            <select name="" id="">
                                <option value="">Select Student Name</option>
                                <option value="">02145 - kamal</option>
                                <option value="">02145 - kamal</option>
                                <option value="">02145 - kamal</option>
                                <option value="">02145 - kamal</option>
                                <option value="">02145 - kamal</option>
                            </select>
                        </div><br><br>

                        <div class="col-6 col-md-6 col-xl-4">
                            <label for="">Month <span class="text-danger">*</span></label>
                            <select name="" id="">
                                <option value="">Select Month </option>
                                <option value="">January</option>
                                <option value="">February</option>
                                <option value="">March</option>
                                <option value="">April</option>
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
                    </div>


                    <div class="row mt-3 mb-4">

                        <div class="col-6 col-md-6 col-xl-4">
                            <label for="">Fee Type <span class="text-danger">*</span></label>
                            <select name="" id="">
                                <option value="">Select Fee Type</option>
                            </select>
                        </div><br><br>

                        <div class="col-6 col-md-6 col-xl-4 mt-4">
                            <a href="#" class="btn btn-primary px-5">Search</a>
                        </div>

                    </div>

                    <div class="studentWavier">
                        <p>No Record Exists</p>
                    </div>

                </div>

            </div>

        </div>
    </section>
</div>
@endsection