@extends('layouts.AdminPanal')
@section('content')
<div class="u-content">
    <div class="u-body">

        <section class="es-form-area">
            <div class="card">
                <header class="card-header bg-gradient border-0 pt-5 pb-5 d-flex align-items-center">
                    <h2 class="text-white mb-0">Add Album</h2>
                </header>
                <form action="{{route('insert.albem')}}" method="POST">
                    @csrf
                    <div class="session_add">
                        <div class="row">
                            <div class="col-md-10 mb-3">
                                <label for="">Album Title </label>
                                <input type="text" name="title" id="">
                                 @error('title')
                                <strong class="text-danger">{{$message}}</strong>
                                @enderror
                            </div>

                            <div class="col-md-10 mb-3">
                                <label for="">Album Type </label>
                                <p class="rad_text">
                                    <input type="radio" value="Photo" placeholder="Education" name="albamtype" id="check">
                                    <b>Photo</b>
                                </p> &nbsp; &nbsp;
                                <p class="rad_text">
                                    <input type="radio" value="Video" placeholder="Education" name="albamtype" id="check">
                                    <b>Video</b>
                                </p>
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
                    </div>
                </form>
            </div>
        </section>

    </div>
</div>
@endsection
