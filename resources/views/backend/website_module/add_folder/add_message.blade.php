@extends('layouts.AdminPanal')
@section('content')
<div class="u-content">
    <div class="u-body">

        <section class="es-form-area">
            <div class="card">
                <header class="card-header bg-gradient border-0 pt-5 pb-5 d-flex align-items-center">
                    <h2 class="text-white mb-0">Add Teachers</h2>
                </header>
                <div class="session_add">
                    <form action="{{route('input.massagecorner')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-10 mb-3">
                                <label for="">Name <span>*</span></label>
                                <input type="text" name="name" id="">
                                @error('name')
                                <strong class="text-danger">{{$message}}</strong>
                                @enderror
                            </div>


                            <div class="col-md-10 mb-3">
                                <label for="">Designation <span>*</span></label>
                                <input type="text" placeholder=" " name="designation" id="">
                                @error('designation')
                                <strong class="text-danger">{{$message}}</strong>
                                @enderror
                            </div>


                            <div class="col-md-10 mb-3">
                                <label for="">Photo <span>*</span></label>
                                <input type="file" name="photo" id="file">
                                <br>
                                <span style="color: red;">Only image (png,jpg,gif) width = 1200px & Height = 400px -
                                    maximum
                                    1MB</span>
                                    @error('photo')
                                    <strong class="text-danger">{{$message}}</strong>
                                    @enderror
                            </div>

                            <div class="col-md-10 mb-3">
                                <label for="">Rank <span>*</span></label>
                                <input type="text" name="rank" id="">
                                @error('rank')
                                <strong class="text-danger">{{$message}}</strong>
                                @enderror
                            </div>

                            <div class="col-md-10 mb-3">
                                <label for="">Status <span>*</span></label>
                                <select name="status" id="">
                                    <option value="Active">Active</option>
                                    <option value="Inactive">Inactive</option>
                                </select>
                                @error('staus')
                                <strong class="text-danger">{{$message}}</strong>
                                @enderror
                            </div>
                            <div class="col-md-10 mt-4 mb-3">
                                <p>
                                    <button type="submit" class="btn bg-gradient border-0 text-white">Create</button>
                                    <button type="reset" class="btn bg-danger border-0 text-white">Cancel</button>
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
