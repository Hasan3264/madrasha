@extends('layouts.AdminPanal')
@section('content')
<div class="u-body">
    <section class="es-form-area">
        <div class="card">
            <header class="card-header bg-gradient border-0 pt-5 pb-5 d-flex align-items-center">
                <h2 class="text-white mb-0">Update Exam Terms</h2>
            </header>
            <div class="session_add">
              <form action="{{ route('updateexamterms',$editexam->id) }}" method="POST">
                @csrf
                    @if ($errors->any())
                      @foreach ($errors->all() as $error)
                          <p style="color:red;">{{$error}}</p>
                      @endforeach
                    @endif
                <div class="row">
                    <div class="col-md-10 mb-3">
                        <label for="">Term Name <span>*</span></label>
                        <input type="text" placeholder=""  name="term_name" value="{{ old('term_name',$editexam->term_name) }}" id="">
                    </div>
    
                    <div class="col-md-10 mb-3">
                        <label for="">Rank  <span>*</span></label>
                        <input type="text" placeholder=" "  name="rank" value="{{ old('rank',$editexam->rank) }}" id="">
                    </div>
    
    
                    <div class="col-md-10 mb-3">
                        <label for="">Related to Final Term ? <span>*</span></label>
                       <p class="rad_text">
                          <input type="radio"  @if($editexam->related_to_final == 'yes') checked @endif  placeholder="Education" name="related_to_final" value="yes" id="check"> 
                          <b>Yes</b> 
                        </p> &nbsp; &nbsp; 
                        <p class="rad_text">
                            <input type="radio"  @if($editexam->related_to_final == 'no') checked @endif  placeholder="Education" name="related_to_final" value="no" id="check"> 
                            <b>No</b> 
                          </p> 
                     </div>
    
                     <div class="col-md-10 mb-3">
                        <label for="">CFinal Term ?<span>*</span></label>
                       <p class="rad_text">
                          <input type="radio" @if($editexam->related_to_final == 'yes') checked @endif placeholder="Education" name="cfinal_term" value="yes" id="check"> 
                          <b>Yes</b> 
                        </p> &nbsp; &nbsp; 
                        <p class="rad_text">
                            <input type="radio" @if($editexam->related_to_final == 'no') checked @endif placeholder="Education" name="cfinal_term" value="no" id="check"> 
                            <b>No</b> 
                          </p> 
                     </div>
    
                     <div class="col-md-10 mb-3">
                        <label for="">Admit Card With Routine ?<span>*</span></label>
                       <p class="rad_text">
                          <input type="radio" @if($editexam->admit_routine == 'yes') checked @endif  placeholder="Education" name="admit_routine" value="yes" id="check"> 
                          <b>Yes</b> 
                        </p> &nbsp; &nbsp; 
                        <p class="rad_text">
                            <input type="radio" @if($editexam->admit_routine == 'no') checked @endif  placeholder="Education" name="admit_routine" value="no" id="check"> 
                            <b>No</b> 
                          </p>
                     </div>
    
                     <div class="col-md-10 mb-3">
                        <label for="">Admit Card Instruction <span>*</span></label>
                        <textarea name="admitcard_instruction" id="contents" cols="30" rows="10">{{ old('admitcard_instruction',$editexam->admitcard_instruction) }}</textarea>
                     </div>
    
                     <div class="col-md-10 mb-3">
                        <label for="">Exam Routine With Instruction ? ?<span>*</span></label>
                       <p class="rad_text">
                          <input type="radio" @if($editexam->admit_routine == 'no') checked @endif placeholder="Education" name="routine_instruction" value="yes" id="check"> 
                          <b>Yes</b> 
                        </p> &nbsp; &nbsp; 
                        <p class="rad_text">
                            <input type="radio" @if($editexam->admit_routine == 'no') checked @endif placeholder="Education" name="routine_instruction" value="no" id="check"> 
                            <b>No</b> 
                          </p>
                     </div>
                     <div class="col-md-10 mb-3">
                        <label for="">Website Result Publish ?<span>*</span></label>
                       <p class="rad_text">
                          <input type="radio" @if($editexam->result_publish == 'yes') checked @endif placeholder="Education" name="result_publish" value="yes" id="check"> 
                          <b>Yes</b> 
                        </p> &nbsp; &nbsp; 
                        <p class="rad_text">
                            <input type="radio" @if($editexam->result_publish == 'no') checked @endif placeholder="Education" name="result_publish" value="no" id="check"> 
                            <b>No</b> 
                          </p>
                     </div>
    
                     <div class="col-md-10 mb-3">
                        <label for="">Status <span>*</span></label>
                        <select name="status" id="">
                            <option value="active" @if($editexam->status == 'active') selected @endif>Active</option>
                            <option value="inactive" @if($editexam->status == 'inactive') selected @endif>Inactive</option>
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