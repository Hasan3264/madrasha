@extends('layouts.AdminPanal')
@section('content')
<div class="u-body">

    <section class="es-form-area">
        <div class="card">
            <header class="card-header bg-gradient border-0 pt-5 pb-5 d-flex align-items-center">
                <h2 class="text-white mb-0">Add Employee Type</h2>
            </header>
            <div class="session_add">
                <form action="{{ route('store.employeetype') }}" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-md-10 mb-3">
                            <label for>Name <span>*</span></label>
                            <input type="text" name="name" id>
                            @error('name')
                            <span class="text-red-500 text-sm">{{$message}}</span>
                            @enderror
                        </div>

                        <div class="col-md-10 mb-3">
                            <label for>Deduct Salary on Absent?
                                <span>*</span></label>
                            <p class="rad_text">
                                <input type="radio" name="deduct_salary" value="1" id="check">
                                <b>Yes</b>
                            </p> &nbsp; &nbsp;
                            <p class="rad_text">
                                <input type="radio" name="deduct_salary" value="0" id="check">
                                <b>No</b>
                            </p>
                            @error('deduct_salary')
                            <span class="text-red-500 text-sm">{{$message}}</span>
                            @enderror
                        </div>

                        <div class="col-md-10 mb-3">
                            <label for>Has Over Time?<span>*</span></label>
                            <p class="rad_text">
                                <input type="radio" name="over_time" value="1" id="check">
                                <b>Yes</b>
                            </p> &nbsp; &nbsp;
                            <p class="rad_text">
                                <input type="radio" name="over_time" value="0" id="check">
                                <b>No</b>
                            </p>
                            @error('over_time')
                            <span class="text-red-500 text-sm">{{$message}}</span>
                            @enderror
                        </div>

                        <div class="col-md-10 mb-3">
                            <label for>Status <span>*</span></label>
                            <select name="status" id>
                                <option value="1">Active</option>
                                <option value="0">Inactive</option>
                            </select>
                            @error('status')
                            <span class="text-red-500 text-sm">{{$message}}</span>
                            @enderror
                        </div>

                        <div class="col-md-10 mt-4 mb-3">
                            <p>
                                <button type="submit" class="btn bg-gradient border-0 text-white">Create</button>
                                <a href="employeetype" class="btn  cancel_btn border-0 text-white">Cancel</a>
                            </p>
                        </div>

                    </div>
                </form>

            </div>
        </div>
    </section>

</div>
@endsection