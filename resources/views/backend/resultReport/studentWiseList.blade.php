@extends('layouts.AdminPanal')
@section('content')
<div class="u-body">
    <section class="es-form-area">
        <div class="card">
            <header class="card-header bg-gradient border-0 pt-5 pb-5 d-flex align-items-center">
                <h2 class="text-white mb-0">Student Wise Transcipt</h2>
            </header>
            <div class="academic_info">
                <h5>

                </h5>

                <div class="container">

                    <div class="row mt-3 mb-4">


                        <div class="col-6 col-md-6">
                            <label for="">Session <span class="text-danger">*</span></label>
                            <select name="" id="">
                                <option value="">Select Session</option>
                                <option value="">2022</option>
                                <option value="">2021</option>
                                <option value="">2020</option>
                            </select>
                        </div>


                        <div class="col-6 col-md-6">
                            <label for="">Class <span class="text-danger">*</span></label>
                            <select name="" id="">
                                <option value="">Select Class </option>
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
                        </div>

                    </div>



                    <div class="row mt-3 mb-4">

                        <div class="col-6 col-md-6">
                            <label for="">Shift<span class="text-danger">*</span></label>
                            <select name="" id="">
                                <option value="">Select Shift</option>
                                <option value="">Morning</option>
                                <option value="">Day</option>
                            </select>
                        </div>

                        <div class="col-6 col-md-6">
                            <label for="">Section <span class="text-danger">*</span></label>
                            <select name="" id="">
                                <option value="">Select Section</option>
                                <option value="">A</option>
                                <option value="">B</option>
                            </select>
                        </div>

                    </div>


                    <div class="row mt-3 mb-4">

                        <div class="col-6 col-md-6">
                            <label for="">Student<span class="text-danger">*</span></label>
                            <select name="" id="">
                                <option value="">Select Student</option>
                                <option value="">90495 - Kamal</option>
                                <option value="">90495 - Roni</option>
                                <option value="">90495 - Kiron</option>
                                <option value="">90495 - Rasel</option>
                                <option value="">90495 - Nirob</option>
                            </select>
                        </div>


                        <div class="col-6 col-md-6">
                            <a href="" class="btn bg-gradient border-0 text-white">Submit</a>
                        </div>

                    </div>

                </div>

                <div class="d-flex justify-content-between" style="margin-top: 70px;">
                    <a href="#" class="print_btn"><i class="fa-solid fa-print"></i> Print</a>
                    <a href="#" class="print_btn"><i class="fa-solid fa-download"></i> Download</a>
                </div>

                <div class="transciptForm">
                    <div class="transciptDIv" id="transciptDiv">
                        <img src="Logo _ Icon/preload2.png" class="copyrightTrans" alt="">
                        <div class="addFormTop">
                            <div class="adFormLogo">
                                <img src="Logo _ Icon/logo.png" alt="">
                            </div>
                            <div class="adFormTxt">
                                <h4>Learning Campus (Main Branch)</h4>
                                <a href="#">www.LearningCampus.com</a>
                                <p>Mirpur-1100, Dhaka</p>
                                <p>Mobile : 01234567890</p>
                                <h2>Mark Sheet</h2>
                            </div>
                            <div class="adFormPicture">
                                <img src="assets/img/student.png" alt="">
                            </div>
                        </div>

                        <div class="transcriptMid">
                            <div class="studentDetTrans">
                                <label for="">Name of Student </label>
                                <p>Suraiya Khan</p>
                            </div>
                            <div class="studentDetTrans">
                                <label for="">Father's Name </label>
                                <p>Rased Khan</p>
                            </div>
                            <div class="studentDetTrans">
                                <label for="">Mother's Name </label>
                                <p>Ramisa Khan</p>
                            </div>
                            <div class="studentDetTrans">
                                <label for="">Date Of Birth </label>
                                <p>01 January 2001</p>
                            </div>
                            <div class="studentDetTrans">
                                <label for="">Institue </label>
                                <p>Learning Campus School(Main Branch)</p>
                            </div>
                        </div>

                        <div class="transMark">
                            <div class="table-responsive attendenceTable">
                                <table class="table text-center transTable">
                                    <thead>
                                        <tr>
                                            <th scope="col">SL.NO.</th>
                                            <th scope="col">Name of Subjects</th>
                                            <th scope="col">Letter Grade</th>
                                            <th scope="col">Grade Point(GP)</th>
                                            <th scope="col">GPA <br> <small>(Without Additional Subject)</small> </th>
                                            <th scope="col">Grade Point Avarage (GPA) </th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <tr>
                                            <th scope="row">1</th>
                                            <td>Bangla 1st Paper</td>
                                            <td>A+</td>
                                            <td>5</td>
                                            <td rowspan="6">4.68</td>
                                            <td rowspan="9">4.96</td>
                                        </tr>

                                        <tr>
                                            <th scope="row">2</th>
                                            <td>Bangla 2nd Paper</td>
                                            <td>A+</td>
                                            <td>5</td>
                                        </tr>

                                        <tr>
                                            <th scope="row">3</th>
                                            <td>English 2nd Paper</td>
                                            <td>A-</td>
                                            <td>4</td>
                                        </tr>

                                        <tr>
                                            <th scope="row">4</th>
                                            <td>Matchmatics</td>
                                            <td>A+</td>
                                            <td>5</td>
                                        </tr>

                                        <tr>
                                            <th scope="row">5</th>
                                            <td>Science</td>
                                            <td>A+</td>
                                            <td>5</td>
                                        </tr>

                                        <tr>
                                            <th scope="row">6</th>
                                            <td>Religion</td>
                                            <td>A+</td>
                                            <td>5</td>
                                        </tr>

                                        <tr>
                                            <td colspan="5">Additional Subject</td>
                                        </tr>

                                        <tr>
                                            <th scope="row" rowspan="2">7</th>
                                            <td rowspan="2">Agriculture</td>
                                            <td rowspan="2">A+</td>
                                            <td rowspan="2">5</td>
                                            <td>GPA Above 2 </td>
                                        </tr>

                                        <tr>
                                            <td>2.00</td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>



                        <div class="trancriptBottom">
                            <p>Result Published Date : Uttara, December 31,2016</p>
                            <p>Controller of Examinations</p>
                        </div>
                    </div>
                </div>


            </div>

        </div>
    </section>
</div>
@endsection
