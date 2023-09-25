@extends('layouts.AdminPanal')
@section('content')
<div class="u-body">
    @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif
    <!-- breadcumb-area -->
    <section class="breadcumb-area card bg-gradient mb-5">
        <div class="bread-cumb-content card-body d-flex align-items-center">
            <div class="breadcumb-heading">
                <h2 class="text-white">Dashboard</h2>
            </div>
            <div class="breadcumb-image ml-auto">
                <img src="AdminAssets/img/breadcumb-dashboard.png" alt="">
            </div>
        </div>
    </section>
    <!-- End breadcumb-area -->

    <!-- highlight-area start -->
    <div class="row mb-5">
        <div class="col-lg-3 col-md-6">
            <div class="single-asset-counting-list-box bg-gradient bg-gradient-purple card border-0 text-center">
                <div class="card-body">
                    <div class="single-asset-counting-list-image-wrap">
                        <img src="AdminAssets/img/student.png" alt="">
                    </div>
                    @foreach ($all as $one)@endforeach
                    <h2 class="text-white mb-0">{{$one->student}} <small class="d-block mt-2">Students</small></h2>
                </div>
            </div>
        </div>

        <div class="col-lg-3 col-md-6">
            <div class="single-asset-counting-list-box bg-gradient bg-gradient-blue card border-0 text-center">
                <div class="card-body">
                    <div class="single-asset-counting-list-image-wrap">
                        <img src="AdminAssets/img/teacher.png" alt="">
                    </div>
                    <h2 class="text-white mb-0">{{$one->teacher}}<small class="d-block mt-2">Teachers</small></h2>
                </div>
            </div>
        </div>



        <div class="col-lg-3 col-md-6">
            <div class="single-asset-counting-list-box bg-gradient bg-gradient-yellow card border-0 text-center">
                <div class="card-body">
                    <div class="single-asset-counting-list-image-wrap">
                        <img src="AdminAssets/img/staff.png" alt="">
                    </div>
                    <h2 class="text-white mb-0">{{$one->staff}} <small class="d-block mt-2">Staff</small></h2>
                </div>
            </div>
        </div>
    </div>
    <!---- student admission ----->
    <div class="student mb-4 table-responsive">
        <h4>
            <span>
                <i class="fa-solid fa-earth-africa mr-2"></i>Student admission pending
            </span>
        </h4>

        <table class="table table-bordered mt-3 text-center academic_table">
            <thead class="table-bordered">
                <tr>
                    <th scope="col">Srl</th>
                    <th scope="col">Name</th>
                    <th scope="col">Number</th>
                    <th scope="col">Address</th>
                    <th scope="col">Class</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($admittionPanding as $Panding)
                <tr>
                    <th scope="row">{{$Panding->id}}</th>
                    <td>{{$Panding->name}}</td>
                    <td>{{$Panding->number}}</td>
                    <td>{{$Panding->address}}</td>
                    <td>{{$Panding->class}}</td>
                    <td>
                        <a href="{{route('applay.delete', ['id' => $Panding->id])}}"
                            onclick="return confirm('Sure want to Delete?')"><i
                                class="fa-solid fa-trash"></i></a>&nbsp &nbsp
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
     <div class="row">
          <div class="col-lg-12 branch_edit">

              <form action="{{route('input.sts')}}" method="POST">
                @csrf
                  <div class="form-group">
                       <label for="">Input Student</label>
                       <input type="number" name="student">
                  </div>
                  <div class="form-group">
                       <label for="">Input Teacher</label>
                       <input type="number" name="teacher">
                  </div>
                  <div class="form-group">
                       <label for="">Input Staff</label>
                       <input type="number" name="staff">
                  </div>
                  <div class="form-group">
                       <button type="submit" class="btn">Submit</button>
                  </div>

              </form>
          </div>
     </div>

    @endsection
