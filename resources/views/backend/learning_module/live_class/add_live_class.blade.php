@extends('layouts.AdminPanal')
@section('content')


    <div class="u-content">
        <div class="u-body">

<section class="es-form-area">
    <div class="card">
        <header class="card-header bg-gradient border-0 pt-5 pb-5 d-flex align-items-center">
            <h2 class="text-white mb-0">Add Live Class</h2>
        </header>
        <div class="card-body">
            <form action="" class="es-form es-add-form">
                <div class="row">

                    <div class="col-lg-8 offset-lg-2 col-md-12 mb-4">
                        <label for="subject">Class <span>*</span></label>
                        <select id="day" class="es-add-select" style="display: none;">
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
                            <option value="">Eleven</option>
                            <option value="">Tweleve</option>
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
                            <option value="">Eleven</option>
                            <option value="">Tweleve</option>
                        </select>
                    </div>

                    <div class="col-lg-8 offset-lg-2 col-md-12 mb-4">
                        <label for="day">Shift <span>*</span> </label>
                        <select id="day" class="es-add-select" style="display: none;">
                            <option value="">Select Shift</option>
                            <option value="">Morning</option>
                            <option value="">Day</option>

                        </select>
                    </div>

                    <div class="col-lg-8 offset-lg-2 col-md-12 mb-4">
                        <label for="day">Section <span>*</span></label>
                        <select id="day" class="es-add-select" style="display: none;">
                            <option value="">Select Section</option>
                            <option value="">A</option>
                            <option value="">B</option>
                        </select>
                    </div>

                    <div class="col-lg-8 offset-lg-2 col-md-12 mb-4">
                        <label for="day">Subject <span>*</span></label>
                        <select id="day" class="es-add-select" style="display: none;">
                            <option value="">Select Subject</option>
                            <option value="">Bangla</option>
                            <option value="">English</option>
                            <option value="">Mathmatics</option>
                            <option value="">Social Science</option>
                            <option value="">Science</option>
                            <option value="">Agriculture</option>
                        </select>
                    </div>

                    <div class="col-lg-8 offset-lg-2 col-md-12 mb-4">
                        <label for="day">Teacher <span>*</span></label>
                        <select id="day" class="es-add-select" style="display: none;">
                            <option value="">Select Teacher</option>
                            <option value="">01254 - Afzal</option>
                            <option value="">01255 - Rahman</option>
                            <option value="">01244 - Kamran</option>
                        </select>
                    </div>

                    <div class="col-lg-8 offset-lg-2 col-md-12 mb-4">
                        <label for="day">Class Topic <span>*</span></label>
                        <input type="text">
                    </div>

                    <div class="col-lg-8 offset-lg-2 col-md-12 mb-4">
                        <label for="day">Class Date <span>*</span></label>
                        <input type="date">
                    </div>


                    <div class="col-lg-8 offset-lg-2 col-md-12 mb-4">
                        <label for="day">Class Time <span>*</span></label>
                        <input type="datetime">
                    </div>

                    <div class="col-lg-8 offset-lg-2 col-md-12 mb-4">
                        <label for="day">Class Duration(Minute) <span>*</span></label>
                        <input type="text" placeholder="Default 40min">
                    </div>

                    <div class="col-lg-8 offset-lg-2 col-md-12 mb-4">
                        <label for="day">Password<span>*</span></label>
                        <input type="password" >
                    </div>

                    <div class="col-lg-8 offset-lg-2 col-md-12 mb-4">
                        <label for="day">Status </label>
                        <select id="day" class="es-add-select" style="display: none;">
                            <option value="">Pending</option>
                            <option value="">Done</option>
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
