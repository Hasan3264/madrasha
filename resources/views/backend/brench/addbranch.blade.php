@extends('layouts.AdminPanal')
@section('content')
<div class="u-body">
    <section class="es-form-area">
        <div class="card">
            <header class="card-header bg-gradient border-0 pt-5 pb-5 d-flex align-items-center">
                <h2 class="text-white mb-0">Branch Details Add</h2>
            </header>
            <div class="branch_edit">
                <form action="{{route('branch.input')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-10 mb-3">
                            <label for="">Address <span>*</span></label>
                            <textarea name="address" placeholder="Address" id="" cols="30" rows="10"></textarea>
                            @error('address')
                            <div class="error">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col-md-10 mb-3">
                            <label for="">City <span>*</span></label>
                            <input type="text" name="city" placeholder="City" id="">
                            @error('city')
                            <div class="error">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col-md-10 mb-3">
                            <label for="">Zip Code <span>*</span></label>
                            <input type="number" placeholder="Zip Code" name="zip_code" id="">
                          @error('zip_code')
                            <div class="error">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col-md-10 mb-3">
                            <label for="">Phone/Mobile <span>*</span></label>
                            <input type="number" placeholder="Phone/Mobile" name="number" id="">
                            @error('number')
                            <div class="error">{{ $message }}</div>
                            @enderror
                        </div>


                        <div class="col-md-10 mb-3">
                            <label for="">Fax </label>
                            <input type="text" placeholder="Fax" name="fax" id="">
                             @error('fax')
                            <div class="error">{{ $message }}</div>
                            @enderror
                        </div>


                        <div class="col-md-10 mb-3">
                            <label for="">Email <span>*</span></label>
                            <input type="email" name="email" id="">
                              @error('email')
                            <div class="error">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-10 mb-3">
                            <label for="">Weekly Holiday <span>*</span></label>
                            <input type="text" placeholder="Friday , Sunday , Monday" name="holydays" id="">
                             @error('holydays')
                            <div class="error">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col-md-10 mb-3">
                            <label for="">Map IFrame</label>
                            <textarea name="map" id="" cols="30" rows="10"></textarea>
                              @error('map')
                            <div class="error">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col-md-10 mb-3">
                            <label for="">Status <span>*</span></label>
                            <select name="status" id="">
                                <option value="Active">Active</option>
                                <option value="Inactive">Inactive</option>
                            </select>
                             @error('status')
                            <div class="error">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col-md-10 mt-4 mb-3">
                            <p>
                                <button type="submit" class="btn bg-gradient border-0 text-white">Submit</button>
                                <button type="reset" class="btn  cancel_btn border-0 text-white">Cancel</button>
                            </p>
                        </div>

                    </div>
                </form>
            </div>
        </div>
    </section>
</div>
@if(session('success'))
<div class="alert alert-success">
    {{ session('success') }}
</div>
@endif
@endsection
