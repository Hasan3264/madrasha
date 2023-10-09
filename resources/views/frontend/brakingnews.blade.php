@extends('layouts.Frontend')
@section('frontend')
<div class="container">
      <div class="row">
           <div class="col-lg-10">
            @foreach (App\Models\Brakingnews::latest('created_at')->get() as $aboutcontent)
            <div class="contetn m-3">
                <h1>{{$aboutcontent->title}}</h1>
                <form action="{{ route('print-admission-form') }}" method="post">
                    @csrf
                    <div class="d-flex justify-content-between mt-4 mb-5">
                        <button type="submit" class="main-btn">Form Download</button>
                    </div>
                </form>
                <p class="m-2">
                   {!!$aboutcontent->details!!}
                </p>
            </div>
            @endforeach
           </div>
      </div>
</div>
@endsection
