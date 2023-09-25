@extends('layouts.AdminPanal')
@section('content')
<div class="u-body">

    <section class="es-form-area">
        <div class="card">
            <header class="card-header bg-gradient border-0 pt-5 pb-5 d-flex align-items-center">
                <h2 class="text-white mb-0">Update Employee Salary</h2>
            </header>
            <div class="session_view_link ml-3 mt-4 mb-5">
                <a href="{{ route('employee-salary.add')}}" class="btn btn-primary"><i class="fa-solid fa-plus"></i></a>
                <a href="{{ route('employee-salary.view')}}" class="btn btn-primary"><i class="fa-solid fa-eye"></i></a>
            </div>
            <div class="branch_edit">
                <div class="row">

                    <div class="col-md-10 mb-3">
                        <label for="">Employee Type <span>*</span></label>
                        <select name="" id="">
                            <option value="">Select Employee Type </option>
                            <option value="">Casual</option>
                            <option value="">Contractual</option>
                            <option value="">Full-time</option>
                            <option value="">Half-time</option>
                            <option value="">Part-time</option>
                        </select>
                    </div>

                    <div class="col-md-10 mb-3">
                        <label for="">Payrolls Head <span>*</span></label>
                        <select name="" id="">
                            <option value="">Select Payrolls Head</option>
                        </select>
                    </div>

                    <div class="col-md-10 mb-3">
                        <label for="">Status <span>*</span></label>
                        <select name="" id="">
                            <option value="">Active</option>
                            <option value="">Inactive</option>
                        </select>
                    </div>

                    <div class="col-md-10 mt-4 mb-3">
                        <p>
                            <a href="" class="btn bg-gradient border-0 text-white">Update</a>
                            <a href="" class="btn  cancel_btn border-0 text-white">Cancel</a>
                        </p>
                    </div>

                </div>
            </div>
        </div>
    </section>
    @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif
</div>
@endsection