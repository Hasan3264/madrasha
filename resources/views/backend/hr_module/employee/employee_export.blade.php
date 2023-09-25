@extends('layouts.AdminPanal')
@section('content')
<div class="u-body">
    <section class="es-form-area">
        <div class="card">
            <header class="card-header bg-gradient border-0 pt-5 pb-5 d-flex align-items-center">
                <h2 class="text-white mb-0">Employees Export for Attendance</h2>
            </header>

            <div class="academic_info">


                <div class="container">

                    <div class="row mt-3 mb-4">

                        <div class="col-12 col-md-12">
                            <label for="">Device Serial / MAC</label>
                            <select name="" id="">
                                <option value="">Select Device Serial / MAC</option>
                                <option value="">1</option>
                            </select>
                            <input type="submit" class="export_btn" value="Export" name="" id="">
                        </div>

                    </div>

                </div>

            </div>

        </div>
    </section>

</div>
@endsection