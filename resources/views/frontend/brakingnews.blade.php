@extends('layouts.Frontend')
@section('frontend')
<div class="container">
      <div class="row">
           <div class="col-lg-10">
            @foreach (App\Models\Brakingnews::latest('created_at')->get() as $aboutcontent)
            <div class="contetn m-3">
                <h1>{{$aboutcontent->title}}</h1>
                <p class="m-2">
                   {!!$aboutcontent->details!!}
                </p>
            </div>
            @endforeach
           </div>
      </div>
</div>
@endsection
