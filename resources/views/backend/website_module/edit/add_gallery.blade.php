@extends('layouts.AdminPanal')
@section('content')
    <div class="u-content">
        <div class="u-body">

            <section class="es-form-area">
                <div class="card">
                    <header class="card-header bg-gradient border-0 pt-5 pb-5 d-flex align-items-center">
                        <h2 class="text-white mb-0">Update Gallery</h2>
                    </header>
                    <div class="session_add">
                        <form action="{{route('update.gallary')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                            <div class="col-md-10 mb-3">
                                <label for="">Album Type </label>
                                <p class="rad_text">
                                    <input type="radio" value="Photo" placeholder="Education" name="albtype" id="check">
                                    <b>Photo</b>
                                </p> &nbsp; &nbsp;
                                <p class="rad_text">
                                    <input type="radio" value="Video"  placeholder="Education" name="albtype" id="check">
                                    <b>Video</b>
                                </p>
                                @error('albtype')
                                <strong class="text-danger">{{$message}}</strong>
                                @enderror
                            </div>

                            <div class="col-md-10 mb-3">
                                <label for="">Album Title <span>*</span></label>
                                <input type="text" value="{{$findId->title}}" name="title">
                                <input type="hidden" value="{{$findId->id}}" name="edit_id">
                                  @error('title')
                                <strong class="text-danger">{{$message}}</strong>
                                @enderror
                            </div>

                            <div class="col-md-10 mb-3">
                                <label for="">Caption <span>*</span></label>
                                <input type="text" name="caption" id="">
                                @error('caption')
                                <strong class="text-danger">{{$message}}</strong>
                                @enderror
                            </div>

                            <div class="col-md-10 mb-3">
                                <label for="">Albem <span>*</span></label>
                                <input type="file" name="file" id="file">
                                 @error('file')
                                <strong class="text-danger">{{$message}}</strong>
                                @enderror
                            </div>

                            <div class="col-md-10 mb-3">
                                <label for="">Status <span>*</span></label>
                                <select name="status" id="">
                                    <option value="Active">Active</option>
                                    <option value="Inactive">Inactive</option>
                                    @error('status')
                                <strong class="text-danger">{{$message}}</strong>
                                @enderror
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
