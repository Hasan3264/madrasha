@extends('layouts.Frontend')
@section('frontend')
<style>
    table {
        width: 100%;
        border-collapse: collapse;
        margin: 20px 0;
    }

    th, td {
        padding: 10px;
        text-align: center;
        border: 1px solid #ddd;
    }

    th {
        background-color: #f2f2f2;
    }

    tbody tr:nth-child(even) {
        background-color: #f2f2f2;
    }

    tbody tr:hover {
        background-color: #ddd;
    }

    .percentage {
        font-weight: bold;
        color: green;
    }

    .aplus {
        font-weight: bold;
        color: blue;
    }
    h2 {
            line-height: 50px;
            text-align: center;
            font-family: 'Times New Roman', Times, serif;
            background-color: #6c0b0b;
            color: #fff; /* Text color */
            padding: 10px; /* Add padding to create a background box */
            border-radius: 10px; /* Rounded corners */
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.2); /* Add a subtle shadow */
            text-transform: uppercase; /* Convert text to uppercase */
        }
</style>
<div class="container">
      <div class="row m-auto">
          <div class="col-lg-10 dffdd m-auto">
            <h2 style="line-height: 50px; text-align:center; font-family:'Times New Roman', Times, serif; background-color:#6c0b0b;">Board Result</h2>
            <table class="tabfgle">
                <thead>
                    <tr>
                        <th>Year</th>
                        <th>Exam Name</th>
                        <th>Total Students</th>
                        <th>Passed Students</th>
                        <th>Passed Percentage</th>
                        <th>Total A+</th>
                    </tr>
                </thead>
                <tbody>
                   @foreach (App\Models\Boardresult::where('exam_type', 'B')->get() as $result)
                   <tr>
                    <td>{{$result->year}}</td>
                    <td>{{$result->exam_name}}</td>
                    <td>{{$result->t_student}}</td>
                    <td>{{$result->pass_student}}</td>
                    <td class="percentage">{{$result->passes}}</td>
                    <td class="aplus">{{$result->t_plass}}</td>
                </tr>
                   @endforeach
                    <!-- Add more rows as needed -->
                </tbody>
            </table>
          </div>
      </div>
</div>
@endsection
