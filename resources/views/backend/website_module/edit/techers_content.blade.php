@extends('layouts.AdminPanal')
@section('content')
<div class="u-content">
    <div class="u-body">

        <section class="es-form-area">
            <div class="card">
                <header class="card-header bg-gradient border-0 pt-5 pb-5 d-flex align-items-center">
                    <h2 class="text-white mb-0">Add Facility</h2>
                </header>
                <div class="session_add">
                    <form action="{{route('update.contentTeacher')}}" method="POST">
                        @csrf
                        <div class="row">

                            <div class="col-md-10 mb-3">
                                <label for="">Content First </label>
                                <textarea class="ckeditor" placeholder="NOt to LOng" id="editor1" name="pera_1"></textarea>
                                 @error('details')
                                <strong class="text-danger">{{$message}}</strong>
                                @enderror
                                <input type="hidden" value="{{$findId->id}}" name="edit_id">
                            </div>

                            <div class="col-md-10 mb-3">
                                <label for="">Content Last </label>
                                <textarea class="ckeditor" placeholder="NOt to LOng" id="editor1" name="pera_2"></textarea>
                                 @error('details')
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
