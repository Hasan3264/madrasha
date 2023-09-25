@extends('layouts.AdminPanal')
@section('content')
<div class="u-body">
    <section class="es-form-area">
        <div class="card">
            <header class="card-header bg-gradient border-0 pt-5 pb-5 d-flex align-items-center">
                <h2 class="text-white mb-0">Student's Dues </h2>
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
                            </select>
                        </div><br><br>

                    </div>

                    <div class="row mt-3 mb-4">

                        <div class="col-6 col-md-6 col-xl-4">
                            <label for="">Section <span class="text-danger">*</span></label>
                            <select name="" id="">
                                <option value="">Select Section</option>
                            </select>
                        </div><br><br>

                        <div class="col-6 col-md-6 col-xl-4">
                            <label for="">Student ID <span class="text-danger">*</span></label>
                            <input type="text" name="" id="">
                        </div><br><br>

                        <div class="col-6 col-md-6 col-xl-4 mt-4">
                            <a href="#" class="btn btn-primary px-5">Save</a>
                        </div>

                    </div>

                    <div class="studentDues">
                        <div class="text-center studentDuesTop">
                            <h2>Learning Campus School</h2>
                            <a href="#">www.learningCampus.com</a>
                            <p>Uttara, Dhaka</p>
                            <h5>Student's Due Report of session 2021</h5>
                        </div>
                        <div class="absentStudentRight table-responsive">
                            <!---- student table  ----->
                            <table class="table table-bordered mt-3 text-center">
                                <thead class="table-bordered">
                                    <tr>
                                        <th scope="col"><input type="checkbox" name="" id="check"></th>
                                        <th scope="col">ID</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Class</th>
                                        <th scope="col">Shift</th>
                                        <th scope="col">Section</th>
                                        <th scope="col">Roll</th>
                                        <th scope="col">Total Due till (April) </th>
                                        <th scope="col">Total Collection</th>
                                        <th scope="col"><button class="btn btn-secondary">Send SMS(ALL)</button></th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <tr>
                                        <td><input type="checkbox" name="" id="check"></td>
                                        <td>20201002</td>
                                        <td>
                                            <img src="assets/img/student.png" class="curentStuImage" alt="">
                                            <br><a href="#">Mahim</a>
                                        </td>
                                        <td>Eight</td>
                                        <td>Day</td>
                                        <td>A</td>
                                        <td>1</td>
                                        <td>3,000.00</td>
                                        <td>0.00</td>
                                        <td>
                                            <button class="btn btn-secondary mb-2">Details</button>
                                            <button class="btn btn-primary">Send SMS</button>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td><input type="checkbox" name="" id="check"></td>
                                        <td>20201002</td>
                                        <td>
                                            <img src="assets/img/student.png" class="curentStuImage" alt="">
                                            <br><a href="#">Mahim</a>
                                        </td>
                                        <td>Eight</td>
                                        <td>Day</td>
                                        <td>A</td>
                                        <td>1</td>
                                        <td>3,000.00</td>
                                        <td>0.00</td>
                                        <td>
                                            <button class="btn btn-secondary mb-2">Details</button>
                                            <button class="btn btn-primary">Send SMS</button>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td><input type="checkbox" name="" id="check"></td>
                                        <td>20201002</td>
                                        <td>
                                            <img src="assets/img/student.png" class="curentStuImage" alt="">
                                            <br><a href="#">Mahim</a>
                                        </td>
                                        <td>Eight</td>
                                        <td>Day</td>
                                        <td>A</td>
                                        <td>1</td>
                                        <td>3,000.00</td>
                                        <td>0.00</td>
                                        <td>
                                            <button class="btn btn-secondary mb-2">Details</button>
                                            <button class="btn btn-primary">Send SMS</button>
                                        </td>
                                    </tr>

                                </tbody>
                            </table>
                            <!---- /student table ----->
                        </div>
                    </div>

                </div>

            </div>

        </div>
    </section>
</div>
@endsection