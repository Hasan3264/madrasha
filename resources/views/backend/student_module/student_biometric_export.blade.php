@extends('layouts.AdminPanal')
@section('content')
<div class="u-body">
    <section class="es-form-area">
        <div class="card">
            <header class="card-header bg-gradient border-0 pt-5 pb-5 d-flex align-items-center">
                <h2 class="text-white mb-0">Student Export for Attendance</h2>
            </header>

            <div class="academic_info">

                <div class="container">

                    <div class="row mt-3 mb-4">
                        <form action="{{ route('student_export') }}" method="post" >
                            @csrf
                        <div class="col-12 col-md-12">
                            <label for="">Device Serial / MAC</label>
                            <select name="device_serial" id="">
                                <option selected disabled>Select Device Serial / MAC</option>
                                  @foreach($all_student as $item)
                                    <option value="{{ $item }}">{{ $item}}</option>
                                  @endforeach
                            </select>
                            <button type="submit" class="export_btn">Export</button>
                            @error('device_serial')
                                   <br>
                                    <span style="color: red; margin-left:150px;"> {{$message}} </span>
                            @enderror
                        </div>

                        </form>
                    </div>


                </div>

            </div>


        </div>
    </section>
    @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif
</div>
@endsection
