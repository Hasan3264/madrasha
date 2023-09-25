<?php
ini_set('pcre.backtrack_limit', '5000000');
error_reporting(0);
?>

<table border="0px" width="98%" align="center" style="border-collapse:collapse; margin:2px auto; padding-top: 50px">
    <tr>
  @foreach ($studentPersonalDEtails as $studentPersonalDet)@endforeach
  @foreach ($studentAddmittion as $studentAddmit)@endforeach

        <td style="text-align:center; line-height: 30px">
            <div class="adFormTxt">
                <h4 style="font-size: 26px;font-weight: 900; margin: 20px 0 2px; color: darkblue;">{{$institute->institute_name}}-{{$institute->eiin_no}}</h4>
                <p style="font-size: 20px;font-weight: 600; color: darkblue;  margin: 20px 0;">{{$institute->email}}</p>
                <p style="font-size: 20px;font-weight: 600;color: darkblue;margin: 20px 0;">Student's Due Report of Session - {{$studentAddmit->session_name}}</p>
                <p style="font-size: 20px;font-weight: 600;color: darkblue;margin: 20px 0;">Month : {{$studentfeeDetails->month}}</p>
                <p style="font-size: 20px;font-weight: 600;color: darkblue;margin: 20px 0;">Student ID : {{$studentfeeDetails->student_id}}, Student Name : {{$studentPersonalDet->student_name_en}}</p>
                <p style="font-size: 20px;font-weight: 600;color: darkblue;margin: 20px 0;">Class : {{$studentAddmit->getClassName($studentAddmit->class_name)}}, Section : {{$studentAddmit->section_name}}, Shift : {{$studentAddmit->shift_name}}, Roll : {{$studentAddmit->roll_number}}</p>
            </div>
        </td>

    </tr>
</table>
<br>
   <table class="jolchap" align="center" border="1"  width='100%' cellspacing="0" cellspacing='0' style="border-collapse:collapse;margin:0 auto;table-layout:fixed;">

      <tr style="font-size: 17px;font-weight: 600; background-color: rgb(211, 210, 210); text-align: center;font-size: 17px;font-weight: 600;">

        <td style="text-align: center;font-size: 19px;" width="15%">Payable</td>
        <td style="text-align: center;font-size: 19px;" width="15%">Waived</td>
        <td style="text-align: center;font-size: 19px;" width="15%">Paid</td>
          <td style="text-align: center;font-size: 19px;" width="15%">Due</td>
      </tr>
      <tr>
        <td style="text-align: center;font-size: 17px;">{{$studentfeeDetails->total_payable}}</td>
        @foreach ($waived as $waivers)@endforeach
        <td style="text-align: center;font-size: 17px;">{{$waivers->wavier}}</td>
        <td style="text-align: center;font-size: 17px;">{{$studentfeeDetails->paid_amount}}</td>
        <td style="text-align: center;font-size: 17px;">{{$waivers->wavier-$studentfeeDetails->due_amount}}</td>
      </tr>
    </table>
