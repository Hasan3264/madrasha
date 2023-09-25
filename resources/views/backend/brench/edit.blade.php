@extends('layouts.AdminPanal')
@section('content')
<div class="u-body">
    <section class="es-form-area">
        <div class="card">
            <header class="card-header bg-gradient border-0 pt-5 pb-5 d-flex align-items-center">
                <h2 class="text-white mb-0">Branch Details Update</h2>
            </header>

            <div class="session_view_link mt-5 mb-3 ml-3">
                <a href="{{route('branch.add')}}" class="btn btn-primary"><i class="fa-solid fa-plus"></i></a>
                <a href="{{route('branch.show',$branch->id )}}" class="btn btn-primary"><i
                        class="fa-solid fa-eye"></i></a>
            </div>

            <div class="branch_edit">
                <form action="{{route('branch.editpush')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">


                        <div class="col-md-10 mb-3">
                            <label for="">Address <span>*</span></label>
                            <textarea name="address" placeholder="{{$branch->address}}" id="" cols="30"
                                rows="10"></textarea>
                            @error('address')
                            <div class="error">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col-md-10 mb-3">
                            <label for="">City <span>*</span></label>
                            <input type="text" name="city" placeholder="{{$branch->city}}" id="">
                            @error('city')
                            <div class="error">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col-md-10 mb-3">
                            <label for="">Zip Code <span>*</span></label>
                            <input type="number" placeholder="{{$branch->zip_code}}" name="zip_code" id="">
                            @error('zip_code')
                            <div class="error">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col-md-10 mb-3">
                            <label for="">Phone/Mobile <span>*</span></label>
                            <input type="number" placeholder="{{$branch->number}}" name="number" id="">
                            @error('number')
                            <div class="error">{{ $message }}</div>
                            @enderror
                        </div>


                        <div class="col-md-10 mb-3">
                            <label for="">Fax </label>
                            <input type="text" placeholder="{{$branch->fax}}" name="fax" id="">
                            @error('fax')
                            <div class="error">{{ $message }}</div>
                            @enderror
                        </div>


                        <div class="col-md-10 mb-3">
                            <label for="">Email <span>*</span></label>
                            <input type="email" placeholder="{{$branch->email}}" name="email" id="">
                            @error('email')
                            <div class="error">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col-md-10 mb-3">
                            <label for="">Authority Signature</label>

                            <input type="file" name="auth_signature" placeholder="{{$branch->auth_signature}}"
                                id="file">
                            @error('auth_signature')
                            <div class="error">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-10 mb-3">
                            <label for="">Weekly Holiday <span>*</span></label>
                            <input type="text" placeholder="{{$branch->holydays}}" name="holydays" id="">
                            @error('holydays')
                            <div class="error">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col-md-10 mb-3">
                            <input type="hidden" name="branch_id" value="{{$branch->id}}" class="form-control">
                            <label for="">Map IFrame</label>
                            <textarea name="map" placeholder="{{$branch->map}}" id="" cols="30" rows="10"></textarea>
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
                        <div class="col-md-10 mb-3">
                            <label for="">Pre Status</label>
                            {{$branch->status}}
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
    @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif
</div>

@endsection
