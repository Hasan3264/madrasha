@extends('layouts.AdminPanal')
@section('content')
<div class="u-body">
    <section class="es-form-area">
        <div class="card">
            <header class="card-header bg-gradient border-0 pt-5 pb-5 d-flex align-items-center">
                <h2 class="text-white mb-0">
                    Accounts Payable / Receivable
                </h2>
            </header>

            <div class="card-body table-responsive" id="institue">
                <form action="" class="es-form es-add-form">

                    <div class="d-flex justify-content-between">
                        <a href="#" class="print_btn"><i class="fa-solid fa-print"></i> Print</a>
                        <a href="#" class="print_btn"><i class="fa-solid fa-download"></i> Download</a>
                    </div>

                    <div class="balance_table">
                        <div class="table-responsive">

                            <div class="balance_top">
                                <h2>Learning Campus (Main Branch)</h2>
                                <a href="#">www.learningCampus.com</a>
                                <p>Mirpur, Dhaka - 1202</p>
                                <h4>Balance Sheet for the month of April 2022</h4>
                                <p>Session : 2021</p>
                            </div>

                            <div class="table-responsive container table-striped">

                                <table class="table table-bordered">
                                    <thead style="background-color:rgb(220, 220, 220)">
                                        <tr>
                                            <th> Recivable</th>
                                            <th class="text-right">Payable</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <tr>
                                            <th>
                                                <table class="table table-bordered">
                                                    <thead style="background-color:rgb(220, 220, 220)">
                                                        <tr>
                                                            <th>Sl.</th>
                                                            <th>Particulars</th>
                                                            <th>Amount</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>1</td>
                                                            <td>Nursery</td>
                                                            <td class="text-right">11,730.00</td>
                                                        </tr>
                                                        <tr>
                                                            <td>1</td>
                                                            <td>Six</td>
                                                            <td class="text-right">11,730.00</td>
                                                        </tr>
                                                        <tr>
                                                            <td>1</td>
                                                            <td>Nine</td>
                                                            <td class="text-right">11,730.00</td>
                                                        </tr>
                                                        <tr>
                                                            <td colspan="2" class="text-right"><b>Total : </b></td>
                                                            <td>296,110.00</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </th>

                                            <th>
                                                <table class="table table-bordered">
                                                    <thead style="background-color:rgb(220, 220, 220)">
                                                        <tr>
                                                            <th>Month / Year</th>
                                                            <th>Particulars</th>
                                                            <th class="text-right">Amount</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>-</td>
                                                            <td>-</td>
                                                            <td>-</td>
                                                        </tr>
                                                        <tr>
                                                            <td colspan="2" class="text-right"><b>Total : </b></td>
                                                            <td>0.00</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </th>
                                        </tr>

                                        <tr>
                                            <td colspan="2" class="text-right"><b>Balance : 296,110.00</b></td>
                                        </tr>
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
</div>
@endsection