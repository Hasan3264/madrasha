@extends('layouts.AdminPanal')
@section('content')

        <div class="u-content">
        <div class="u-body">

<section class="es-form-area">
    <div class="card">
        <header class="card-header bg-gradient border-0 pt-5 pb-5 d-flex align-items-center">
            <h2 class="text-white mb-0">Update Syllabus</h2>
        </header>
        <div class="session_view_link ml-3 mt-4 mb-5">
            <a href="add_syllabus.html" class="btn btn-primary"><i class="fa-solid fa-plus"></i></a>
            <a href="syllabus_view.html" class="btn btn-primary"><i class="fa-solid fa-eye"></i></a>
        </div>
        <div class="branch_edit">
            <div class="row">


                <div class="col-md-10 mb-3">
                    <label for="">Class Name <span>*</span></label>
                    <input type="text" placeholder=" "  name="" id="">
                </div>

                <div class="col-md-10 mb-3">
                    <label for="">Title <span>*</span></label>
                    <input type="text" placeholder=" "  name="" id="">
                </div>

                <div class="col-md-10 mb-3">
                    <label for="" >File <span>*</span></label>
                    <input type="file" placeholder=" "  name="" id="file">
                    <label for="file" id="fileCustom" class="syllabusFile"><i class="fa-solid fa-camera"></i> Choose Photo</label>
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

    </div>
</div>

@endsection
