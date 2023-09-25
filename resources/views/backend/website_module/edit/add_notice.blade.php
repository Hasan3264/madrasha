@extends('layouts.AdminPanal')
@section('content')
    <div class="u-content">
        <div class="u-body">

            <section class="es-form-area">
                <div class="card">
                    <header class="card-header bg-gradient border-0 pt-5 pb-5 d-flex align-items-center">
                        <h2 class="text-white mb-0">Update Notice</h2>
                    </header>
                    <div class="session_add">
                        <form action="{{route('update.notice')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                            <div class="col-md-10 mb-3">
                                <label for="">Title <span>*</span></label>
                                <input type="text" name="title" value="{{$findId->title}}" id="">
                                <input type="hidden" name="edit_id" value="{{$findId->id}}" id="">
                                @error('title')
                                <strong class="text-danger">{{$message}}</strong>
                                @enderror
                            </div>

                            <div class="col-md-10 mb-3">
                                <label for="">File Upload <span>*</span></label>
                                <input type="file" name="pdf" id="file">
                                @error('pdf')
                                <strong class="text-danger">{{$message}}</strong>
                                @enderror
                              <br>
                                <span style="color: red;">Only PDF allowed - maximum 10MB</span>
                            </div>

                            <div class="col-md-10 mb-3">
                                <label for="">Notice <span>*</span> </label>
                                <textarea class="ckeditor" id="editor1" name="notice"></textarea>
                                @error('notice')
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
