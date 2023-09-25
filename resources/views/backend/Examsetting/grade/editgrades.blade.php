@extends('layouts.AdminPanal')
@section('content')
<div class="u-body">
    
<section class="es-form-area">
    <div class="card">
        <header class="card-header bg-gradient border-0 pt-5 pb-5 d-flex align-items-center">
            <h2 class="text-white mb-0">Update Exam Grade</h2>
        </header>
        <div class="branch_edit">
        <form action="{{ route('updategrade',$grade->id) }}" method="POST">
            @csrf
                            @if ($errors->any())
                                @foreach ($errors->all() as $error)
                                    <p style="color:red;">{{$error}}</p>
                                @endforeach
                            @endif
            <div class="row">
                <div class="col-md-10 mb-3">
                    <label for="">Classes <span>*</span></label>
                     <select name="class_name" id="">
                        <option value="">All</option>
                            @foreach ($classname as $key=>$name)
                             <option value="{{ $name->id }}" @if($name->id == $grade->class_name) selected @endif  class="bold_text">{{ $name->class_name }}</option>
                            @endforeach
                      </select>
                 </div>

                 <div class="col-md-10 mb-3">
                    <label for="">Start Marks <span>*</span></label>
                    <input type="text" value="{{ old('start_mark',$grade->start_mark) }}" name="start_mark" id="">
                 </div>

                 <div class="col-md-10 mb-3">
                    <label for="">End Marks <span>*</span></label>
                    <input type="text" value="{{ old('end_mark',$grade->end_mark) }}" name="end_mark" id="">
                 </div>

                 <div class="col-md-10 mb-3">
                    <label for="">Grade Letter <span>*</span></label>
                    <input type="text" value="{{ old('grade_latter',$grade->grade_latter) }}" name="grade_latter" id="">
                 </div>

                 <div class="col-md-10 mb-3">
                    <label for="">Grade Point <span>*</span></label>
                    <input type="text" value="{{ old('grade_point',$grade->grade_point) }}" name="grade_point" id="">
                 </div>

                 <div class="col-md-10 mb-3">
                    <label for="">Remarks<span>*</span></label>
                    <input type="text" value="{{ old('remarks',$grade->remarks) }}" name="remarks" id="">
                 </div>

                <div class="col-md-10 mb-3">
                    <label for="">Status <span>*</span></label>
                     <select name="status" id="">
                         <option value="active" @if(old('status',$grade->status) == 'active') selected @endif>Active</option>
                         <option value="inactive" @if(old('status',$grade->status) == 'inactive') selected @endif>Inactive</option>
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