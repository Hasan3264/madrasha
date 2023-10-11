@extends('layouts.Frontend')
@section('frontend')
<div class="container">
      <div class="row">
           <div class="col-lg-10">
            @foreach (App\Models\examroutine::latest('created_at')->get() as $aboutcontent)
            <div class="contetn m-3">
                <h1>{{$aboutcontent->title}}</h1>
                {{-- <form action="{{ route('download.notice',$aboutcontent->id) }}" method="GET">
                    @csrf
                    <div class="d-flex justify-content-between mt-4 mb-5">
                        <button type="submit" class="main-btn">Notice Download</button>
                    </div>
                </form> --}}
                <a href="{{ asset('/uploads/website/examRoutine/' . $aboutcontent->file) }}" download>Routine Download</a>

                <p class="m-2">
                   {!!$aboutcontent->description!!}
                </p>
            </div>
            @endforeach
           </div>
      </div>
</div>
@endsection
