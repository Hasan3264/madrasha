<!DOCTYPE html>
<html>
<head>
    <title>Student Information</title>
    <style>
        body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
}

h1 {
    text-align: center;
    margin: 20px 0;
}

table {
    width: 100%;
    border-collapse: collapse;
}

th, td {
    padding: 10px;
    text-align: left;
}

th {
    background-color: #f2f2f2;
}

tr:nth-child(even) {
    background-color: #f9f9f9;
}

    </style>
</head>
<body>
    <h1>Student Information</h1>

    <table>
        <thead>
            <tr style="font-size: 8px;">
               <th>Sl</th>
                <th>Student Name</th>
                <th>Blood Group</th>
                <th>Birth Date</th>
                <th>Nationality</th>
                <th>Gender</th>
                <th>Student Phone</th>
                <th>Student Email</th>
                <th>Present Address</th>
                <th>Father Name</th>
                <th>Father Phone</th>
                <th>Mother Name</th>
                <th>Mother Phone</th>
            </tr>
        </thead>
        <tbody>
            @foreach($all_student as $key=>$item)
                <tr style="font-size: 8px;">
                    <td>{{$key+=1}}</td>
                    <td>{{$item->student_name_en}}</td>
                    <td>{{$item->blood_group}}</td>
                    <td>{{$item->birth_date}}</td>
                    <td>{{$item->nationality}}</td>
                    <td>{{$item->gender}}</td>
                    <td>{{$item->phone}}</td>
                    <td>{{$item->email}}</td>
                    <td>{{$item->present_address}}</td>
                    <td>{{$item->father_name}}</td>
                    <td>{{$item->father_phone}}</td>
                    <td>{{$item->mother_name}}</td>
                    <td>{{$item->mother_phone}}</td>

                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
