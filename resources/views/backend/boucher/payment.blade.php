@extends('layouts.AdminPanal')
@section('content')
<div class="u-body">

<section class="es-form-area">
    <div class="card">
        <header class="card-header bg-gradient border-0 pt-5 pb-5 d-flex align-items-center">
            <h2 class="text-white mb-0">Recive Voucher(-)</h2>
        </header>
        <div class="session_add">
            <div class="row">


                <div class="col-md-10 mb-3">
                    <label for="">Voucher No <span>*</span></label>
                    <input type="text" name="" id="">
                </div>

                <div class="col-md-10 mb-3">
                    <label for="">Transaction Date <span>*</span></label>
                    <input type="date" placeholder=" " name="" id="">
                </div>


                <div class="col-md-10 mb-3">
                    <label for="">Payment Type <span>*</span></label>
                   <p class="rad_text">
                      <input type="radio" placeholder="Education" name="" id="check">
                      <b>Cash</b>
                    </p> &nbsp; &nbsp;
                    <p class="rad_text">
                        <input type="radio" placeholder="Education" name="" id="check">
                        <b>Bank</b>
                      </p>
                 </div>

                 <div class="col-md-10 mb-3 table-responsive">

                    <table class="table table-bordered boucher_table">
                        <thead class="bg-light">
                          <tr>
                            <th scope="col">Particulars</th>
                            <th scope="col">Amount	</th>
                            <th scope="col">Remarks</th>
                            <th scope="col">Remove</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <th scope="row">
                                <select name="" id="">
                                    <option value="">Select A/C Head</option>
                                    <option value="">12.00 Field Envelopment</option>
                                    <option value="">23.00 Recive From Government</option>
                                    <option value="">6.00 Lav Fee</option>
                                </select>
                            </th>
                            <td>
                                <input type="text" name="" id="">
                            </td>
                            <td>
                                <input type="text" name="" id="">
                            </td>
                            <td>
                                <i class="fa-solid fa-trash"></i>
                            </td>
                          </tr>

                        </tbody>
                      </table>
                 </div>


                 <div class="col-md-10 mb-3">
                    <label for="">Description </label><br>
                    <textarea name="" id="description_text_area" cols="30" rows="10"></textarea>
                 </div>

                 <div class="col-md-10 mt-4 mb-3">
                    <p>
                     <a href="" class="btn bg-gradient border-0 text-white">Create</a>
                     <a href="" class="btn  cancel_btn border-0 text-white">Cancel</a>
                     </p>
                 </div>

            </div>
        </div>
    </div>
</section>

    </div>
@endsection
