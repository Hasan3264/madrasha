@extends('layouts.Frontend')
@section('frontend')
<div class="container">
      <div class="row">
           <div class="col-lg-10">
            @foreach (App\Models\aboutcontent::latest('created_at')->get() as $aboutcontent)
            <div class="contetn m-3">
                <h1>{{$aboutcontent->manu}}</h1>
                <p>
                   {!!$aboutcontent->content!!}
                </p>
            </div>
            @endforeach

           </div>
      </div>
</div>
@endsection
