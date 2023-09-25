@extends('layouts.AdminPanal')
@section('content')
<div class="u-body">

    <section class="es-form-area">
        <div class="card">
            <header class="card-header bg-gradient border-0 pt-5 pb-5 d-flex align-items-center">
                <h2 class="text-white mb-0">Update Medium</h2>
            </header>
            <div class="branch_edit">
                <form action="{{ route('updatemedium',$editmedium->id) }}" method="POST">
                    @csrf
                    
                            @if ($errors->any())
                                @foreach ($errors->all() as $error)
                                    <p style="color:red;">{{$error}}</p>
                                @endforeach
                            @endif
                            <div class="row">
    
                            <div class="col-md-10 mb-3">
                                <label for="">Name <span>*</span></label>
                                <input type="text" placeholder=" " value="{{ old('medium_name',$editmedium->medium_name) }}"  name="medium_name" id="">
                            </div>
            
                            <div class="col-md-10 mb-3">
                                <label for="">Medium Code <span>*</span></label>
                                <input type="text" placeholder=" " value="{{ old('medium_code',$editmedium->medium_code) }}"  name="medium_code" id="">
                            </div>
            
                            <div class="col-md-10 mb-3">
                                <label for="">Status <span>*</span></label>
                                <select name="medium_status" id="">
                                    <option value="active" @if(old('medium_status',$editmedium->medium_status) == 'active') selected @endif>Active</option>
                                    <option value="inactive" @if(old('medium_status',$editmedium->medium_status) == 'inactive') selected @endif>Inactive</option>
                                </select>
                            </div>
            
                            <div class="col-md-10 mt-4 mb-3">
                                <p>
                                <button type="submit" class="btn bg-gradient border-0 text-white">Update</button>         
                                </p>
                            </div>
                            
                        </div>
                    </form>       
            </div>
        </div>    
    </section>
    
        </div>
@endsection
