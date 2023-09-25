@extends('layouts.AdminPanal')
@section('content')
<div class="u-body">
    <section class="es-form-area">
        <div class="card">
            <header class="card-header bg-gradient border-0 pt-5 pb-5 d-flex align-items-center">
                <h2 class="text-white mb-0">SMS Details Report</h2>
            </header>

            <div class="academic_info">

                <div class="container">

                    <div class="row mt-3 mb-4">

                        <div class="col-6">
                            <label for="">Sms Type <span class="text-danger">*</span></label>
                            <select name="" id="">
                                <option value="">Select Type</option>
                                <option value="">Admission</option>
                                <option value="">Attendence</option>
                                <option value="">Result</option>
                                <option value="">Payroll</option>
                                <option value="">Account</option>
                                <option value="">Custom</option>
                            </select>
                        </div>

                        <div class="col-6">
                            <label for="">Start Date <span class="text-danger">*</span></label>
                            <input type="date" name="" id="">
                        </div>

                    </div>

                    <div class="row mt-3 mb-4">

                        <div class="col-6">
                            <label for="">End Date <span class="text-danger">*</span></label>
                            <input type="date" name="" id="">
                        </div>

                        <div class="col-6">
                            <label for="">SMS Body <span class="text-danger">*</span></label>
                            <textarea name="" id="" cols="30" rows="10"></textarea>
                        </div>

                    </div>

                    <div class="row mt-3 mb-4">

                        <div class="col-6">
                            <label for="">Mobile Number <span class="text-danger">*</span></label>
                            <input type="text">
                        </div>

                        <div class="col-6">
                            <a href="#" class="btn btn-primary px-5">Submit</a>
                        </div>

                    </div>


                </div>


                <div class="table-responsive attendenceTable studentLedger">
                    <div class="text-center studentDuesTop">
                        <h2>Learning Campus School</h2>
                        <a href="#">www.learningCampus.com</a>
                        <p>Uttara, Dhaka</p>
                        <p>SMS Details Report : 13 Apr 2021 to 13 Apr 2022</p>
                        <p>SMS Type : Admission</p>
                        <p style="color: red;">Total SMS : 204</p>
                    </div>
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr class="th_color">
                                <th scope="col">Sl. </th>
                                <th scope="col">Mobile No</th>
                                <th scope="col">SMS Body</th>
                                <th scope="col">SMS Count</th>
                                <th scope="col">Date</th>
                                <th scope="col">Status</th>
                            </tr>
                        </thead>
                        <tbody>

                            <tr>
                                <th scope="row">1</th>
                                <td>8800000000000</td>
                                <td>
                                    Dear Guardian, your child is admitted now to TechTrain School and College in class
                                    Nine. Your child roll : 2, ID : 22112002. You can sign in to our parents portal by
                                    using Username : 22112002 &amp; Password : 123456
                                </td>
                                <td>2</td>
                                <td>12, April (Tue) 2022</td>
                                <td>Successful</td>

                            </tr>

                            <tr>
                                <th scope="row">1</th>
                                <td>8800000000000</td>
                                <td>
                                    Dear Guardian, your child is admitted now to TechTrain School and College in class
                                    Nine. Your child roll : 2, ID : 22112002. You can sign in to our parents portal by
                                    using Username : 22112002 &amp; Password : 123456
                                </td>
                                <td>2</td>
                                <td>12, April (Tue) 2022</td>
                                <td>Successful</td>

                            </tr>

                            <tr>
                                <th scope="row">1</th>
                                <td>8800000000000</td>
                                <td>
                                    Dear Guardian, your child is admitted now to TechTrain School and College in class
                                    Nine. Your child roll : 2, ID : 22112002. You can sign in to our parents portal by
                                    using Username : 22112002 &amp; Password : 123456
                                </td>
                                <td>2</td>
                                <td>12, April (Tue) 2022</td>
                                <td>Successful</td>

                            </tr>

                            <tr>
                                <th scope="row">1</th>
                                <td>8800000000000</td>
                                <td>
                                    Dear Guardian, your child is admitted now to TechTrain School and College in class
                                    Nine. Your child roll : 2, ID : 22112002. You can sign in to our parents portal by
                                    using Username : 22112002 &amp; Password : 123456
                                </td>
                                <td>2</td>
                                <td>12, April (Tue) 2022</td>
                                <td>Successful</td>

                            </tr>

                        </tbody>
                    </table>



                </div>


            </div>
        </div>
    </section>

</div>
@endsection
