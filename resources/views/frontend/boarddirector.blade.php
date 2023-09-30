@extends('layouts.Frontend')
@section('frontend')
<div class="container">
        <div class="teachers mt-20">
            <div class="row d-flex">
                @foreach (App\Models\Gallarymanag::latest()->get() as $directosr)
                <div class="col-lg-3">
                    <div class="singel-teachers mt-30 text-center">
                        <div class="image">
                            <img src="{{asset('/uploads/website/gallerymanage/')}}/{{$directosr->file}}" alt="Teachers">
                        </div>
                        <div class="cont">
                            <a href="teachers-singel.html">
                                <h6>{{$directosr->name}}</h6>
                            </a>
                            <span>{{$directosr->caption}}</span>
                        </div>
                    </div> <!-- singel teachers -->
                </div>
                @endforeach
            </div> <!-- row -->
        </div>
</div>
@endsection
