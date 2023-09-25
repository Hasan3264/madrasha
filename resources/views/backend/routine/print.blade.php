@extends('layouts.AdminPanal')
@section('content')
<div class="u-body">
    @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif
    @if(session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif
    <section class="es-form-area">
        <div class="card">
            <header class="card-header bg-gradient border-0 pt-5 pb-5 d-flex align-items-center">
                <h2 class="text-white mb-0">Veiw/Print Routine</h2>
            </header>

            <div class="branch_edit">
                <form action="{{route('routine.view')}}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-md-10 mb-3">
                            <label for="">Medium <span>*</span></label>
                            <select name="medium" id="">
                                <option value="">Select Class</option>
                                @foreach ($allMedium as $medium)
                                <option value="{{$medium->medium_code}}" class="bold_text">{{$medium->medium_name}}
                                </option>
                                @endforeach
                            </select>
                            @error('medium')
                            <div class="error">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col-md-10 mb-3">
                            <label for="">Class <span>*</span></label>
                            <select name="class" id="">
                                <option value="">Select Class</option>
                                @foreach ($allcalsses as $calss)
                                <option value="{{$calss->id}}" class="bold_text">{{$calss->class_name}}</option>
                                @endforeach
                            </select>
                            @error('class')
                            <div class="error">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col-md-10 mb-3">
                            <label for="">Shift <span>*</span></label>
                            <select name="shift" id="">
                                <option value="">Select Shift</option>
                                @foreach ($allShift as $shift)
                                <option value="{{$shift->id}}">{{$shift->shift_name}}</option>
                                @endforeach
                            </select>
                            @error('shift')
                            <div class="error">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-10 mt-4 mb-3">
                            <p>
                                <button type="submit" class="btn bg-gradient border-0 text-white">View Routine</button>
                                <button type="reset" class="btn  cancel_btn border-0 text-white">Cancel</button>
                            </p>
                        </div>

                    </div>
                </form>
            </div>
        </div>
    </section>

</div>

@endsection
