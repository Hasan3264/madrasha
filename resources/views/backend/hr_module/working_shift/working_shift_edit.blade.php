@extends('layouts.AdminPanal')
@section('content')
<div class="u-body">
    @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif
    <section class="es-form-area">
        <div class="card">
            <header class="card-header bg-gradient border-0 pt-5 pb-5 d-flex align-items-center">
                <h2 class="text-white mb-0">Update Working Shift</h2>
            </header>
            <form action="{{route('shift.edit')}}" method="POST">
                @csrf
                <div class="branch_edit">
                    <div class="row">
                        <div class="col-md-10 mb-3">
                            <label for="">Name <span>*</span></label>
                            <input type="text" placeholder="Shift Name" value="{{$findId->name}}" name="name" id="">
                            @error('name')
                            <strong class="text-danger">{{$message}}</strong>
                            @enderror
                        </div>

                        <div class="col-md-10 mb-3">
                            <label for="">Start Time <span>*</span></label>
                            <input type="time" placeholder="Start Time" value="{{$findId->s_time}}" name="s_time" id="">
                            <input type="hidden" value="{{$findId->id}}" name="shift_id">
                        </div>
                        @error('s_time')
                        <strong class="text-danger">{{$message}}</strong>
                        @enderror
                        <div class="col-md-10 mb-3">
                            <label for="">End Time <span>*</span></label>
                            <input type="time" placeholder="End Time" name="e_time" value="{{$findId->e_time}}" id="">
                        </div>
                        @error('e_time')
                        <strong class="text-danger">{{$message}}</strong>
                        @enderror

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
@endsection
