@extends('layouts.AdminPanal')
@section('content')

<div class="u-content">
    <div class="u-body">

        <section class="es-form-area">
            <div class="card">
                <header class="card-header bg-gradient border-0 pt-5 pb-5 d-flex align-items-center">
                    <h2 class="text-white mb-0">Add Accounts Head</h2>
                </header>
                <div class="session_add">
                    <form action="{{route('store_account_head')}}" method="POST">
                        @csrf
                        <div class="row">

                            <div class="col-md-10 mb-3">
                                <label for="">A/C Type <span>*</span></label>
                                  <input type="text" name="actype" placeholder="add type">

                            @error('actype')
                            <span class="text-red-500 text-sm">{{$message}}</span>
                            @enderror
                            </div>

                            <div class="col-md-10 mb-3">
                                <label for="">A/C Category<span>*</span></label>
                                <p class="rad_text">
                                    <input type="radio" value="Recipts" placeholder="Education" name="acCat" id="check">
                                    <b>Recipts(+)</b>
                                </p> &nbsp; &nbsp;
                                <p class="rad_text">
                                    <input type="radio" value="Payments" placeholder="Education" name="acCat" id="check">
                                    <b>Payments(-)</b>
                                </p>
                             @error('acCat')
                            <span class="text-red-500 text-sm">{{$message}}</span>
                            @enderror
                            </div>

                            <div class="col-md-10 mb-3">
                                <label for="">A/C Parents <span>*</span></label>
                                <input type="text" placeholder="Enter" name="acparents">
                                 @error('acparents')
                            <span class="text-red-500 text-sm">{{$message}}</span>
                            @enderror
                            </div>

                            <div class="col-md-10 mb-3">
                                <label for="">A/C Code <span>*</span></label>
                                <input type="text" placeholder=" " name="accode" id="">
                            @error('accode')
                            <span class="text-red-500 text-sm">{{$message}}</span>
                            @enderror
                            </div>

                            <div class="col-md-10 mb-3">
                                <label for="">A/C Head <span>*</span></label>
                                <input type="text" placeholder=" " name="achead" id="">
                                @error('achead')
                            <span class="text-red-500 text-sm">{{$message}}</span>
                            @enderror
                            </div>

                            <div class="col-md-10 mb-3">
                                <label for="">Yearly / Monthly <span>*</span></label>
                                <p class="rad_text">
                                    <input type="radio" value="Yearly" placeholder="Education" name="yarmont" id="check">
                                    <b>Yearly</b>
                                </p> &nbsp; &nbsp;
                                <p class="rad_text">
                                    <input type="radio" value="Monthly" placeholder="Education" name="yarmont" id="check">
                                    <b>Monthly</b>
                                </p>
                            @error('yarmont')
                            <span class="text-red-500 text-sm">{{$message}}</span>
                            @enderror
                            </div>

                            <div class="col-md-10 mb-3">
                                <label for="">Has Child ? <span>*</span></label>
                                <p class="rad_text">
                                    <input type="radio" value="Yes" placeholder="Education" name="haschild" id="check">
                                    <b>Yes</b>
                                </p> &nbsp; &nbsp;
                                <p class="rad_text">
                                    <input type="radio" value="NO" placeholder="Education" name="haschild" id="check">
                                    <b>No</b>
                                </p>
                                 @error('haschild')
                            <span class="text-red-500 text-sm">{{$message}}</span>
                            @enderror
                            </div>

                            <div class="col-md-10 mb-3">
                                <label for="">Status <span>*</span></label>
                                <select name="status" id="">
                                    <option value="Active">Active</option>
                                    <option value="Inactive">Inactive</option>
                                </select>
                                 @error('status')
                            <span class="text-red-500 text-sm">{{$message}}</span>
                            @enderror
                            </div>

                            <div class="col-md-10 mt-4 mb-3">
                                <p>
                                    <button type="submit" class="btn bg-gradient border-0 text-white">Create</button>
                                    <button type="reset" class="btn  cancel_btn border-0 text-white">Cancel</button>
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
