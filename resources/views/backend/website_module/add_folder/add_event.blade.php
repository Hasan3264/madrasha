@extends('layouts.AdminPanal')
@section('content')
<div class="u-content">
    <div class="u-body">

        <section class="es-form-area">
            <div class="card">
                <header class="card-header bg-gradient border-0 pt-5 pb-5 d-flex align-items-center">
                    <h2 class="text-white mb-0">Add Event</h2>
                </header>
                <div class="session_add">
                    <form action="{{route('input.event')}}" method="POST" enctype="multipart/form-data">
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
                            <label for="">Photo/Video <span>*</span></label>
                            <input type="file" name="pv" id="">
                            @error('pv')
                            <strong class="text-danger">{{$message}}</strong>
                            @enderror
                        </div>

                        <div class="col-md-10 mb-3">
                            <label for="">Event Date<span>*</span></label>
                            <input type="date" name="date" id=""><br>
                            @error('date')
                            <strong class="text-danger">{{$message}}</strong>
                            @enderror
                        </div>

                        <div class="col-md-10 mb-3">
                            <label for="">Details <span>*</span> </label>
                            <textarea class="ckeditor" id="editor1" name="details"></textarea>
                            @error('details')
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
