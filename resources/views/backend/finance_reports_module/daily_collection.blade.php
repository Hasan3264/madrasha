@extends('layouts.AdminPanal')
@section('content')
<div class="u-body">
    <section class="es-form-area">
        <div class="card">
            <header class="card-header bg-gradient border-0 pt-5 pb-5 d-flex align-items-center">
                <h2 class="text-white mb-0">Student's Daily Fee Collection Report </h2>
            </header>

            <div class="academic_info">
                <h5>

                </h5>

                <div class="container">

                    <div class="row mt-3 mb-4">

                        <div class="col-6">
                            <label for="">Transaction Date <span class="text-danger">*</span></label>
                            <input type="date" name="" id="">
                        </div>


                        <div class="col-6">
                            <a href="#" class="btn btn-primary px-5">Save</a>
                        </div>

                    </div>

                    <div class="dataDiv">
                        <p>No data exists</p>
                    </div>

                </div>

            </div>

        </div>
    </section>
</div>
@endsection