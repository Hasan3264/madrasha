
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
</head>
<body>

<table width="98%" align="center" style="border-collapse:collapse; margin:2px auto; padding-top: 50px">
    <tr>
        <td style="width:1.5in; text-align:center;">
            <img src="{{ public_path('uploads/backend/logo/')}}/{{$institute->logo}}" height="140px" width="140px" alt="xccxvc" />
        </td>

        <td style="text-align:center; line-height: 30px">
            <div class="adFormTxt">
                <h4 style="font-size: 26px;font-weight: 900; margin: 20px 0 2px; color: darkblue;">{{$institute->institute_name}}</h4>

                <p style="font-size: 18px;margin: 2px 0;line-height: 25px; color:#5a6a7e">{{$institute->email}}</p>
                <p style="font-size: 18px;margin: 2px 0;line-height: 25px; color:#5a6a7e">Mobile : {{$branch->number}}</p>
                <p style="font-size: 18px;margin: 2px 0;line-height: 25px; color:#5a6a7e">{{$branch->address}}</p>
                <h2
                    style="font-size: 22px;font-weight: 700;border: 2px solid gray;margin-top: 25px;padding: 10px; display: block;font-size: 1.5em;margin-block-start: 0.83em;margin-block-end: 0.83em;  margin-inline-start: 0px; margin-inline-end: 0px;  font-weight: bold;">
                    Admission Form</h2>
            </div>
        </td>

        <td style="width:1.2in; text-align:left;">

            <img src="{{ public_path('AdminAssets/img/user-unknown.jpg') }}" height="120px" width="120px" />

        </td>

    </tr>
</table>

<br>
<table width="100%" cellpadding="0" cellspacing="0" border="0"
    style="border-collapse:collapse;margin-left: 50px; margin-top: 20px; ">
    <tr>
        <td colspan="2">
            <h3
                style="    font-size: 20px;
    font-weight: 600;
    display: inline-block;
    border: 1px solid gray;
    padding: 8px 20px;
    margin-bottom: 20px;
    margin-top: 20px;">
                Academic Information (For office use only)</h3>
        </td>

    </tr>
</table>

<table width="95%" cellpadding="0" cellspacing="0" border="0"
    style="border-collapse:collapse;margin-left: 50px; margin-top: 20px; ">

    <tr style="line-height: 10px">
        <td style="font-size: 16px;width: 120px;text-align: start;">Session</td>
        <td colspan="">
            <p>..................................................</p>
        </td>
        <td style="font-size: 16px;width: 120px;text-align: start;">Medium</td>
        <td colspan="">
            <p style="margin-top: 10px">..................................................</p>
        </td>
    </tr>
    <br>
    <tr>
        <td style="font-size: 16px;width: 120px;text-align: start;">Shift</td>
        <td colspan="">
            <p>..................................................</p>
        </td>
        <td style="font-size: 16px;width: 120px;text-align: start;">Class</td>
        <td colspan="">
            <p>..................................................</p>
        </td>
    </tr>
    <br>
    <tr>
        <td style="font-size: 16px;width: 120px;text-align: start;">Group</td>
        <td colspan="">
            <p>..................................................</p>
        </td>
        <td style="font-size: 16px;width: 120px;text-align: start;">Section</td>
        <td colspan="">
            <p>..................................................</p>
        </td>
    </tr>
    <br>
    <tr>
        <td style="font-size: 16px;width: 120px;text-align: start;">Student ID</td>
        <td colspan="">
            <p>..................................................</p>
        </td>
        <td style="font-size: 16px;width: 120px;text-align: start;">Roll</td>
        <td colspan="">
            <p>..................................................</p>
        </td>
    </tr>
</table>

<table width="100%" cellpadding="0" cellspacing="0" border="0"
    style="border-collapse:collapse;margin-left: 50px; margin-top: 20px; ">
    <tr>
        <td colspan="2">
            <h3
                style="    font-size: 20px;
    font-weight: 600;
    display: inline-block;
    border: 1px solid gray;
    padding: 8px 20px;
    margin-bottom: 20px;
    margin-top: 20px;">
                Personal Information</h3>
        </td>

    </tr>
</table>
<table width="95%" cellpadding="0" cellspacing="0" border="0"
    style="border-collapse:collapse;margin-left: 50px; margin-top: 20px; ">

    <tr style="line-height: 20px">
        <td style="font-size: 16px;width: 120px;text-align: start;">First Name</td>
        <td colspan="">
            <p>..................................................</p>
        </td>
        <td style="font-size: 16px;width: 120px;text-align: start;">Email</td>
        <td colspan="">
            <p>..................................................</p>
        </td>
    </tr>
    <br>
    <tr>
        <td style="font-size: 16px;width: 120px;text-align: start;">Last Name</td>
        <td colspan="">
            <p>..................................................</p>
        </td>
        <td style="font-size: 16px;width: 120px;text-align: start;">Mobile</td>
        <td colspan="">
            <p>..................................................</p>
        </td>
    </tr>
    <br>
    <tr>
        <td style="font-size: 16px;width: 120px;text-align: start;">DOB</td>
        <td colspan="">
            <p>..................................................</p>
        </td>
        <td style="font-size: 16px;width: 120px;text-align: start;">Blood Group</td>
        <td colspan="">
            <p>..................................................</p>
        </td>
    </tr>
    <br>
    <tr>
        <td style="font-size: 16px;width: 120px;text-align: start;">BR No</td>
        <td colspan="">
            <p>..................................................</p>
        </td>
        <td style="font-size: 16px;width: 120px;text-align: start;">Religion</td>
        <td colspan="">
            <p>..................................................</p>
        </td>
    </tr>
    <br>
    <tr style="line-height: 30px">
        <td style="font-size: 16px; width:120px; text-align: start;">Gender</td>

        <td colspan="">
            <p><input type="checkbox" name="" id="check">Male
                <input type="checkbox" name="" id="check">Female
            </p>
        </td>

        <td style="font-size: 16px; width: 120px;text-align:start;">Nationality</td>
        <td colspan="">
            <p>..................................................</p>
        </td>
    </tr>
</table>

<table width="100%" cellpadding="0" cellspacing="0" border="0"
    style="border-collapse:collapse;margin-left: 50px; margin-top: 20px; ">
    <tr>
        <td colspan="2">
            <h3
                style="    font-size: 20px;
    font-weight: 600;
    display: inline-block;
    border: 1px solid gray;
    padding: 8px 20px;
    margin-bottom: 20px;
    margin-top: 20px;">
                Parents Information</h3>
        </td>

    </tr>
</table>

<table width="95%" cellpadding="0" cellspacing="0" border="0"
    style="border-collapse:collapse;margin-left: 50px; margin-top: 20px; ">

    <tr style="line-height: 20px">
        <td style="font-size: 16px;width: 120px;text-align: start; line-height: 20px">Father's Name</td>
        <td colspan="" style="line-height: 20px">
            <p>..................................................</p>
        </td>
        <td style="font-size: 16px;width: 120px;text-align: start;line-height: 20px">Mother's Name</td>
        <td colspan="" style="line-height: 20px">
            <p>..................................................</p>
        </td>
    </tr>
    <br>
    <tr style="line-height: 20px">
        <td style="font-size: 16px;width: 120px;text-align: start;">Father's NID</td>
        <td colspan="">
            <p>..................................................</p>
        </td>
        <td style="font-size: 16px;width: 120px;text-align: start;">Mother's NID</td>
        <td colspan="">
            <p>..................................................</p>
        </td>
    </tr>
    <br>
    <br>
    <tr style="line-height: 20px">
        <td style="font-size: 16px;width: 120px;text-align: start;">Father's Phone</td>
        <td colspan="">
            <p>..................................................</p>
        </td>
        <td style="font-size: 16px;width: 120px;text-align: start;">Mother's Phone</td>
        <td colspan="">
            <p>..................................................</p>
        </td>
    </tr>
    <br>

</table>

<table width="100%" cellpadding="0" cellspacing="0" border="0"
    style="border-collapse:collapse;margin-left: 50px; margin-top: 20px; ">
    <tr>
        <td colspan="2">
            <h3
                style="    font-size: 20px;
    font-weight: 600;
    display: inline-block;
    border: 1px solid gray;
    padding: 8px 20px;
    margin-bottom: 20px;
    margin-top: 20px;">
                Guardian Information</h3>
        </td>

    </tr>
</table>

<table width="95%" cellpadding="0" cellspacing="0" border="0"
    style="border-collapse:collapse;margin-left: 50px; margin-top: 20px; ">

    <tr style="line-height: 10px">
        <td style="font-size: 16px;width: 120px;text-align: start; line-height: 20px">Gaurdian's Name</td>
        <td colspan="" style="line-height: 20px">
            <p>..................................................</p>
        </td>
        <td style="font-size: 16px;width: 120px;text-align: start;line-height: 20px">Guardian Phone</td>
        <td colspan="" style="line-height: 20px">
            <p>..................................................</p>
        </td>
    </tr>
    <br>
    <tr style="line-height: 10px">
        <td style="font-size: 16px;width: 120px;text-align: start;">Relation With Student</td>
        <td colspan="">
            <p>..................................................</p>
        </td>
    </tr>
    <br>

</table>

<table width="100%" cellpadding="0" cellspacing="0" border="0"
    style="border-collapse:collapse;margin-left: 50px; margin-top: 20px; ">
    <tr>
        <td colspan="2">
            <h3
                style="    font-size: 20px;
    font-weight: 600;
    display: inline-block;
    border: 1px solid gray;
    padding: 8px 20px;
    margin-bottom: 20px;
    margin-top: 20px;">
                Contact Information</h3>
        </td>

    </tr>
</table>

<table width="95%" cellpadding="0" cellspacing="0" border="0"
    style="border-collapse:collapse;margin-left: 50px; margin-top: 20px; ">

    <tr style="line-height: 20px">
        <td style="font-size: 16px;width: 120px;text-align: start; line-height: 20px">Present Address</td>
        <td colspan="" style="line-height: 20px">
            <p>..................................................</p>
        </td>
        <td style="font-size: 16px;width: 120px;text-align: start;line-height: 20px">Permanant Address</td>
        <td colspan="" style="line-height: 20px">
            <p>..................................................</p>
        </td>
    </tr>
    <br>
    <br>

</table>

<br>
<br>
<table width="100%" cellpadding="0" cellspacing="0" border="0"
    style="border-collapse:collapse;margin-left: 50px; margin-top: 20px; ">

    <tr>
        <td style="text-align: center;">
            <span style="border-top: 1px solid">Signature of Student</span>
        </td>
        <td style="text-align: center;">
            <span style="border-top: 1px solid">Signature of Guardian</span>
        </td>
        <td style="text-align: center;">
            <span style="border-top: 1px solid">Signature of Teacher</span>
        </td>
    </tr>

</table>

</body>
</html>
