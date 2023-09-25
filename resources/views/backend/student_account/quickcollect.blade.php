@extends('layouts.AdminPanal')
@section('content')

<div class="u-content">
    <div class="quickCollection table-responsive">
        <h3><i class="fa-solid fa-info"></i> Student Fees Collection (Quick)</h3>
        <table class="table table-bordered table-striped">
            <thead>
                <!-- <tr class="th_color">
                    <th scope="col">Image</th>
                    <th scope="col">21113001</th>
                    <th scope="col">Session</th>
                    <th scope="col">Shift</th>
                    <th scope="col">Roll</th>
                    <th scope="col">Admission</th>
                    <th scope="col">January</th>
                    <th scope="col">February</th>
                    <th scope="col">March</th>
                    <th scope="col">April</th>
                    <th scope="col">May</th>
                    <th scope="col">June</th>
                    <th scope="col">July</th>
                    <th scope="col">August</th>
                    <th scope="col">September</th>
                    <th scope="col">October</th>
                    <th scope="col">November</th>
                    <th scope="col">December</th>
                    <th scope="col">Total</th>
                  </tr> -->
            </thead>
            <tbody>

                <tr>
                    <th rowspan="2">
                        @foreach ($studentDetails as $studentDetail)
                        <img src="{{asset('uploads/backend/student_module/student_image/')}}/{{$studentDetail->photo}}"
                            class="student_pic" alt="">
                        @endforeach
                    </th>
                    <td>ID</td>

                    <td>{{$studentDetail->student_id}}</td>

                    <td>Session</td>
                    @foreach ($studentDetailsAddmit as $studentDetailsA)
                    <td>{{$studentDetailsA->session_name}}</td>
                    @endforeach
                    <td>Class</td>
                    <td>{{$studentDetailsA->getClassName($studentDetailsA->class_name)}}</td>
                </tr>

                <tr>

                    <td>Name</td>

                    <td>{{$studentDetail->student_name_en}}</td>
                    <td>Shift</td>
                    <td>{{$studentDetailsA->shift_name}}</td>
                    <td>Section</td>
                    <td>{{$studentDetailsA->section_name}}</td>
                    <td>Roll</td>
                    <td>{{$studentDetailsA->roll_number}}</td>
                </tr>

            </tbody>
        </table>
    </div>
@foreach ($studentfeedet as $studentfed)
@endforeach
    <div class="quickCollection table-responsive">
        <table class="table table-bordered table-striped">
            <tbody>
                <tr>
                    <td class="text-center d-flex justify-content-between">
                        <p>Print Recept</p>

                        <a href="{{route('print_invoice',$studentfed->id )}}"><i class="fa-solid fa-money-bill"></i></a>
                    </td>
                </tr>

            </tbody>
        </table>
    </div>

    <div class="quickCollection table-responsive">
        <table class="table table-bordered table-striped">
            <thead>
                <tr class="th_color">
                    <th scope="col">Fees Type</th>
                    <th scope="col">Amount</th>
                    <th scope="col">Payable</th>
                </tr>
            </thead>
            <tbody>

                <tr>
                    @foreach ($studentfee as $studentf)
                    <td>{{$studentf->tutionfeeamount != ''?'Tution Fee':'NULL'}}</td>
                    <td>{{$studentf->tutionfeeamount}}</td>
                    <td>{{$studentf->tutionfeepayable}}</td>
                    @endforeach
                </tr>
                <tr>

                    <td>{{$studentf->regfeeamount != ''?'Regstration Fee':'NULL'}}</td>
                    <td>{{$studentf->regfeeamount}}</td>
                    <td>{{$studentf->regfeepayable}}</td>

                </tr>
                <tr>

                    <td>{{$studentf->admisstionamount != ''?'Admittion Fee':'NULL'}}</td>
                    <td>{{$studentf->admisstionamount}}</td>
                    <td>{{$studentf->admisstionamount}}</td>

                </tr>
                <tr>
                    <td>{{$studentf->examfeeamount != ''?'Exam Fee':'NULL'}}</td>
                    <td>{{$studentf->examfeeamount}}</td>
                    <td>{{$studentf->examfeepayable}}</td>

                </tr>
                <tr>
                    <td>Total : </td>
                    <td>{{$studentf->total_amount}}</td>
                    <td>{{$studentf->total_payable}}</td>
                </tr>

            </tbody>
        </table>
    </div>

    <div class="quickCollection table-responsive">
        <table class="table table-bordered table-striped">
            <thead>
                <tr class="th_color">
                    <th scope="col">Waived Fees Type</th>
                    <th scope="col">Waived</th>
                    <th scope="col">total Payable</th>
                    <th scope="col">afterWived</th>
                    <th scope="col">Paid</th>
                    <th scope="col">Due</th>
                </tr>
            </thead>
            <tbody>

                <tr>
                    @if ($studentwaived->isEmpty())
                    <td>
                        {{'NO Waived'}}
                    </td>
                    <td>
                        {{'00'}}
                    </td>
                    @else
                    @foreach ($studentwaived as $studentwai)
                    <td>{{$studentwai->fees_type}}</td>
                    <td>{{$studentwai->wavier}}</td>
                    @endforeach
                    @endif

                    <td>{{$studentfed->total_payable}}</td>
                    <td>{{$studentfed->total_payable - $studentwai->wavier}}</td>
                    <td>{{$studentfed->paid_amount}}</td>
                    <td>{{($studentfed->total_payable - $studentwai->wavier)-$studentfed->paid_amount }}</td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="session_add text-center">
        <form action="{{route('feedetails.update')}}" method="POST">
            @csrf
            <div class="row">
                <div class="col-md-10 mb-3">
                    <label for="">Amount<span>*</span></label>
                    <input type="hidden" name="fee_id" value="{{$studentfed->id}}" id="">
                    <input id="amount" readonly type="text"
                      name="topvlaue"  value="{{ ($studentfed->total_payable - $studentwai->wavier) - $studentfed->paid_amount }}">
                    @if (session('session_id'))
                    <strong class="text-danger">{{ $message }}</strong>
                    @endif
                </div>

                <div class="col-md-10 mb-3">
                    <label for="">Amounts to Pay<span>*</span></label>
                    <input id="paidamount" type="number" name="paid_amount" value="0" oninput="checkAmount()">
                    @if (session('medium_id'))
                    <strong class="text-danger">{{ $message }}</strong>
                    @endif
                </div>
                <div class="col-md-10 mt-4 mb-3">
                    <p>
                        <button disabled id="submitButton" type="submit"
                            class="btn bg-gradient border-0 text-white">Save</button>
                        <button type="reset" class="btn cancel_btn border-0 text-white">Cancel</button>
                    </p>
                </div>
            </div>
        </form>
    </div>
</div>
</section>

</div>
</div>

@endsection
@section('fotter_js')
<script>
    function checkAmount() {
        var amount = document.getElementById('amount').value;
        var paidAmount = document.getElementById('paidamount').value;
        var submitButton = document.getElementById('submitButton');
        if (paidAmount <= 0) {
            submitButton.disabled = true;
        }

        else if (amount < paidAmount ) {
            submitButton.disabled = true;
        }
        else if (amount === paidAmount || amount > paidAmount ) {
            submitButton.disabled = false;
        }
        else {
            submitButton.disabled = true;
        }
    }

</script>

@endsection
