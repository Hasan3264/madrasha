@extends('layouts.AdminPanal')
@section('content')
<div class="u-body">
    <section class="es-form-area">
        <div class="card">
            <header class="card-header bg-gradient border-0 pt-5 pb-5 d-flex align-items-center">
                <h2 class="text-white mb-0">Edit Assign Exam</h2>
            </header>
            <div class="session_add">

                <form action="{{ route('updateassign',$examassign->id) }}" method="POST">
                    @csrf
                        @if ($errors->any())
                            @foreach ($errors->all() as $error)
                                <p style="color:red;">{{$error}}</p>
                            @endforeach
                        @endif
                    <div class="row">
                        
                    
                        <div class="col-md-10 mb-3">
                            <label for="">Exam Term <span>*</span></label>
                            <select name="exam_terms" id="">
                                <option value="">Select Exam Term</option>
                                    @foreach ($examterm as $examt)
                                    <option value="{{ $examt->id }}" @if($examt->id == $examassign->exam_terms ) selected @endif>{{ $examt->term_name }}</option>
                                    @endforeach
                                
                            </select>
                        </div>
        
                        <div class="col-md-10 mb-3">
                            <label for="">Exam Part <span>*</span></label>
                            <select name="exam_part" id="">
                                <option value="">Select Exam Part</option>
                                    @foreach ($exampart as $examt)
                                    <option value="{{ $examt->id }}" @if($examt->id == $examassign->exam_part ) selected @endif>{{ $examt->name }}</option>
                                    @endforeach
                            </select>
                        </div>
        
                        <div class="col-md-10 mb-3">
                            <label for="">Individual Pass ? <span>*</span></label>
                        <p class="rad_text">
                            <input type="radio" placeholder="Education" @if($examassign->individual_part == 'yes') checked @endif value="yes" name="individual_part" id="check"> 
                            <b>Yes</b> 
                            </p> &nbsp; &nbsp; 
                            <p class="rad_text">
                                <input type="radio" placeholder="Education" @if($examassign->individual_part == 'no') checked @endif value="no" name="individual_part" id="check"> 
                                <b>No</b> 
                            </p> 
                        </div>
        
                        <div class="col-md-10 mb-3">
                            <label for="">Consider Fail on Absent ?<span>*</span></label>
                        <p class="rad_text">
                            <input type="radio" placeholder="Education" @if($examassign->absent == 'yes') checked @endif value="yes" name="absent" id="check"> 
                            <b>Yes</b> 
                            </p> &nbsp; &nbsp; 
                            <p class="rad_text">
                                <input type="radio" placeholder="Education" @if($examassign->absent == 'no') checked @endif value="no" name="absent" id="check"> 
                                <b>No</b> 
                            </p> 
                        </div>

                        <div class="col-md-10 mb-3">
                            <label for="">Marks for Term (%) <span>*</span></label>
                            <input type="text" name="marks_term" value="{{ $examassign->marks_term }}" id="">
                        </div>
        
        
                        <div class="col-md-10 mb-3">
                            <label for="">Class <span>*</span></label>
                            <select name="class" id="">
                                <option value="">Select Class</option>
                                    @foreach ($classname as $examt)
                                     <option value="{{ $examt->id }}" @if($examt->id == $examassign->class ) selected @endif>{{ $examt->class_name }}</option>
                                    @endforeach
                            </select> 
                        </div>
        
                        <div class="col-md-10 mt-4 mb-3">
                            <p>
                            <button class="btn bg-gradient border-0 text-white">Update</button>          
                            </p>
                        </div>
        
                        </div>
                    </div>
                </form> 
        </div>    
    </section>
    
</div>
@endsection