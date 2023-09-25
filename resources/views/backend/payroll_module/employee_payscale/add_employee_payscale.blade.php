@extends('layouts.AdminPanal')
@section('content')
<div class="u-body">
    <section class="es-form-area">
        <div class="card">
            <header class="card-header bg-gradient border-0 pt-5 pb-5 d-flex align-items-center">
                <h3 class="text-white mb-0">
                    <ul class="nav nav-tabs">
                        <li class="nav-item">
                            <a class="nav-link active" href="javascript:void(0)" onclick="institue()">General Information</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="javascript:void(0)" onclick="general()">Chart Information</a>
                        </li>
                    </ul>
                </h3>
            </header>

            <div class="card-body" id="institue">
                <form action="" class="es-form es-add-form">

                    <div class="row">

                        <div class="col-lg-8 offset-lg-2 col-md-12 mb-4">
                            <label for="subject">Pay Scale Title <span>*</span></label>
                            <input type="text" placeholder="" name="" id="">
                        </div>

                        <div class="col-lg-8 offset-lg-2 col-md-12 mb-4">
                            <label for="day">Employee Type<span>*</span></label>
                            <select id="day" class="es-add-select" style="display: none;">
                                <option value="">Select Employee Type</option>
                                <option value="">Casual</option>
                                <option value="">Contractual</option>
                                <option value="">Half-time</option>
                                <option value="">Full-time</option>
                                <option value="">Part-time</option>
                            </select>
                        </div>

                        <div class="col-lg-8 offset-lg-2 col-md-12 mb-4">
                            <label for="day">Basic Salary <span>*</span></label>
                            <input type="text">
                        </div>

                        <div class="col-lg-8 offset-lg-2 col-md-12 mb-4">
                            <label for="day">Status <span>*</span></label>
                            <select name="" id="">
                                <option value="">Active</option>
                                <option value="">Deactive</option>
                            </select>
                        </div>

                    </div>

                    <p>
                        <a href="" class="btn bg-gradient border-0 text-white">Submit</a>
                        <a href="" class="btn  border-0 text-white">Cancel</a>
                    </p>

                </form>
            </div>

            <div class="card-body" id="general">
                <form action="" class="es-form es-add-form">

                    <div class="row">

                        <table class="table">
                            <thead class="thead-light">
                                <tr>
                                    <th scope="col">Fee Type</th>
                                    <th scope="col">Head Type</th>
                                    <th scope="col">Amount</th>
                                </tr>
                            </thead>
                            <tbody>

                                <tr>
                                    <th scope="row">14.00 House Rent</th>
                                    <td style="color: green;">Addition</td>
                                    <td><input type="text" placeholder="0.00"></td>
                                </tr>
                                <tr>
                                    <th scope="row">14.00 House Rent</th>
                                    <td style="color: green;">Addition</td>
                                    <td><input type="text" placeholder="0.00"></td>
                                </tr>
                                <tr>
                                    <th scope="row">14.00 House Rent</th>
                                    <td style="color: green;">Addition</td>
                                    <td><input type="text" placeholder="0.00"></td>
                                </tr>
                                <tr>
                                    <th scope="row">14.00 House Rent</th>
                                    <td style="color: green;">Addition</td>
                                    <td><input type="text" placeholder="0.00"></td>
                                </tr>
                                <tr>
                                    <th scope="row">14.00 House Rent</th>
                                    <td style="color: green;">Addition</td>
                                    <td><input type="text" placeholder="0.00"></td>
                                </tr>

                            </tbody>
                        </table>
                    </div>

                    <p>
                        <a href="" class="btn bg-gradient border-0 text-white">Create</a>
                        <a href="" class="btn  border-0 text-white">Cancel</a>
                    </p>

                </form>
            </div>

        </div>
    </section>
    @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif
</div>
@endsection