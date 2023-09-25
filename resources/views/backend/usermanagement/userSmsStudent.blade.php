@extends('layouts.AdminPanal')
@section('content')
<div class="u-body">
    <section class="es-form-area">
        <div class="card">
            <header class="card-header bg-gradient border-0 pt-5 pb-5 d-flex align-items-center">
                <h2 class="text-white mb-0">Search Students for SMS</h2>
            </header>

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
                            <label for="">Student ID <span class="text-danger">*</span></label>
                            <input type="text">
                        </div>

                        <div class="col-6">
                            <a href="#" class="btn btn-primary px-5">Save</a>
                        </div>

                    </div>


                </div>

                <div class="table-responsive attendenceTable studentLedger">
                    <div class="text-center studentDuesTop">
                        <h2>Learning Campus School</h2>
                        <a href="#">www.learningCampus.com</a>
                        <p>Uttara, Dhaka</p>
                        <p>Student's List for SMS Password of Session 2021</p>
                        <p>Bangla Medium (Nine) - A</p>
                    </div>
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr class="th_color">
                                <th scope="col"><input type="checkbox" name="" id="check"></th>
                                <th scope="col">ID / Username</th>
                                <th scope="col">Name</th>
                                <th scope="col">Roll No.</th>
                                <th scope="col"><button class="btn btn-primary">Send SMS(ALL)</button></th>
                            </tr>
                        </thead>
                        <tbody>

                            <tr>
                                <th scope="row"><input type="checkbox" name="" id="check"></th>
                                <td>21113001</td>
                                <td>
                                    <img src="assets/img/student.png" alt="">
                                    <span>ABDUL ALIM</span></td>
                                <td>1</td>
                                <td>
                                    <button class="btn btn-secondary mt-2">Change Password</button>
                                    <button class="btn btn-info mt-2">Send SMS</button>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row"><input type="checkbox" name="" id="check"></th>
                                <td>21113001</td>
                                <td>
                                    <img src="assets/img/student.png" alt="">
                                    <span>ABDUL ALIM</span></td>
                                <td>1</td>
                                <td>
                                    <button class="btn btn-secondary mt-2">Change Password</button>
                                    <button class="btn btn-info mt-2">Send SMS</button>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row"><input type="checkbox" name="" id="check"></th>
                                <td>21113001</td>
                                <td>
                                    <img src="assets/img/student.png" alt="">
                                    <span>ABDUL ALIM</span></td>
                                <td>1</td>
                                <td>
                                    <button class="btn btn-secondary mt-2">Change Password</button>
                                    <button class="btn btn-info mt-2">Send SMS</button>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row"><input type="checkbox" name="" id="check"></th>
                                <td>21113001</td>
                                <td>
                                    <img src="assets/img/student.png" alt="">
                                    <span>ABDUL ALIM</span></td>
                                <td>1</td>
                                <td>
                                    <button class="btn btn-secondary mt-2">Change Password</button>
                                    <button class="btn btn-info mt-2">Send SMS</button>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row"><input type="checkbox" name="" id="check"></th>
                                <td>21113001</td>
                                <td>
                                    <img src="assets/img/student.png" alt="">
                                    <span>ABDUL ALIM</span></td>
                                <td>1</td>
                                <td>
                                    <button class="btn btn-secondary mt-2">Change Password</button>
                                    <button class="btn btn-info mt-2">Send SMS</button>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row"><input type="checkbox" name="" id="check"></th>
                                <td>21113001</td>
                                <td>
                                    <img src="assets/img/student.png" alt="">
                                    <span>ABDUL ALIM</span></td>
                                <td>1</td>
                                <td>
                                    <button class="btn btn-secondary mt-2">Change Password</button>
                                    <button class="btn btn-info mt-2">Send SMS</button>
                                </td>
                            </tr>

                        </tbody>
                    </table>


                </div>


            </div>


        </div>
    </section>

</div>
@endsection
