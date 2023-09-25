@extends('layouts.AdminPanal')
@section('content')
<div class="u-body">
    <section class="es-form-area">
        <div class="card">
            <header class="card-header bg-gradient border-0 pt-5 pb-5 d-flex align-items-center">
                <h2 class="text-white mb-0">Trial Balance</h2>
            </header>
            <div class="session_add">
                <div class="row">


                    <div class="col-md-10 mb-3">
                        <label for="">Month <span>*</span></label>
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
                    </div>

                    <div class="col-md-10 mb-3">
                        <label for="">Year <span>*</span></label>
                        <select name="" id="">
                            <option value="">Select Year</option>
                            <option value="">2022</option>
                            <option value="">2021</option>
                            <option value="">2020</option>
                            <option value="">2019</option>
                            <option value="">2018</option>
                        </select>
                    </div>

                    <div class="col-md-10 mb-3">
                        <label for="">A/C Head <span>*</span></label>
                        <select name="" id="">
                            <option value="">Select A/C Head</option>
                            <option value="">Grand Parent</option>
                            <option value="">30.00 Yearly Tour</option>
                            <option value="">34.00 Admission</option>
                        </select>
                    </div>

                    <div class="col-md-10 mb-3">
                        <label for="">Start Date <span>*</span></label>
                        <input type="date" name="" id="">
                    </div>

                    <div class="col-md-10 mb-3">
                        <label for="">End Date <span>*</span></label>
                        <input type="date" name="" id="">
                    </div>


                    <div class="col-md-10 mb-3">
                        <label for="">Payment</label>
                        <p class="rad_text">
                            <input type="radio" placeholder="Education" name="" id="check">
                            <b>Cash</b>
                        </p> &nbsp; &nbsp;
                        <p class="rad_text">
                            <input type="radio" placeholder="Education" name="" id="check">
                            <b>Bank</b>
                        </p>
                    </div>


                    <div class="col-md-10 mt-4 mb-3">
                        <p>
                            <a href="" class="btn bg-gradient border-0 text-white">Submit</a>
                        </p>
                    </div>

                </div>
            </div>

            <div class="container">
                <div class="d-flex justify-content-between mt-5 mb-4">
                    <a href="#" class="print_btn"><i class="fa-solid fa-print"></i> Print</a>
                    <a href="#" class="print_btn"><i class="fa-solid fa-download"></i> Download</a>
                </div>
            </div>


            <div class="table-responsive attendenceTable account_ledger_table py-5">
                <div class="container">
                    <div class="text-center studentDuesTop">
                        <h2>Learning Campus School</h2>
                        <a href="#">www.learningCampus.com</a>
                        <p>Uttara, Dhaka</p>
                        <p>Trial Balance for the month of April 2021</p>
                        <p>Payment Type : Cash</p>
                        <p>A/C Head : GRAND PARENT </p>
                    </div>
                    <table class="table table-bordered table-striped text-center">
                        <thead>
                            <tr class="th_color">
                                <th scope="col">Sl. </th>
                                <th scope="col">Particulars</th>
                                <th scope="col">Receive / Deposit</th>
                                <th scope="col">Payment / Withdraw </th>
                            </tr>
                        </thead>
                        <tbody>

                            <tr>
                                <th scope="row">1</th>
                                <td>1.00 - Tuition Fee</td>
                                <td>7,000.00</td>
                                <td>0.00</td>
                            </tr>

                            <tr>
                                <th scope="row">1</th>
                                <td>1.00 - Tuition Fee</td>
                                <td>7,000.00</td>
                                <td>0.00</td>
                            </tr>

                            <tr>
                                <th scope="row">1</th>
                                <td>1.00 - Tuition Fee</td>
                                <td>7,000.00</td>
                                <td>0.00</td>
                            </tr>

                            <tr>
                                <th scope="row" colspan="2" class="text-right">Total :</th>
                                <td>19,150.00 </td>
                                <td>3,500.00</td>
                            </tr>

                        </tbody>
                    </table>

                </div>

            </div>

        </div>
    </section>
</div>
@endsection