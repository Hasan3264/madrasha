<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="{{public_path('AdminAssets/css/style.css')}}">

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Id</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>

    <div class="studentId">
        <div class="idBox employee_idBox">

            <div class="leftBox">
                <h4 class="text-center"><span>Identy Card</span> </h4>
                <div class="leftBoxTop">
                    <img  src="{{public_path('AdminAssets/Logo _ Icon/logo.png')}}" alt="">
                    <img style="margin-top: 10px;" src="{{public_path("$personal_infos->photo")}}" alt="">
                </div>
                <div class="text-center">
                    <h3>{{$personal_infos->name}}</h3>
                    <p>{{$designation->title}}</p>
                    <p>Id : {{$personal_infos->emp_id}} </p>
                    <p>Blood Group: {{$personal_infos->blood_group}} </p>
                    <h5>Learning Campus Main Branch</h5>
                </div>
                <h6 class="text-end"><span>Signature of Principal</span></h6>
            </div>

            <div class="rightBox">
                <h3>Personal Information</h3>
                <h4>Contact : {{$personal_infos->mobile}}</h4>
                <h5>Permanant Address : {{$personal_infos->permanent_address}}</h5>
                <img src="{{public_path('AdminAssets/Logo _ Icon/logo.png')}}" alt="">
                <h5>In case of lost please return it to</h5>
                <h3>Learning Campus Main Branch</h3>
                <p>Mirpur, Dhaka</p>
                <p>Phone : 0123456789</p>
                <p>Web : learningcampus.com</p>
            </div>

        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>