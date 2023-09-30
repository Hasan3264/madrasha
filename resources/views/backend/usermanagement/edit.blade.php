@extends('layouts.AdminPanal')
@section('content')
<div class="u-body">
    <section class="es-form-area">
        <div class="card">
            <header class="card-header bg-gradient border-0 pt-5 pb-5 d-flex align-items-center">
                <h2 class="text-white mb-0">Edit User</h2>
            </header>
            <div class="card-body">
                <form name="InsertSubForm" id="InsertSubForm" class="es-form es-add-form">
                    @csrf
                    <div class="row">

                        <div class="col-lg-8 offset-lg-2 col-md-12 mb-4">
                            <label for="day">Username <span>*</span> </label>
                            <input type="text" name="username" id="username" value="{{$findId->relation_user->name}}">
                            @error('username')
                            <strong class="text-danger">{{$message}}</strong>
                            @enderror
                        </div>

                        <div class="col-lg-8 offset-lg-2 col-md-12 mb-4">
                            <label for="day">Email</label>
                            <input type="email" name="email" id="email" value="{{$findId->relation_user->email}}">
                            <input type="hidden" name="user_id" value="{{$findId->relation_user->id}}">
                            <input type="hidden" name="bruchType_id" value="{{$findId->id}}">
                            @error('email')
                            <strong class="text-danger">{{$message}}</strong>
                            @enderror
                        </div>

                        <div class="col-lg-8 offset-lg-2 col-md-12 mb-4">
                            <label for="day">Password <span>*</span></label>
                            <input type="password" name="password" id="password">
                            <span class="btn  bg-gradient border-0 text-white mt-2" id="togglePassword">Show
                                Password</span>
                            @error('email')
                            <strong class="text-danger">{{$message}}</strong>
                            @enderror
                        </div>

                        <div class="col-lg-8 offset-lg-2 col-md-12 mb-4">
                            <label for="day">Repeat Password <span>*</span></label>
                            <input type="password" name="confirmpassword" id="confirmpassword">
                            @error('confirmpassword')
                            <strong class="text-danger">{{$message}}</strong>
                            @enderror
                        </div>
                    </div>
                    <p>
                        <button type="button" id="SubmitButton" onclick="subinsert()" class="btn bg-gradient border-0 text-white">Create</button>
                        <button type="reset" class="btn  border-0 bg-danger text-white">Cancel</button>
                    </p>
                </form>
            </div>
        </div>
    </section>
</div>
@endsection
@section('fotter_js')
<script>
    function subinsert() {
        var branch = $('#branch').val();
         if (branch === '') {
            Swal.fire('Plase Select Branch')
            return false;
        }
         else if ($('#username').val() == '') {
            Swal.fire('Plase Fill Up Username')
            return false;
        }
        else if ($('#email').val() == '') {
            Swal.fire('Plase Give A Email')
            return false;
        }
        else if ($('#password').val() == '') {
            Swal.fire('Plase Give A Password')
            return false;
        }
        else if ($('#confirmpassword').val() == '') {
            Swal.fire('Plase Match Password')
            return false;
        }
        else if ($('#confirmpassword').val() != $('#password').val()){
            Swal.fire('Plase Match Password')
            return false;
        }
        else {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            var value = $('#InsertSubForm').serialize();
            $.ajax({
                url: "{{route('user.editinput')}}",
                type: 'POST',
                data: value,
                success: function (data) {
                    if(data['success']){
                        Swal.fire(
                            'Done!',
                            data.success,
                            'success'
                        )
                    }else{
                          Swal.fire(
                            'error!',
                            data.errors,
                            'error'
                        )
                    }
                }
            });
        }
    }

</script>
<script>
    // Get the password input field and the toggle button
   var passwordInput = document.getElementById("password");
var toggleButton = document.getElementById("togglePassword");

// Add an event listener to the toggle button
toggleButton.addEventListener("click", function() {
  // Toggle the type of the password input field
  if (passwordInput.type === "password") {
    passwordInput.type = "text";
    toggleButton.textContent = "Hide Password";
  } else {
    passwordInput.type = "password";
    toggleButton.textContent = "Show Password";
  }
});
</script>
@endsection
