<!DOCTYPE html>
<html lang="en" class="no-js">
<!-- Head -->

<head>
    <style>
        .testomonial{
            background-image:url('AdminAssets/img/testimonial.png');
            background-size: cover ;
            background-position: center;
            margin-top: 65px;
            margin-left: -40px;
            margin-right: -40px;
            background-repeat: no-repeat;
        }
    </style>
</head>
<!-- End Head -->


<body>

    <div class="testomonial">

  <div class="testomonialBox" style="padding: 20px 140px;">

        <div class="testomonialTop" style="text-align: center; line-height: 15px">

            <h1 style="font-size: 50px;font-weight: 400;color: darkblue;">Learning Campus</h1>
            <p style="font-size: 16px;margin: 5px 0;">Uttara, Uttarkhan Dhaka 1230</p>
            <p style="font-size: 16px;margin: 5px 0;">Phone : 01234567890</p>
            <p style="font-size: 16px;margin: 5px 0;">Email : learningcampus@gmail.com</p>
            <h2><span style="border-bottom: 2px solid black;">Testomonial</span> </h2>
        </div>

      <div class="testomonialText" style="margin-top: 50px">

          <p>
           <i>
               This is certify that <b>{{$student_name}}</b>  son/daughter of <b>{{$father_name}}</b>  and <b>{{$mother_name}}</b> , a student of this institute bearing Roll No <b>{{$roll_no}}</b> passed the annual examination of class <b>{{ $class_name }}</b>  in <b>{{ $session_name }}</b>  and secured <b>G.P.A 4.50</b>  on scale of 5.00. His/her date of birth <b>{{$birth_date}}</b> as recorded in his/her Registration Book is 11-Aug-2020 .
               To the best of my knowledge and belief he/she is a good student. During this study period he/she did not take part in any activities subversive of the state or discipline.
           </i>
          </p>
          <p>
            <i>I wish him/her every success in his/her life.</i>
          </p>

            <h6 style="margin-bottom:60px; margin-top: -80px;">
              <p style="margin: 0; display: inline; text-align:left; padding-right:100px;padding-left:200px;">Date</p>
              <p style="margin: 0; display: inline;margin-bottom:60px;padding-bottom:20px;">Signature of principal</p>
          </h6>

      </div>
  </div>

</div>

</body>

</html>

