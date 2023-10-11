@extends('layouts.AdminPanal')
@section('content')
    <div class="u-content">
        <div class="u-body">

            <section class="es-form-area">
                <div class="card">
                    <header class="card-header bg-gradient border-0 pt-5 pb-5 d-flex align-items-center">
                        <h2 class="text-white mb-0">Update Routine</h2>
                    </header>
                    <div class="session_add">
                        <form action="{{route('update.Examroutine')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                            <div class="col-md-10 mb-3">
                                <label for="">Title <span>*</span></label>
                                <input type="text" name="title" id="" value="{{$findId->title}}">
                                <input type="hidden" name="edit_id" id="" value="{{$findId->id}}">
                                @error('title')
                                <strong class="text-danger">{{$message}}</strong>
                                @enderror
                            </div>

                            <div class="col-md-10 mb-3">
                                <label for="">File Upload <span>*</span></label>
                                <input type="file" name="file" id="file">
                                @error('file')
                                <strong class="text-danger">{{$message}}</strong>
                                @enderror
                            </div>

                            <div class="col-md-10 mb-3">
                                <label for="">Notice <span>*</span> </label>
                                <textarea class="ckeditor" id="editor1" name="description"></textarea>
                                @error('notice')
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
