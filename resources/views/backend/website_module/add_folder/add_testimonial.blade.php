@extends('layouts.AdminPanal')
@section('content')
<div class="u-content">
    <div class="u-body">

        <section class="es-form-area">
            <div class="card">
                <header class="card-header bg-gradient border-0 pt-5 pb-5 d-flex align-items-center">
                    <h2 class="text-white mb-0">Add Tastimonial</h2>
                </header>
                <form action="{{route('testimonials.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="session_add">
                        <div class="row">
                            <div class="col-md-10 mb-3">
                                <label for="">Name</label>
                                <input type="text" name="name" id="">
                                 @error('name')
                                <strong class="text-danger">{{$message}}</strong>
                                @enderror
                            </div>

                            <div class="col-md-10 mb-3">
                                <label for="">Designation</label>
                                <input type="text" name="designation" id="">
                                 @error('designation')
                                <strong class="text-danger">{{$message}}</strong>
                                @enderror
                            </div>

                            <div class="col-md-10 mb-3">
                                <label for="">Photo</label>
                                <input type="file" name="photo" id="">
                                 @error('Photo')
                                <strong class="text-danger">{{$message}}</strong>
                                @enderror
                            </div>
                            <div class="col-md-10 mb-3">
                                <label for="">Comment <span>*</span></label>
                                <textarea class="ckeditor" id="editor1"  name="comment"></textarea>

                                  @error('comment')
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
                    </div>
                </form>
            </div>
        </section>

    </div>
</div>
@endsection
