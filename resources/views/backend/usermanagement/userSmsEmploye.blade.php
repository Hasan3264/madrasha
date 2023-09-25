@extends('layouts.AdminPanal')
@section('content')
<div class="u-body">
    <section class="es-form-area">
        <div class="card">
            <header class="card-header bg-gradient border-0 pt-5 pb-5 d-flex align-items-center">
                <h2 class="text-white mb-0">
                    SMS Password to Employees
                </h2>
            </header>

            <div class="card-body table-responsive" id="institue">
                <form action="" class="es-form es-add-form">

                    <div class="balance_table">
                        <div class="table-responsive">

                            <div class="balance_top">
                                <h2>Learning Campus (Main Branch)</h2>
                                <a href="#">www.learningCampus.com</a>
                                <p>Mirpur, Dhaka - 1202</p>
                                <h4>Employees List for SMS Password</h4>
                            </div>

                            <div class="table-responsive  table-striped">

                                <table class="table table-bordered">
                                    <thead style="background-color:rgb(220, 220, 220)">
                                        <tr>
                                            <th> <input type="checkbox" name="" id="check"></th>
                                            <th>ID / Username</th>
                                            <th>Name</th>
                                            <th>Designation</th>
                                            <th><a href="#" class="btn btn-primary">SEND SMS TO ALL</a></th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <tr>
                                            <td><input type="checkbox" name="" id="check"></td>
                                            <td>20200001</td>
                                            <td>
                                                <img src="assets/img/avatars/img4.jpg" class="slide_pic" alt="">

                                                <span>Afzal</span>
                                            </td>
                                            <td>Bangla Lecturer</td>
                                            <td>
                                                <a href="#" class="btn btn-primary">Change Password</a>
                                                <a href="#" class="btn btn-secondary">Send SMS</a>
                                            </td>

                                        </tr>


                                        <tr>
                                            <td><input type="checkbox" name="" id="check"></td>
                                            <td>20200001</td>
                                            <td>
                                                <img src="assets/img/avatars/img4.jpg" class="slide_pic" alt="">

                                                <span>Afzal</span>
                                            </td>
                                            <td>Bangla Lecturer</td>
                                            <td>
                                                <a href="#" class="btn btn-primary">Change Password</a>
                                                <a href="#" class="btn btn-secondary">Send SMS</a>
                                            </td>

                                        </tr>


                                        <tr>
                                            <td><input type="checkbox" name="" id="check"></td>
                                            <td>20200001</td>
                                            <td>
                                                <img src="assets/img/avatars/img4.jpg" class="slide_pic" alt="">

                                                <span>Afzal</span>
                                            </td>
                                            <td>Bangla Lecturer</td>
                                            <td>
                                                <a href="#" class="btn btn-primary">Change Password</a>
                                                <a href="#" class="btn btn-secondary">Send SMS</a>
                                            </td>

                                        </tr>


                                        <tr>
                                            <td><input type="checkbox" name="" id="check"></td>
                                            <td>20200001</td>
                                            <td>
                                                <img src="assets/img/avatars/img4.jpg" class="slide_pic" alt="">

                                                <span>Afzal</span>
                                            </td>
                                            <td>Bangla Lecturer</td>
                                            <td>
                                                <a href="#" class="btn btn-primary">Change Password</a>
                                                <a href="#" class="btn btn-secondary">Send SMS</a>
                                            </td>

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
