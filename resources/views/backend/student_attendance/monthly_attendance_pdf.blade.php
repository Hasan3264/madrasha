<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <style>
        *,
        *::before,
        *::after {
            box-sizing: border-box;
        }

        div {
            display: block;
        }

        body {
            margin: 0;
            font-family: 'Nunito', sans-serif;
            font-size: 0.9375rem;
            font-weight: 400;
            line-height: 1.5;
            color: #212529;
            text-align: left;
            background-color: #f6f9fc;

        }

        .card {
            position: relative;
            display: -ms-flexbox;
            display: flex;
            -ms-flex-direction: column;
            flex-direction: column;
            min-width: 0;
            word-wrap: break-word;
            background-color: #fff;
            background-clip: border-box;
            border: 1px solid #eaf2f9;
            border-radius: 0.25rem;
        }

        .attendence_summary {
            margin-top: 50px;
            padding: 50px 20px !important;
            box-shadow: rgba(99, 99, 99, 0.2) 0px 2px 8px 0px;
            background-color: #fff;
            border-radius: 10px;
            position: relative;
        }

        div {
            display: block;
        }

        .text-center {
            text-align: center !important;
        }

        .attendence_summary_top h1 {
            font-size: 30px;
            font-weight: 900;
            margin: 20px 0 2px;
            color: darkblue;
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6,
        .h1,
        .h2,
        .h3,
        .h4,
        .h5,
        .h6 {
            margin-bottom: 0.5rem;
            font-family: inherit;
            font-weight: 500;
            line-height: 1.2;
            color: inherit;
        }

        :-webkit-any(article, aside, nav, section) h1 {
            font-size: 1.5em;
            margin-block-start: 0.83em;
            margin-block-end: 0.83em;
        }

        h1 {
            display: block;
            font-size: 2em;
            margin-block-start: 0.67em;
            margin-block-end: 0.67em;
            margin-inline-start: 0px;
            margin-inline-end: 0px;
            font-weight: bold;
        }

        ::selection {
            color: #fff;
            background-color: #6b15b6;
        }

        .attendence_summary_top a {
            font-size: 20px;
            color: blue !important;
        }

        a {
            color: #6b15b6;
            text-decoration: none;
            background-color: transparent;
            -webkit-text-decoration-skip: objects;
        }

        a:-webkit-any-link {
            color: -webkit-link;
            cursor: pointer;
            text-decoration: underline;
        }

        .attendence_summary_top p {
            font-size: 16px;
        }

        p {
            line-height: 1.8;
            color: #5a6a7e;
        }

        p {
            margin-top: 0;
            margin-bottom: 1rem;
        }

        p {
            display: block;
            margin-block-start: 1em;
            margin-block-end: 1em;
            margin-inline-start: 0px;
            margin-inline-end: 0px;
        }

        .attendence_summary_top h3 {
            margin-top: 20px;
            margin-bottom: 10px;
            font-size: 21px;
            font-weight: 500;
        }

        h3 {
            display: block;
            font-size: 1.17em;
            margin-block-start: 1em;
            margin-block-end: 1em;
            margin-inline-start: 0px;
            margin-inline-end: 0px;
            font-weight: bold;
        }

        .attendence_summary_mid {
            margin-top: 60px;
        }

        .table-responsive {
            display: block;
            width: 100%;
            overflow-x: auto !important;
            overflow-y: hidden !important;
            -webkit-overflow-scrolling: touch;
            -ms-overflow-style: -ms-autohiding-scrollbar;
        }

        .table-responsive>.table-bordered {
            border: 0;
        }

        .table {
            margin-bottom: 0;
        }

        .text-center {
            text-align: center !important;
        }

        .mt-3,
        .my-3 {
            margin-top: 1rem !important;
        }

        .table-bordered {
            border: 1px solid #eaf2f9;
        }

        .table {
            width: 100%;
            margin-bottom: 1rem;
            background-color: transparent;
        }

        table {
            border-collapse: collapse;
        }

        table {
            display: table;
            border-collapse: separate;
            box-sizing: border-box;
            text-indent: initial;
            border-spacing: 2px;
            border-color: gray;
        }



        .table-bordered {
            border: 1px solid #eaf2f9;
        }

        *,
        *::before,
        *::after {
            box-sizing: border-box;
        }

        thead {
            display: table-header-group;
            vertical-align: middle;
            border-color: inherit;
        }


        /* inherited */
        .text-center {
            text-align: center !important;
        }

        table {
            border-collapse: collapse;
        }

        table {
            border-collapse: separate;
            text-indent: initial;
            border-spacing: 2px;
        }


        .table thead tr {
            font-size: 17px;
            font-weight: 600;
        }

        *,
        *::before,
        *::after {
            box-sizing: border-box;
        }

        tr {
            display: table-row;
            vertical-align: inherit;
            border-color: inherit;
        }

        .table thead th:first-child {
            border-top-left-radius: 6px;
            border-bottom-left-radius: 6px;
        }

        .table thead th {
            vertical-align: middle;
        }

        .table thead th {
            border: 0 0 !important;
            padding: 10px 20px;
        }

        .table thead th {
            border-bottom-width: 1px;
        }

        .table-bordered thead th,
        .table-bordered thead td {
            border-bottom-width: 2px;
        }

        .table thead th {
            vertical-align: bottom;
            border-bottom: 2px solid #eaf2f9;
        }

        .table th {
            font-weight: 400;
            color: #5a6a7e;
            border-top: none;
        }

        .table th,
        .table td {
            vertical-align: middle;
        }

        .table-bordered th,
        .table-bordered td {
            border: 1px solid #eaf2f9;
        }

        .table th,
        .table td {
            padding: 0.75rem;
            vertical-align: top;
            border-top: 1px solid #eaf2f9;
        }

        th {
            text-align: inherit;
        }

        *,
        *::before,
        *::after {
            box-sizing: border-box;
        }

        th {
            display: table-cell;
            vertical-align: inherit;
            font-weight: bold;
            text-align: -internal-center;
        }

        tbody {
            display: table-row-group;
            vertical-align: middle;
            border-color: inherit;
        }

        tr {
            display: table-row;
            vertical-align: inherit;
            border-color: inherit;
        }

        table {
            border-collapse: collapse;
            text-indent: initial;
            border-spacing: 2px;
        }

        .table tbody td {
            padding: 15px 20px;
            color: #000;
            font-size: 19px;
        }

        .table th,
        .table td {
            vertical-align: middle;
        }

        .table-bordered th,
        .table-bordered td {
            border: 1px solid #eaf2f9;
        }

        .table th,
        .table td {
            padding: 0.75rem;
            vertical-align: top;
            border-top: 1px solid #eaf2f9;
        }

        td {
            display: table-cell;
            vertical-align: inherit;
        }

        .curentStuImage {
            height: 50px;
            width: 50px;
        }

        img {
            vertical-align: middle;
            border-style: none;
        }

        *,
        *::before,
        *::after {
            box-sizing: border-box;
        }

        img {
            overflow-clip-margin: content-box;
            overflow: clip;
        }

        a {
            color: #6b15b6;
            text-decoration: none;
            background-color: transparent;
            -webkit-text-decoration-skip: objects;
        }
    </style>
</head>

<body>

    <div class="attendence_summary">
    <div class="attendence_summary_top text-center">
        <h1>Learning Campus (Main Branch)</h1>
        <a href="#">www.LearningCampus.com</a>
        <p>Mirpur-3, Dhaka</p>
        <h3>Monthly Attendance Summary ({{$m}})</h3>
    </div>

    <div class="attendence_summary_mid table-responsive" >
           <!---- student table  ----->
           <table class="table table-bordered mt-3 text-center">
            <thead class="table-bordered">
                <tr>
                    <th scope="col">SL</th>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Class</th>
                    <th scope="col">Roll</th>
                    <th scope="col">Shift</th>
                    <th scope="col">Section</th>
                    <th scope="col"><span style="color: green;">Attend</span>  / <span style="color: red;">Absent</span></th>
                    <th scope="col"><span style="color: green;">IN</span></th>
                    <th scope="col"><span style="color: red;">OUT</span></th>
                </tr>
            </thead>
            <tbody>
            @foreach($attendance as $key=>$item)
                 <tr>
                    <td>{{$key+=1}}</td>
                    <td>{{ $item->student_id }}</td>
                    <td>
                        <img src="{{public_path($student_info->getStudentPhoto($item->student_id))}}" class="curentStuImage" alt="">
                        <br><a href="#">{{$student_info->getStudentName($item->student_id)}}</a>
                     </td>
                     <td> {{ $class->getClassName($item->class_name)}} </td>
                     <td> {{$admission->roll($item->student_id)}} </td>
                     <td> {{$item->shift_name}} </td>
                     <td> {{ $item->section_name }} </td>
                    @if($item->attendance == 1)
                        <td style="color: green; font-weight: 900;">Present</td>
                    @endif
                    @if($item->attendance == 0)
                     <td style="color: red; font-weight: 900;">Absent</td>
                    @endif
                     <td>{{ $shift[0]->start_time }}</td>
                     <td>{{ $shift[0]->end_time }}</td>
                 </tr>
            @endforeach
            </tbody>
        </table>
    <!---- /student table ----->
    </div>
</div>

</body>

</html>
