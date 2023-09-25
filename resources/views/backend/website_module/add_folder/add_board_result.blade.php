@extends('layouts.AdminPanal')
@section('content')
<div class="u-content">
    <div class="u-body">

        <section class="es-form-area">
            <div class="card">
                <header class="card-header bg-gradient border-0 pt-5 pb-5 d-flex align-items-center">
                    <h2 class="text-white mb-0">Add Board Result</h2>
                </header>
                <div class="session_add">
                    <form action="{{route('input.bresult')}}" method="POST">
                        @csrf
                        <div class="row">

                            <div class="col-md-10 mb-3">
                                <label for="">Exam Type <span>*</span></label>
                                <input type="text" name="exam_type">
                                @error('exam_type')
                                <strong class="text-danger">{{$message}}</strong>
                                @enderror
                            </div>

                            <div class="col-md-10 mb-3">
                                <label for="">Year <span>*</span></label>
                                <input type="text" name="year" id=""><br>
                                @error('year')
                                <strong class="text-danger">{{$message}}</strong>
                                @enderror
                            </div>

                            <div class="col-md-10 mb-3">
                                <label for="">Total Student <span>*</span></label>
                                <input type="number" name="t_student" id="total"><br>
                                @error('t_student')
                                <strong class="text-danger">{{$message}}</strong>
                                @enderror
                            </div>

                            <div class="col-md-10 mb-3">
                                <label for="">Passed <span>*</span></label>
                                <input type="number" name="pass_student" id="pass"><br>
                                @error('pass_student')
                                <strong class="text-danger">{{$message}}</strong>
                                @enderror
                            </div>

                            <div class="col-md-10 mb-3">
                                <label for="">Passed (%) <span>*</span></label>
                                <input type="text" name="passes" id="percentage"><br>
                                @error('passes')
                                <strong class="text-danger">{{$message}}</strong>
                                @enderror
                            </div>

                            <div class="col-md-10 mb-3">
                                <label for="">A+ <span>*</span></label>
                                <input type="text" name="t_plass" id=""><br>
                                @error('t_plass')
                                <strong class="text-danger">{{$message}}</strong>
                                @enderror
                            </div>

                            <div class="col-md-10 mb-3">
                                <label for="">Details </label>
                                <textarea class="ckeditor" id="editor1" name="details"></textarea>
                                @error('details')
                                <strong class="text-danger">{{$message}}</strong>
                                @enderror
                            </div>


                            <div class="col-md-10 mb-3">
                                <label for="">Status <span>*</span></label>
                                <select name="status" id="">
                                    <option value="Active">Active</option>
                                    <option value="Inactive">Inactive</option>
                                </select>
                                @error('status')
                                <strong class="text-danger">{{$message}}</strong>
                                @enderror
                            </div>

                            <div class="col-md-10 mt-4 mb-3">
                                <p>
                                    <button type="submit" class="btn bg-gradient border-0 text-white">Create</button>
                                    <button type="reset" class="btn  cancel_btn border-0 text-white">Cancel</button>
                                </p>
                            </div>

                        </div>
                    </form>
                </div>
            </div>
        </section>

    </div>
</div>
@endsection
@section('fotter_js')
<script>
     $('#total, #pass').on('input', function() {
        var total = parseInt($('#total').val());
        var passed = parseInt($('#pass').val());
        var percentage = (passed / total) * 100;

        if (isNaN(percentage)) {
            $('#percentage').val('');
        } else {
            $('#percentage').val(percentage.toFixed(2) + '%');
        }
    });
</script>
@endsection
