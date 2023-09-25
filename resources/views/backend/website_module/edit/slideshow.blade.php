@extends('layouts.AdminPanal')
@section('content')
    <div class="u-content">
        <div class="u-body">

            <section class="es-form-area">
                <div class="card">
                    <header class="card-header bg-gradient border-0 pt-5 pb-5 d-flex align-items-center">
                        <h2 class="text-white mb-0">update slide show</h2>
                    </header>
                    <div class="session_add">
                        <form action="{{route('updateSlideShow')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                            <div class="col-md-10 mb-3">
                                <label for="">Type <span>*</span></label>
                                <p class="rad_text">
                                    <input type="radio" value="Home" name="type" id="check">
                                    <b>Home</b>
                                </p> &nbsp; &nbsp;
                                <p class="rad_text">
                                    <input type="radio" value="Faculty" placeholder="Education" name="type" id="check">
                                    <b>Faculty</b>
                                </p>
                            </div>


                            <div class="col-md-10 mb-3">
                                <label for="">Title <span>*</span></label>
                                <input type="text" placeholder="" value="{{$findId->title}}" name="title" id="">
                                <input type="hidden" placeholder="" value="{{$findId->id}}" name="edit_id" id="">
                            </div>

                            <div class="col-md-10 mb-3">
                                <label for="">Image <span>*</span></label>
                                <input type="file" name="image" id="file">
                              <br>
                                <span style="color: red;">Only image (png,jpg,gif) width = 1200px & Height = 400px - maximum
                                    1MB</span>
                            </div>

                            <div class="col-md-10 mb-3">
                                <label for="">Description <span>*</span></label>
                                <textarea class="ckeditor" id="editor1"   name="description"></textarea>
                            </div>


                            <div class="col-md-10 mb-3">
                                <label for="">Status <span>*</span></label>
                                <select name="status" id="">
                                    <option value="Active">Active</option>
                                    <option value="Inactive">Inactive</option>
                                </select>
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
