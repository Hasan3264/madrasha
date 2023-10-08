@extends('layouts.Frontend')
@section('frontend')
<div class="container">
        <div class="teachers mt-20">
            <div class="row d-flex">
                @foreach (App\Models\Massagecorner::all() as $teacher)
                <div class="col-lg-3">
                    <div class="singel-teachers mt-30 text-center">
                        <div class="image">
                            <img src="{{asset('uploads/website/masagecorner')}}/{{$teacher->photo}}" alt="Teachers">
                        </div>
                        <div class="cont">
                            <a href="teachers-singel.html">
                                <h6>{{$teacher->name}}</h6>
                            </a>
                            <span>{{$teacher->designation}}</span>
                        </div>
                    </div> <!-- singel teachers -->
                </div>
                @endforeach
            </div> <!-- row -->
        </div>
</div>
@endsection
