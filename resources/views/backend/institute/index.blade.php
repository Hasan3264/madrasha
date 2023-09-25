@extends('layouts.AdminPanal')
@section('content')
<div class="u-body">
    <section class="es-form-area">
        <div class="card">
            <header class="card-header bg-gradient border-0 pt-5 pb-5 d-flex align-items-center">
                <h3 class="text-white mb-0">
                    <ul class="nav nav-tabs">
                        <li class="nav-item">
                            <a class="nav-link" href="javascript:void(0)" onclick="institue()">Institue Setting</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="javascript:void(0)" onclick="general()">General
                                Information</a>
                        </li>
                    </ul>
                </h3>
            </header>

            <div class="card-body" id="institue">
                <form action="{{route('institute.input')}}" method="POST" class="es-form es-add-form">
                    @csrf
                    <div class="row">
                        <div class="col-lg-8 offset-lg-2 col-md-12 mb-4">
                            <label for="subject">Facebook Page</label>
                            <input type="text" name="facebook" id="">
                            @error('facebook')
                            <span class="text-red-500 text-sm">{{$message}}</span>
                            @enderror
                        </div>


                        <div class="col-lg-8 offset-lg-2 col-md-12 mb-4">
                            <label for="subject">Youtube</label>
                            <input type="text" name="youtube">
                            @error('youtube')
                            <span class="text-red-500 text-sm">{{$message}}</span>
                            @enderror
                        </div>
                    </div>

                    <div>
                        <p>
                            <button type="submit" class="btn bg-gradient border-0 text-white">Submit</button>
                            <button type="reset" class="btn bg-danger  border-0 text-white">Cancel</button>
                        </p>
                    </div>
            </div>


            </form>
        </div>

        <div class="card-body" id="general">
            <form action="{{route('ganarel.input')}}" method="post" enctype='multipart/form-data'
                class="es-form es-add-form">
                @csrf
                <div class="row">

                    <div class="col-lg-8 offset-lg-2 col-md-12 mb-4">
                        <label for="subject">EIIN No</label>
                        <input type="text" placeholder="edu_" name="eiin_no" id="">
                        @error('eiin_no')
                        <span class="text-red-500 text-sm">{{$message}}</span>
                        @enderror
                    </div>

                    <div class="col-lg-8 offset-lg-2 col-md-12 mb-4">
                        <label for="subject">Institue Name: <span>*</span></label>
                        <input type="text" placeholder="Campus Library" name="institute_name" id="">
                        @error('institute_name')
                        <span class="text-red-500 text-sm">{{$message}}</span>
                        @enderror
                    </div>

                    <div class="col-lg-8 offset-lg-2 col-md-12 mb-4">
                        <label for="day">Slogan</label>
                        <input type="text" name="slogan">
                        @error('slogan')
                        <span class="text-red-500 text-sm">{{$message}}</span>
                        @enderror
                    </div>

                    <div class="col-lg-8 offset-lg-2 col-md-12 mb-4">
                        <label for="day">Email <span>*</span></label>
                        <input type="text" name="email">
                        @error('email')
                        <span class="text-red-500 text-sm">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="col-lg-8 offset-lg-2 col-md-12 mb-4">
                        <label for="day">Logo</label>
                        <img id="image-container2" src="Logo _ Icon/logo.png" width="100px" height="100px" class="mb-3"
                            class="logo" alt="">
                        <input type="file" id="files2" name="logo">
                        @error('logo')
                        <span class="text-red-500 text-sm">{{$message}}</span>
                        @enderror
                    </div>

                    <div class="col-lg-8 offset-lg-2 col-md-12 mb-4">
                        <label for="day">Short Description <span>*</span></label>
                        <textarea class="ckeditor" id="editor1" name="short_des"></textarea>
                        @error('short_des')
                        <span class="text-red-500 text-sm">{{$message}}</span>
                        @enderror
                    </div>

                    <div class="col-lg-8 offset-lg-2 col-md-12 mb-4">
                        <label for="day">Why Choose Institute ?</label>
                        <textarea class="ckeditor" id="editor1" name="choosen_des"></textarea>
                        @error('choosen_des')
                        <span class="text-red-500 text-sm">{{$message}}</span>
                        @enderror
                    </div>

                </div>

                <p>
                    <button type="submit" class="btn bg-gradient border-0 text-white">Submit</button>
                    <button type="reset" class="btn bg-danger  border-0 text-white">Cancel</button>
                </p>

            </form>
        </div>

    </section>
</div>
@if(session('success'))
<div class="alert alert-success">
    {{ session('success') }}
</div>
@endif

@endsection
