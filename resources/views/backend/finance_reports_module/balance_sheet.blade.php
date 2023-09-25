@extends('layouts.AdminPanal')
@section('content')
<div class="u-body">
    <section class="es-form-area">
        <div class="card">
            <header class="card-header bg-gradient border-0 pt-5 pb-5 d-flex align-items-center">
                <h2 class="text-white mb-0">
                    Balance Sheet
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

                            <div class="container table-responsive table-striped">

                                <table class="table table-bordered ">
                                    <thead style="background-color:rgb(220, 220, 220)">
                                        <tr>
                                            <th> Particulars</th>
                                            <th class="text-right">As on April 2022</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th colspan="2">CURRENT LIABILITIES</th>
                                        </tr>
                                        <tr>
                                            <td colspan="2" class="text-right">0.00</td>
                                        </tr>
                                    </tbody>
                                </table>

                                <table class="table table-bordered mt-3 mb-3">
                                    <thead style="background-color:rgb(220, 220, 220)">
                                        <tr>
                                            <th scope="col" colspan="2">CURRENT ASSETS</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">Dues from Students (Nursery )</th>
                                            <td class="text-right">11,730.00</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Dues from Students (Six)</th>
                                            <td class="text-right">15,040.00</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Dues from Students (Six)</th>
                                            <td class="text-right">15,040.00</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Dues from Students (Six)</th>
                                            <td class="text-right">15,040.00</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Dues from Students (Six)</th>
                                            <td class="text-right">15,040.00</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Dues from Students (Six)</th>
                                            <td class="text-right">15,040.00</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Dues from Students (Six)</th>
                                            <td class="text-right">15,040.00</td>
                                        </tr>
                                        <tr>
                                            <td class="text-right" colspan="2"><u>2025</u></td>
                                        </tr>
                                        <tr>
                                            <th scope="row" colspan="2" style="background-color:rgb(220, 220, 220)">PROFIT & LOSS</th>
                                        </tr>
                                        <tr>
                                            <th scope="row">Total Received (Cash)</th>
                                            <td class="text-right">15,040.00</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Total Payment (Cash)</th>
                                            <td class="text-right">15,040.00</td>
                                        </tr>
                                        <tr>
                                            <td class="text-right" colspan="2"><u>1255</u></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Total Received / Deposited (Bank)</th>
                                            <td class="text-right">15,040.00</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Total Payment / Withdraw (Bank)</th>
                                            <td class="text-right">15,040.00</td>
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