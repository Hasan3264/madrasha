@extends('layouts.Frontend')
@section('frontend_style')
<style>
    h2 {
        text-align: center;
        color: #333;
    }

    label {
        display: block;
        margin-bottom: 5px;
        color: #555;
    }

    input[type="text"],
    input[type="email"],
    input[type="number"],
    select,
    textarea {
        width: 100% !important;
        padding: 10px;
        margin-bottom: 15px;
        border: 1px solid #ccc;
        border-radius: 5px;
    }

    input[type="submit"] {
        background-color: #007BFF;
        color: #fff;
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }

    input[type="submit"]:hover {
        background-color: #0056b3;
    }

</style>
@endsection
@section('frontend')
@if(session('success'))
<div class="alert alert-success">
    {{ session('success') }}
</div>
@endif
<div class="container mb-5">
    <h2>Admission Application Form</h2>
    <form action="{{route('apply')}}" method="POST" style="width: 60%;" class="m-auto" action="#" method="post">
        @csrf
        <label for="full_name">Full Name:</label>
        <input type="text" id="full_name" name="name" required>
        @error('name')
        <strong class="text-danger">{{$message}}</strong>
        @enderror

        <label for="number">Phone Number:</label>
        <input type="text" id="number" name="number" required>

        @error('number')
        <strong class="text-danger">{{$message}}</strong>
        @enderror

        <label for="email">Address:</label>
        <input type="text" id="email" name="address" required>
        @error('address')
        <strong class="text-danger">{{$message}}</strong>
        @enderror

        <div class="form-group">
            <label for="program">Program of Interest:</label>
            <select style="display: block" id="program" name="class">
                <option value="play">play</option>
                <option value="Kg">Kg</option>
                <option value="One">One</option>
                <option value="Two">Two</option>
                <option value="Three">Three</option>
                <option value="Four">Four</option>
                <option value="Five">Five</option>
                <option value="Six">Six</option>
                <option value="Seven">Seven</option>
                <option value="Eight">Eight</option>
                <option value="Nine">Nine</option>
                <option value="Elaven">Elaven</option>
                <!-- Add more options here -->
            </select>
            @error('class')
            <strong class="text-danger">{{$message}}</strong>
            @enderror

        </div>

        <div class="form-group">
            <button type="submit" class="btn ml-100 mt-10">Submit</button>
        </div>
    </form>
</div>

@endsection
@section('frontend_scrift')

@endsection
