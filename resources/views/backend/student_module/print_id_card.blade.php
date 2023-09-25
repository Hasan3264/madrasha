<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Id Card</title>
    <style>
        *, ::after, ::before {
            box-sizing: border-box;
        }
        body {
            margin: 0;
            font-family: var(--bs-font-sans-serif);
            font-size: 1rem;
            font-weight: 400;
            line-height: 1.5;
            color: #212529;
            background-color: #fff;
            -webkit-text-size-adjust: 100%;
            -webkit-tap-highlight-color: transparent;
        }

        .text-center {
            text-align: center!important;
        }

        .studentId {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            width: 100%;
        }
        .idBox {
            padding: 20px;
            border-radius: 10px;
            width: 800px;
            height: 500px;
            display: inline-flex;
            justify-content: space-between;
            background-color: #fff;
        }
        .leftBox {
            background-color: white;
            border: 1px solid black;
            width: 50%;
            padding: 15px;
            border-radius: 10px;
            margin-right: 4px;
        }
        div {
            display: block;
        }
        .leftBoxTop {
            display: flex;
            justify-content: space-between;
            margin-top: 10px;
            margin: 10px;
            margin-bottom: 10px;
        }
        .leftBoxTop img {
            height: 120px;
            width: 120px;
            margin-left: 50px;
            transform: scale(1.1);
        }
        img, svg {
            vertical-align: middle;
        }
        img {
            overflow-clip-margin: content-box;
            overflow: clip;
        }
        .leftBox h3 {
            font-size: 28px;
            font-weight: 700;
            margin-top: 20px;
        }
        .h1, .h2, .h3, .h4, .h5, .h6, h1, h2, h3, h4, h5, h6 {
            margin-top: 0;
            margin-bottom: 0.5rem;
            font-weight: 500;
            line-height: 1.2;
        }
        .leftBox p {
            font-size: 20px;
            font-weight: 600;
            margin: 1px 0;
        }
        .leftBox h5 {
            background-color:#FFAA33;
            color: white;
            padding: 5px;
            font-size: 20px;
        }
        .leftBox h6 {
            margin-top: 80px;
            font-size: 18px;
            font-weight: 700;
        }
        .leftBox h6 span {
            border-top: 1px dashed black;
        }
        .rightBox {
            text-align: center;
            background-color: white;
            border: 1px solid black;
            width: 50%;
            padding: 15px;
            border-radius: 10px;
        }
        .rightBox h6 {
            font-size: 17px;
            font-weight: 500;
            margin: 10px 0;
        }

        .rightBox h5 {
            font-size: 15px;
            font-weight: 500;
        }
        .rightBox h3 {
            font-size: 20px;
            font-weight: 700;
        }
        .rightBox p {
            font-size: 16px;
            margin: 4px 0;
            font-weight: 600;
            line-height: 20px;
        }
        .rightBox h4 {
            font-size: 20px;
            margin: 4px 0;
            color: red;
        }
        .text-end {
            text-align: right!important;
        }
    </style>
</head>
<body>
<div class="studentId">
    <div class="idBox">

        <div class="leftBox">
            <div class="leftBoxTop">
                <img src="{{ public_path('AdminAssets/img/logo/logo.png') }}" alt="">
                <img src="{{ public_path($student_photo)?public_path($student_photo):public_path('AdminAssets/img/logo/student.png') }}" alt="">
            </div>
            <div class="text-center">
                <h3>{{ $student_name }}</h3>
                <p>Id : {{$student_id}} </p>
                <h5>Learning Campus Main Branch</h5>
            </div>
            <h6 class="text-end"><span>Signature of Principal</span></h6>
        </div>

        <div class="rightBox">
            <h6>The Card is the property of <br> Learning Campus Main Branch</h6>
            <h4>Valid Up : {{$validity_date}}</h4>
            <div class="leftBoxTop">
                <img src="{{ public_path('AdminAssets/img/logo/logo.png') }}" alt="">
                <img src="{{ public_path('AdminAssets/img/logo/logo.png') }}" alt="">
            </div>
            <h5>In case of lost please return it to</h5>
            <h3>Learning Campus Main Branch</h3>
            <p>Mirpur, Dhaka</p>
            <p>Phone : 0123456789</p>
            <p>Web : learningcampus.com</p>
        </div>

    </div>
</div>
</body>
</html>


