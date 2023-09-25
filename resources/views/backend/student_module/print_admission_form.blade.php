@extends('layouts.AdminPanal')
@section('content')

<main class="u-main" role="main">


    <div class="u-content" style="margin-left: -150px;">
        @yield('content')
        <div class="u-body">
            <form action="{{ route('print-admission-form') }}" method="post">
                @csrf
                <div class="d-flex justify-content-between mt-4 mb-5">
                    <button type="submit" class="print_btn"><i class="fa-solid fa-download"></i> Download</button>
                </div>

                <div class="admission_form" id="mainContent">
                    <div class="adFormDiv" id="adFormDiv">
                        <img src="{{ asset('uploads/backend/logo')}}/{{$institute->logo}}" class="copyright" alt="">
                        <div class="addFormTop">
                            <div class="adFormLogo">
                                <img src="{{ asset('uploads/backend/logo')}}/{{$institute->logo}}" alt="">
                            </div>
                            <div class="adFormTxt">
                                <h4>{{$institute->institute_name}}</h4>
                                <p>{{$institute->email}}</p>
                                <p>Mobile : {{$branch->number}}</p>
                                <p>{{$branch->address}}</p>
                                <h2>Admission Form</h2>
                            </div>
                            <div class="adFormPicture">
                                <img src="{{ asset('AdminAssets/img/user-unknown.jpg') }}" alt="">
                            </div>
                        </div>
                        <div class="adFormMid">
                            <h3>Academic Information (For office use only)</h3>

                            <div class="adField">
                                <div>
                                    <label for="">Nid / Birth No</label>
                                    <input type="text" name="" id="">
                                </div>
                                <div>
                                    <label for="">Medium</label>
                                    <input type="text" name="" id="">
                                </div>
                            </div>

                            <div class="adField">
                                <div>
                                    <label for="">Shift</label>
                                    <input type="text" name="" id="">
                                </div>
                                <div>
                                    <label for="">Class</label>
                                    <input type="text" name="" id="">
                                </div>
                            </div>

                            <div class="adField">
                                <div>
                                    <label for="">Group</label>
                                    <input type="text" name="" id="">
                                </div>
                                <div>
                                    <label for="">Section</label>
                                    <input type="text" name="" id="">
                                </div>
                            </div>

                            <div class="adField">
                                <div>
                                    <label for="">Student ID</label>
                                    <input type="text" name="" id="">
                                </div>
                                <div>
                                    <label for="">Roll</label>
                                    <input type="text" name="" id="">
                                </div>
                            </div>

                            <h3>Personal Information</h3>

                            <div class="adField">
                                <div>
                                    <label for="">First Name</label>
                                    <input type="text" name="" id="">
                                </div>
                                <div>
                                    <label for="">Email</label>
                                    <input type="text" name="" id="">
                                </div>
                            </div>

                            <div class="adField">
                                <div>
                                    <label for="">Last Name</label>
                                    <input type="text" name="" id="">
                                </div>
                                <div>
                                    <label for="">Mobile</label>
                                    <input type="text" name="" id="">
                                </div>
                            </div>

                            <div class="adField">
                                <div>
                                    <label for="">DOB</label>
                                    <input type="text" name="" id="">
                                </div>
                                <div>
                                    <label for="">Blood Group</label>
                                    <input type="text" name="" id="">
                                </div>
                            </div>

                            <div class="adField">
                                <div>
                                    <label for="">BR No</label>
                                    <input type="text" name="" id="">
                                </div>
                                <div>
                                    <label for="">Religion</label>
                                    <input type="text" name="" id="">
                                </div>
                            </div>
                            <br>

                            <div class="adField">
                                <div>
                                    <label for="">Gender</label>
                                    <input type="checkbox" name="" id="check">Male
                                    &nbsp <input type="checkbox" name="" id="check">Female
                                </div>
                                <div>
                                    <label for="">Nationality</label>
                                    <input type="text" name="" id="">
                                </div>
                            </div>

                            <h3>Parents Information</h3>

                            <div class="adField">
                                <div>
                                    <label for="">Father's Name</label>
                                    <input type="text" name="" id="">
                                </div>
                                <div>
                                    <label for="">Mother's Name</label>
                                    <input type="text" name="" id="">
                                </div>
                            </div>

                            <div class="adField">
                                <div>
                                    <label for="">Father's NID</label>
                                    <input type="text" name="" id="">
                                </div>
                                <div>
                                    <label for="">Mother's NID</label>
                                    <input type="text" name="" id="">
                                </div>
                            </div>

                            <div class="adField">
                                <div>
                                    <label for="">Father's Profession</label>
                                    <input type="text" name="" id="">
                                </div>
                                <div>
                                    <label for="">Mother's Profession</label>
                                    <input type="text" name="" id="">
                                </div>
                            </div>

                            <div class="adField">
                                <div>
                                    <label for="">Father's Phone</label>
                                    <input type="text" name="" id="">
                                </div>
                                <div>
                                    <label for="">Mother's Phone</label>
                                    <input type="text" name="" id="">
                                </div>
                            </div>

                            <h3>Guardian Information</h3>

                            <div class="adField">
                                <div>
                                    <label for="">Gaurdian's Name</label>
                                    <input type="text" name="" id="">
                                </div>
                                <div>
                                    <label for="">Guardian Phone</label>
                                    <input type="text" name="" id="">
                                </div>
                            </div>

                            <div class="adField">
                                <div>
                                    <label for="">Relation With Student</label>
                                    <input type="text" name="" id="">
                                </div>
                                <div>
                                    <label for="">Guardian's Profession</label>
                                    <input type="text" name="" id="">
                                </div>
                            </div>

                            <h3>Contact Information</h3>

                            <div class="adField">
                                <div>
                                    <label for="">Present Address</label>
                                    <input type="text" name="" id="">
                                </div>
                                <div>
                                    <label for="">Permanant Address</label>
                                    <input type="text" name="" id="">
                                </div>
                            </div>

                            <div class="adField">
                                <div>
                                    <label for=""></label>
                                    <input type="text" name="" id="">
                                </div>
                                <div>
                                    <label for=""></label>
                                    <input type="text" name="" id="">
                                </div>
                            </div>

                        </div>

                        <div class="adFormBottom">
                            <h5>Signature of Student</h5>
                            <h5>Signature of Guardian</h5>
                            <h5>Signature of Teacher</h5>
                        </div>
                    </div>
                </div>

            </form>
        </div>
    </div>
</main>

<script>
    function printPage(area) {
        var printContent = document.getElementById(area).innerHTML;
        document.body.innerHTML = printContent;
        window.print();
    }

</script>

@endsection
