@extends('layouts.AdminPanal')
@section('content')

        <div class="u-content">
        <div class="u-body">

<section class="es-form-area">
    <div class="card">
        <header class="card-header bg-gradient border-0 pt-5 pb-5 d-flex align-items-center">
            <h2 class="text-white mb-0">Leave Type Update</h2>
        </header>

        <div class="session_view_link ml-3 mt-4 mb-5">
            <a href="add_leave_type.html" class="btn btn-primary"><i class="fa-solid fa-plus"></i></a>
            <a href="medium_view.html" class="btn btn-primary"><i class="fa-solid fa-eye"></i></a>
        </div>

        <form action="{{route('update_leave_type')}}" method="POST">
                    @csrf
                    <div class="branch_edit">
                        <div class="row">
                            <div class="col-md-10 mb-3">
                                <label for="">Employee Type <span>*</span></label>
                                <select name="employee_type" id="">
                                    <option value="">Select Employee Type</option>
                                    @foreach ($types as $key => $value)
                                    <option value="{{$value->id}}"{{($value->id == $findId->employee_type ?'selected':'')}}>{{$value->name}}</option>
                                    @endforeach
                                </select>
                                @error('employee_type')
                                <strong class="text-danger">{{$message}}</strong>
                                @enderror
                            </div>

                            <div class="col-md-10 mb-3">
                                <label for="">Title <span>*</span></label>
                                <input type="text" placeholder="Title" name="title" id="">
                                <input type="hidden" value="{{$findId->id}}" name="update_id" id="">
                                @error('title')
                                <strong class="text-danger">{{$message}}</strong>
                                @enderror
                            </div>

                            <div class="col-md-10 mb-3">
                                <label for="">Short Title <span>*</span></label>
                                <input type="text" placeholder="{{$findId->short_title}}" name="short_title" id="">
                                @error('short_title')
                                <strong class="text-danger">{{$message}}</strong>
                                @enderror
                            </div>

                            <div class="col-md-10 mb-3">
                                <label for="">Leave Days <span>*</span></label>
                                <input type="number" placeholder="{{$findId->leave_days}}" name="leave_days" id="">
                                @error('leave_type')
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
                    </div>
                </form>
    </div>
</section>

    </div>
</div>

@endsection
