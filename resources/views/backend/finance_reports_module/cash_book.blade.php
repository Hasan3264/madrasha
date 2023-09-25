@extends('layouts.AdminPanal')
@section('content')
<div class="u-body">
    <section class="es-form-area">
        <div class="card">
            <header class="card-header bg-gradient border-0 pt-5 pb-5 d-flex align-items-center">
                <h2 class="text-white mb-0">Cash Book</h2>
            </header>

            <div class="academic_info">
                <h5>

                </h5>

                <div class="container">

                    <div class="row mt-3 mb-4">

                        <div class="col-6 col-md-6">
                            <label for="">Month <span class="text-danger">*</span></label>
                            <select name="" id="">
                                <option value="">Select Month</option>
                                <option value="">january</option>
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

                        <div class="col-6 col-md-6">
                            <label for="">Year <span class="text-danger">*</span></label>
                            <select name="" id="">
                                <option value="">Select Year</option>
                                <option value="">2022</option>
                                <option value="">2021</option>
                                <option value="">2020</option>
                                <option value="">2019</option>
                                <option value="">2018</option>
                            </select>
                        </div>



                    </div>

                    <div class="row mt-3 mb-4">

                        <div class="col-6 col-md-6">
                            <label for="">Start Date <span class="text-danger">*</span></label>
                            <input type="date" name="" id="">
                        </div>

                        <div class="col-6 col-md-6">
                            <label for="">End Date <span class="text-danger">*</span></label>
                            <input type="date" name="" id="">
                        </div>

                    </div>

                    <div class="row mt-3 mb-4">

                        <div class="col-6 col-md-6 mt-4">
                            <a href="#" class="btn btn-primary px-5">Submit</a>
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
                            <p>Cash Book for the month of April 2021</p>
                        </div>
                        <table class="table table-bordered table-striped text-center">
                            <thead>
                                <tr class="th_color">
                                    <th scope="col">Receive (Dr.) </th>
                                    <th scope="col">Payment (Cr.)</th>
                                </tr>
                            </thead>
                            <tbody>

                                <tr>
                                    <td>
                                        <table class="table table-bordered table-striped text-center">
                                            <tbody>
                                                <tr>
                                                    <td>Date</td>
                                                    <td>Particulars</td>
                                                    <td>Amount</td>
                                                </tr>
                                                <tr>
                                                    <td>2021-04-01</td>
                                                    <td>1.00 - Tuition Fee</td>
                                                    <td>400.00</td>
                                                </tr>
                                                <tr>
                                                    <td>2021-04-01</td>
                                                    <td>1.00 - Tuition Fee</td>
                                                    <td>400.00</td>
                                                </tr>
                                                <tr>
                                                    <td>2021-04-01</td>
                                                    <td>1.00 - Tuition Fee</td>
                                                    <td>400.00</td>
                                                </tr>
                                                <tr>
                                                    <td>2021-04-01</td>
                                                    <td>1.00 - Tuition Fee</td>
                                                    <td>400.00</td>
                                                </tr>
                                                <tr>
                                                    <td>2021-04-01</td>
                                                    <td>1.00 - Tuition Fee</td>
                                                    <td>400.00</td>
                                                </tr>
                                                <tr>
                                                    <td colspan="2" class="text-right">Total : </td>
                                                    <td>19,150.00</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </td>

                                    <td>
                                        <table class="table table-bordered table-striped text-center">
                                            <tbody>
                                                <tr>
                                                    <td>Date</td>
                                                    <td>Particulars</td>
                                                    <td>Amount</td>
                                                </tr>
                                                <tr>
                                                    <td>2021-04-04</td>
                                                    <td>31.00 - Internet Bill</td>
                                                    <td>3,500.00</td>
                                                </tr>
                                                <tr>
                                                    <td colspan="2" class="text-right">Total : </td>
                                                    <td>3,500.00</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>

                            </tbody>
                        </table>

                    </div>

                </div>


            </div>

        </div>
    </section>
</div>
@endsection