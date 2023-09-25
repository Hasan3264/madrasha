@extends('layouts.AdminPanal')
@section('content')

<div class="u-content">
    <div class="u-body">

        <section class="es-form-area">
            <div class="card">
                <header class="card-header bg-gradient border-0 pt-5 pb-5 d-flex align-items-center">
                    <h2 class="text-white mb-0">Student Fees</h2>
                </header>
                <form action="{{route('add.studentFee')}}" method="POST">
                    @csrf
                    <div class="session_add fdgdgfdgfdg">
                        <div class="row">

                            <div class="col-md-10 mb-3">
                                <label for="">Session <span>*</span></label>
                                <select name="session_id" id="">
                                    <option value="">Select Session</option>
                                    @foreach ($allsession as $session)
                                    <option value="{{$session->id}}">{{$session->name}}</option>
                                    @endforeach
                                </select>
                                @if (session('session_id'))
                                <strong class="text-danger">{{ $message }}</strong>
                                @endif
                            </div>

                            <div class="col-md-10 mb-3">
                                <label for="">Mediums <span>*</span></label>
                                <select name="medium_id" id="medium">
                                    <option value="">Select mediums</option>
                                    @foreach ($mediums as $medium)
                                    <option value="{{$medium->medium_code}}">{{$medium->medium_name}}</option>
                                    @endforeach
                                </select>
                                @if (session('medium_id'))
                                <strong class="text-danger">{{ $message }}</strong>
                                @endif
                            </div>

                            <div class="col-md-10 mb-3">
                                <label for="">class <span>*</span></label>
                                <select name="class_id" id="class">
                                </select>
                                @if (session('class_id'))
                                <strong class="text-danger">{{ $message }}</strong>
                                @endif
                            </div>

                            <div class="col-md-10 mb-3">
                                <label for="">Student <span>*</span></label>
                                <select name="student_id" id="student">
                                </select>
                                @if (session('student_id'))
                                <strong class="text-danger">{{ $message }}</strong>
                                @endif
                            </div>

                            <div class="col-md-10 mt-4 mb-3">
                                <p style="color:brown; background:pink;padding:5px"><b>Warning!</b> Fees Setting
                                    (Admission
                                    & Monthly) will be applicable for only selected student. Set fees type amount
                                    carefully.
                                </p>
                            </div>

                            <div class="card " style="width:60%; margin-left:20%;  text-align:center;">
                                <div class="card-header" style=" background-color: #3aff09;">
                                    <h2><select name="month" id="month-select">
                                            <option value="January">January</option>
                                            <option value="February">February</option>
                                            <option value="March">March</option>
                                            <option value="April">April</option>
                                            <option value="May">May</option>
                                            <option value="June">June</option>
                                            <option value="July">July</option>
                                            <option value="August">August</option>
                                            <option value="September">September</option>
                                            <option value="October">October</option>
                                            <option value="November">November</option>
                                            <option value="December">December</option>
                                        </select>
                                    </h2>
                                </div>
                                <div class="card-body">
                                    <table>
                                        <thead>
                                            <tr>
                                                <th>Fee type</th>
                                                <th>Amount</th>
                                                <th>Payable</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1.00 Tuition Fee</td>
                                                <td><input type="number" name="tutionfeeamount" id="tuition-amount">
                                                </td>
                                                <td><input type="number" name="tutionfeepayable" id="tuition-payable">
                                                </td>
                                            </tr>
                                            <tr class="my-3">
                                                <td>11.00 Registration Fee</td>
                                                <td><input type="number" name="regfeeamount" id="registration-amount">
                                                </td>
                                                <td><input type="number" name="regfeepayable" id="registration-payable">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>18 Admission Fee</td>
                                                <td><input type="number" name="admisstionamount" id="admission-amount">
                                                </td>
                                                <td><input type="number" name="admisstionpayable"
                                                        id="admission-payable">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>2.00 Exam Fee</td>
                                                <td><input type="number" name="examfeeamount" id="exam-amount"></td>
                                                <td><input type="number" name="examfeepayable" id="exam-payable"></td>
                                            </tr>
                                            <tr>
                                                <td>Total</td>
                                                <td><input readonly name="total_amount" id="total-amount"></td>
                                                <td><input readonly name="total_payable" id="total-payable"></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                            <div class="col-md-10 mt-4 mb-3">
                                <p>
                                    <button type="submit" class="btn bg-gradient border-0 text-white">Save</button>
                                    <button type="reset" class="btn  cancel_btn border-0 text-white">Cancel</button>
                                </p>
                            </div>

                        </div>
                    </div>
                </form>
            </div>
        </section>

    </div>
</div>

@endsection
@section('fotter_js')
@include('components.monthfeescrift')

<script>
    $('#medium').change(function () {
        var medium_id = $(this).val();
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            type: 'POST',
            url: "{{route('getclassbymedium')}}",
            data: {
                'medium_id': medium_id
            },
            success: function (data) {
                $('#class').html(data);
            }
        });
    });

</script>
<script>
    $('#class').change(function () {
        var class_id = $(this).val();
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            type: 'POST',
            url: "{{route('getstudent.class')}}",
            data: {
                'class_id': class_id
            },
            success: function (data) {
                $('#student').html(data);
            }
        });
    });

</script>


<script>
    const monthSelect = document.getElementById('month-select');
    const storageKey = 'selectedMonth';

    // Check if a previously selected month is stored in localStorage
    if (localStorage.getItem(storageKey)) {
        monthSelect.value = localStorage.getItem(storageKey);
    }

    // Add event listener to store the selected month in localStorage
    monthSelect.addEventListener('change', function () {
        const selectedMonth = monthSelect.value;
        localStorage.setItem(storageKey, selectedMonth);
    });

</script>
@endsection
