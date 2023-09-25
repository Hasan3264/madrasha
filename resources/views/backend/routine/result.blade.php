<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
</head>
<body>
<div class="u-body">
    @foreach ($findRoutine as $tyu)@endforeach
    <section class="es-form-area">
        <div class="card">
            <header style="text-align:center; line-height: 30px">
                <h2 style="font-size: 26px;font-weight: 900; margin: 20px 0 2px; color: darkblue; font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">Routine</h2>
                <h3 style="font-size: 20px;font-weight: 900; margin: 20px 0 2px; color: darkblue; font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">{{$tyu->relation_AllClass->class_name}}</h3>
            </header>
            <div class="search_result table-responsive">

                <div class="d-flex justify-content-between">
                     <button onclick="window.print()" style=" border-radius:5px;  padding: 10px; font-size:20px; background:green; font-family:Verdana, Geneva, Tahoma, sans-serif;">  Print/Download</button>
                </div>

                <table  border="0px" width="98%" align="center" style="border-collapse:collapse; margin:2px auto; padding-top: 50px">
                    <thead>
                        <tr>
                            <th style="font-size: 16px;width: 120px;text-align: start; border:1px solid #000; padding:10px; font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;"  scope="col">Day</th>
                            <th style="font-size: 16px;width: 120px;text-align: start; border:1px solid #000; padding:10px; font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;" scope="col">Subject</th>
                            <th style="font-size: 16px;width: 120px;text-align: start; border:1px solid #000; padding:10px; font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;" scope="col">shifts</th>
                            <th style="font-size: 16px;width: 120px;text-align: start; border:1px solid #000; padding:10px; font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;" scope="col">Brack</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($findRoutine as $routine)
                        <tr>
                            <td style="font-size: 16px;width: 120px;text-align: start; border:1px solid #000; padding:10px; font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;">{{$routine->routine_day}}</td>
                            <td style="font-size: 16px;width: 120px;text-align: start; border:1px solid #000; padding:10px; font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;">{{$routine->relation_AllSubject->name}} <br> {{$routine->teacher_id}} </td>
                            <td style="font-size: 16px;width: 120px;text-align: start; border:1px solid #000; padding:10px; font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;">{{date("g:i a", strtotime($routine->s_time))}} - {{date("g:i a", strtotime($routine->e_time))}} </td>
                            <td style="font-size: 16px;width: 120px;text-align: start; border:1px solid #000; padding:10px; font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;">{{$routine->brack_time == 1 ? 'YES':"NO"}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
</div>
</section>

</div>
</body>
</html>
{{-- @endsection  --}}
