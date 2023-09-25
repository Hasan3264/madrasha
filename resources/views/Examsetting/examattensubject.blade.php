@extends('layouts.AdminPanal')
@section('content')
<div class="u-body">
<section class="es-form-area">
        <div class="card">
            <header class="card-header bg-gradient border-0 pt-5 pb-5 d-flex align-items-center">
                <h2 class="text-white mb-0">Exam Attendence (Subject)</h2>
            </header>
            
    <div class="academic_info">
    <h5>

    </h5>

    <div class="container">



    <div class="row mt-3 mb-4">

    <div class="col-6 col-md-6">
        <label for="">Class <span class="text-danger">*</span></label>
        <select name="" id="">
            <option value="">Select Class </option>
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

    <div class="col-6 col-md-6">
        <label for="">Shift<span class="text-danger">*</span></label>
        <select name="" id="">
            <option value="">Select Shift</option>
            <option value="">Morning</option>
            <option value="">Day</option>
        </select>
    </div>


    </div>

    <div class="row mt-3 mb-4">
    <div class="col-6 col-md-6">
        <label for="">Section <span class="text-danger">*</span></label>
        <select name="" id="">
            <option value="">Select Section </option>
            <option value="">A</option>
            <option value="">B</option>
        </select>
    </div>

    <div class="col-6 col-md-6">
        <label for="">Exam Term <span class="text-danger">*</span></label>
        <select name="" id="">
            <option value="">Select Exam Term</option>
            <option value="">Half Yearly Exam</option>
            <option value="">Annual Exam</option>
        </select>
    </div>



    </div>


    <div class="row mt-3 mb-4">

    <div class="col-6 col-md-6">
        <label for="">Part <span class="text-danger">*</span></label>
        <select name="" id="">
            <option value="">Select Exam Part</option>
            <option value="">Class Test</option>
            <option value="">Tutorial</option>
            <option value="">Written</option>
            <option value="">MCQ</option>
            <option value="">CT</option>
        </select>
    </div>

    <div class="col-6 col-md-6">
        <label for="">Subject <span class="text-danger">*</span></label>
        <select name="" id="">
            <option value="">Select Subject</option>
        </select>
    </div>

    </div>

    <div class="row mt-3 mb-4">

    <div class="col-6 col-md-6">
    <a href="" class="btn bg-gradient border-0 text-white">Submit</a>
    </div>

    </div>


    </div>

    <div class="table-responsive attendenceTable">
    <p><i class="fa-solid fa-users"></i>  Students List for Exam Attendance</p>
    <table class="table table-bordered table-striped">
    <thead>
    <tr class="th_color">
        <th scope="col">Roll</th>
        <th scope="col">Name</th>
        <th scope="col">
            All <hr>
        <input type="checkbox" name="" id="check">
        </th>
        <th scope="col">
            All <hr>
        <input type="checkbox" name="" id="check">
        </th>
        <th scope="col">
            All <hr>
        <input type="checkbox" name="" id="check">
        </th>
        <th scope="col">
            All <hr>
        <input type="checkbox" name="" id="check">
        </th>
        <th scope="col">
            All <hr>
        <input type="checkbox" name="" id="check">
        </th>
        <th scope="col">
            All <hr>
        <input type="checkbox" name="" id="check">
        </th>
        <th scope="col">
            All <hr>
        <input type="checkbox" name="" id="check">
        </th>
        <th scope="col">
            All <hr>
        <input type="checkbox" name="" id="check">
        </th>
        <th scope="col">
            All <hr>
        <input type="checkbox" name="" id="check">
        </th>
        <th scope="col">
            All <hr>
        <input type="checkbox" name="" id="check">
        </th>
    </tr>
    </thead>
    <tbody>

    <tr>
        <th scope="row">1</th>
        <td>Rohi Das</td>

        <td class="text-center">
            Bangla 1st Paper <hr class="attendenceHr">
            <span style="color: red;">Not Eligible</span>
        </td>
        <td class="text-center">
            Bangla 2nd Paper <hr class="attendenceHr">
            <span style="color: red;">Not Eligible</span>
        </td>
        <td class="text-center">
            English 1st Paper <hr class="attendenceHr">
            <span style="color: red;">Not Eligible</span>
        </td>
        <td class="text-center">
            English 2nd Paper  <hr class="attendenceHr">
            <span style="color: red;">Not Eligible</span>
        </td>
        <td class="text-center">
            Mathematics  <hr class="attendenceHr">
            <span style="color: red;">Not Eligible</span>
        </td>
        <td class="text-center">
            Islam and Moral Education  <hr class="attendenceHr">
            <span style="color: red;">Not Eligible</span>
        </td>
        <td class="text-center">
            Science  <hr class="attendenceHr">
            <span style="color: red;">Not Eligible</span>
        </td>
        <td class="text-center">
            Agricultural Studies <hr class="attendenceHr">
            <span style="color: red;">Not Eligible</span>
        </td>
        <td class="text-center">
            Bangladesh And Global Studies  <hr class="attendenceHr">
            <span style="color: red;">Not Eligible</span>
        </td>
        <td class="text-center">
            Information & Communication Technology <hr class="attendenceHr">
            <span style="color: red;">Not Eligible</span>
        </td>

    </tr>

    
    </tbody>
    </table>

    <p class="text-center">
    <a href="" class="btn bg-gradient border-0 text-white">Submit</a>
    </p>
    </div>

    </div>

    </div>    
</section>
</div>
@endsection