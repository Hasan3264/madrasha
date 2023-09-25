@extends('layouts.AdminPanal')
@section('content')

        <div class="u-content">
        <div class="u-body">

<section class="es-form-area">
    <div class="card">
        <header class="card-header bg-gradient border-0 pt-5 pb-5 d-flex align-items-center">
            <h2 class="text-white mb-0">
                Academic Syllabus
            </h2>
        </header>

        <div class="card-body " id="institue">
            <a href="{{route('add_syllabus')}}" class="btn btn-primary"><i class="fa-solid fa-plus"></i></a>
            <form action="" class="es-form es-add-form">

              <p class="text-right">Showing 1-1 of 1 item</p>
                <!---- syllabus table  ----->
                <div class="table-responsive">
                    <table class="table table-bordered mt-3 text-center ">
                        <thead class="table-bordered">
                            <tr>
                                <th scope="col">Srl</th>
                                <th scope="col">Class Name</th>
                                <th scope="col">Title</th>
                                <th scope="col">File</th>
                                <th scope="col">Status</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row"></th>
                                <td>
                                    <select name="" id="">
                                        <option value="">All</option>
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
                                </td>
                                <td>
                                   <input type="text" name="" id="">
                                </td>
                                <td>

                                </td>
                                <td>
                                    <select name="" id="">
                                        <option value="">Active</option>
                                        <option value="">Inactive</option>
                                    </select>
                                </td>
                                <td></td>
                            </tr>

                            <tr>
                                <td>1</td>
                                <td>Five</td>
                                <td>Spring Semester exam Suggestion for class Five</td>
                                <td>PDF File</td>
                                <td>Active</td>
                                <td>
                                    <a href="{{route('view_syllabus')}}"><i class="fa-solid fa-eye"></i></a>&nbsp &nbsp
                                    <a href="{{route('edit_syllabus')}}"><i class="fa-solid fa-pencil"></i></a>&nbsp &nbsp
                                    <a href="{{route('delete_syllabus')}}"><i class="fa-solid fa-trash"></i></a>&nbsp &nbsp
                                </td>

                            </tr>

                        </tbody>
                    </table>
                </div>

                <!---- /syllabus table ----->

            </form>
        </div>

    </div>
</section>

    </div>
</div>

@endsection
