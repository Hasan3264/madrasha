@extends('layouts.AdminPanal')
@section('content')

        <div class="u-content">
        <div class="u-body">

<section class="es-form-area">
    <div class="card">
        <header class="card-header bg-gradient border-0 pt-5 pb-5 d-flex align-items-center">
            <h2 class="text-white mb-0">Add Lesson Plan</h2>
        </header>
        <div class="card-body">
            <form action="" class="es-form es-add-form">
                <div class="row">

                    <div class="col-lg-8 offset-lg-2 col-md-12 mb-4">
                        <label for="subject">Class <span>*</span></label>
                        <select id="subject" class="es-add-select" style="display: none;">
                            <option data-display="Select">Select Class</option>
                            <option value="">Select Class</option>
                            <option value="" class="bold_text">Bangla Medium</option>
                            <option value="">Play</option>
                            <option value="">Nursary</option>
                            <option value="">KG</option>
                            <option value="">One</option>
                            <option value="">Two</option>
                            <option value="">Three</option>
                            <option value="">Four</option>
                            <option value="">Five</option>
                            <option value="">Six</option>
                            <option value="">Seven</option>
                            <option value="">Eight</option>
                            <option value="">Nine</option>
                            <option value="">Ten</option>
                            <option value="" class="bold_text">English Medium</option>
                            <option value="">Play</option>
                            <option value="">Nursary</option>
                            <option value="">KG</option>
                            <option value="">One</option>
                            <option value="">Two</option>
                            <option value="">Three</option>
                            <option value="">Four</option>
                            <option value="">Five</option>
                            <option value="">Six</option>
                            <option value="">Seven</option>
                            <option value="">Eight</option>
                            <option value="">Nine</option>
                            <option value="">Ten</option>
                          </select>
                    </div>

                    <div class="col-lg-8 offset-lg-2 col-md-12 mb-4">
                        <label for="day">Shift <span>*</span> </label>
                        <select id="day" class="es-add-select" style="display: none;">
                            <option value="">Select Shift</option>

                        </select>
                    </div>

                    <div class="col-lg-8 offset-lg-2 col-md-12 mb-4">
                        <label for="day">Section <span>*</span></label>
                        <select id="day" class="es-add-select" style="display: none;">
                            <option value="">Select Section</option>
                        </select>
                    </div>

                    <div class="col-lg-8 offset-lg-2 col-md-12 mb-4">
                        <label for="day">Subject <span>*</span></label>
                        <select id="day" class="es-add-select" style="display: none;">
                            <option value="">Select Subject</option>
                        </select>
                    </div>

                    <div class="col-lg-8 offset-lg-2 col-md-12 mb-4">
                        <label for="day">Teacher <span>*</span></label>
                        <select id="day" class="es-add-select" style="display: none;">
                            <option value="">Select Teacher</option>
                            <option value="">000025321 -  Akram</option>
                            <option value="">000025321 -  Akram</option>
                            <option value="">000025321 -  Akram</option>
                            <option value="">000025321 -  Akram</option>
                            <option value="">000025321 -  Akram</option>
                        </select>
                    </div>

                    <div class="col-lg-8 offset-lg-2 col-md-12 mb-4">
                        <label for="day">Lesson Title <span>*</span></label>
                        <input type="text">
                    </div>

                    <div class="col-lg-8 offset-lg-2 col-md-12 mb-4">
                        <label for="day">Chapter <span>*</span></label>
                        <input type="text">
                    </div>

                    <div class="col-lg-8 offset-lg-2 col-md-12 mb-4">
                        <label for="day">Page No. (Single / Range) <span>*</span></label>
                        <input type="text">
                    </div>

                    <div class="col-lg-8 offset-lg-2 col-md-12 mb-4">
                        <label for="day">Video URL</label>
                        <input type="text">
                    </div>

                    <div class="col-lg-8 offset-lg-2 col-md-12 mb-4">
                        <label for="day">Attachment</label>
                        <input type="file" id="file">
                        <label for="file" id="fileCustom"><i class="fa-solid fa-camera"></i> Choose Photo</label>
                        <label for=""><span>Attachment file type (pdf,png,jpg,jpeg,gif,bmp) supported, maximum 10MB</span></label>
                    </div>


                    <div class="col-lg-8 offset-lg-2 col-md-12 mb-4">
                        <label for="day"> Lesson Plan Details<span>*</span></label>
                        <textarea class="ckeditor" id="editor1" name="editor1"></textarea>
                    </div>

                    <div class="col-lg-8 offset-lg-2 col-md-12 mb-4">
                        <label for="day">Assign Date<span>*</span></label>
                        <input type="date" >
                    </div>

                    <div class="col-lg-8 offset-lg-2 col-md-12 mb-4">
                        <label for="day">Due Date<span>*</span></label>
                        <input type="date" >
                    </div>

                    <div class="col-lg-8 offset-lg-2 col-md-12 mb-4">
                        <label for="day">Status </label>
                        <select id="day" class="es-add-select" style="display: none;">
                            <option value="">Active</option>
                            <option value="">Deactive</option>
                        </select>
                    </div>

                </div>

                <p>
                    <a href="" class="btn bg-gradient border-0 text-white">Create</a>
                    <a href="" class="btn  border-0 text-white">Cancel</a>
                </p>

            </form>
        </div>
    </div>
</section>

    </div>
</div>

@endsection
