@extends('layouts.AdminPanal')
@section('content')
<div class="u-body">
  <section class="es-form-area">
    <div class="card">
        <header class="card-header bg-gradient border-0 pt-5 pb-5 d-flex align-items-center">
            <h2 class="text-white mb-0">Add Exam Part</h2>
        </header>
        <div class="branch_edit">
            <form action="{{ route('insertpart') }}" method="POST">
                @csrf
                        @if ($errors->any())
                            @foreach ($errors->all() as $error)
                                <p style="color:red;">{{$error}}</p>
                            @endforeach
                        @endif
                <div class="row">

                    <div class="col-md-10 mb-3">
                        <label for="">Name <span>*</span></label>
                        <input type="text" name="name" value="{{ old('name') }}" id="">
                    </div>

                    <div class="col-md-10 mb-3">
                        <label for="">Rank <span>*</span></label>
                        <input type="text" name="rank" value="{{ old('rank') }}" id="">
                    </div>

                    <div class="col-md-10 mb-3">
                        <label for="">Status <span>*</span></label>
                        <select name="status" id="">
                            <option value="active">Active</option>
                            <option value="inactive">Inactive</option>
                        </select>
                    </div>

                    <div class="col-md-10 mt-4 mb-3">
                        <p>
                        <button type="submit" class="btn bg-gradient border-0 text-white">Create</button>    
                        </p>
                    </div>

                </div>
            </form>
        </div>
    </div>    
</section>
</div>
@endsection