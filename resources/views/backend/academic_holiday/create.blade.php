@extends('layouts.AdminPanal')
@section('content')
@can('watch')
<div class="u-body">
    @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif
    <section class="es-form-area">
        <div class="card">
            <header class="card-header bg-gradient border-0 pt-5 pb-5 d-flex align-items-center">
                <h2 class="text-white mb-0">Add Academic Holiday</h2>
            </header>
            <div class="branch_edit">
                <form action="{{route('academic-holiday.store')}}" method="post">
                    @csrf
                    <div class="row">

                        <div class="col-md-10 mb-3">
                            <label for>Type <span>*</span></label>
                            <p class="rad_text">
                                <input type="radio" name="type" value="activities" checked id="check">
                                <b>activities</b>
                            </p> &nbsp; &nbsp;
                            <p class="rad_text">
                                <input type="radio" value="holidays" name="type" id="check">
                                <b>Holidays</b>
                            </p>
                            @error('type')
                            <span class="text-red-500 text-sm">{{$message}}</span>
                            @enderror
                        </div>

                        <div class="col-md-10 mb-3">
                            <label for>Title <span>*</span></label>
                            <input type="text" placeholder="Holiday Title" name="title" id="">
                            @error('title')
                            <span class="text-red-500 text-sm">{{$message}}</span>
                            @enderror
                        </div>

                        <div class="col-md-10 mb-3">
                            <label for>Status <span>*</span></label>
                            <select name="status" id="">
                                <option value="active">Active</option>
                                <option value="inactive">Inactive</option>
                            </select>
                            @error('status')
                            <span class="text-red-500 text-sm">{{$message}}</span>
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
@endcan
@endsection
