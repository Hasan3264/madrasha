@extends('layouts.AdminPanal')
@section('content')
<div class="u-content">
    <div class="u-body">

        <section class="es-form-area">
            <div class="card">
                <header class="card-header bg-gradient border-0 pt-5 pb-5 d-flex align-items-center">
                    <h2 class="text-white mb-0">Add Menu</h2>
                </header>
                <div class="session_add">
                    <form action="{{route('input.manu')}}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-md-10 mb-3">
                                <label for="">Parent Menu <span>*</span></label>
                                <select name="p_manu" id="">
                                    <option value="">Select Parent Menu</option>
                                    <option value="ROOT">ROOT</option>
                                    <option value="AboutUs">About Us</option>
                                    <option value="ChairmanM">Chairman Message</option>
                                    <option value="ClassOne">Class One</option>
                                    <option value="Two">Two</option>
                                    <option value="Three">Three</option>
                                </select>
                                 @error('p_manu')
                                <strong class="text-danger">{{$message}}</strong>
                                @enderror
                            </div>


                            <div class="col-md-10 mb-3">
                                <label for="">Title <span>*</span></label>
                                <input type="text" placeholder=" " name="title" id="">
                                 @error('title')
                                <strong class="text-danger">{{$message}}</strong>
                                @enderror
                            </div>


                            <div class="col-md-10 mb-3">
                                <label for="">Position <span>*</span></label>
                                <select name="position" id="">
                                    <option value="">Select Position</option>
                                    <option value="Top">Top</option>
                                    <option value="Bottom">Bottom</option>
                                    <option value="Left">Left</option>
                                    <option value="Right">Right</option>
                                </select>
                                 @error('position')
                                <strong class="text-danger">{{$message}}</strong>
                                @enderror
                            </div>

                            <div class="col-md-10 mb-3">
                                <label for="">Is Left Column <span>*</span></label>
                                <p class="rad_text">
                                    <input type="radio" placeholder="Education" value="Yes" name="islastcolume" id="check">
                                    <b>Yes</b>
                                </p> &nbsp; &nbsp;
                                <p class="rad_text">
                                    <input type="radio" placeholder="Education" value="No" name="islastcolume" id="check">
                                    <b>No</b>
                                </p>
                                 @error('islastcolume')
                                <strong class="text-danger">{{$message}}</strong>
                                @enderror
                            </div>


                            <div class="col-md-10 mb-3">
                                <label for="">Status <span>*</span></label>
                                <select name="status" id="">
                                    <option value="Active">Active</option>
                                    <option value="Inactive">Inactive</option>
                                </select>
                                 @error('status')
                                <strong class="text-danger">{{$message}}</strong>
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
