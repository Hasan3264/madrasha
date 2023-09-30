@extends('layouts.AdminPanal')
@section('content')
<div class="u-content">
    <div class="u-body">

        <section class="es-form-area">
            <div class="card">
                <header class="card-header bg-gradient border-0 pt-5 pb-5 d-flex align-items-center">
                    <h2 class="text-white mb-0">Add Gallery</h2>
                </header>
                <div class="session_add">
                    <form action="{{route('input.gallary')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-10 mb-3">
                                <label for="">Name <span>*</span></label>
                                <input type="text" value="" name="name">
                                @error('name')
                                <strong class="text-danger">{{$message}}</strong>
                                @enderror
                            </div>

                            <div class="col-md-10 mb-3">
                                <label for="">Designation <span>*</span></label>
                                <input type="text" name="caption" id="">
                                @error('caption')
                                <strong class="text-danger">{{$message}}</strong>
                                @enderror
                            </div>

                            <div class="col-md-10 mb-3">
                                <label for="">photo <span>*</span></label>
                                <input type="file" name="file" id="file">
                                @error('file')
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
