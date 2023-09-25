@extends('layouts.AdminPanal')
@section('content')
<div class="u-body">
  <div class="row">
    <div class="col-lg-8">
        <div class="card">
            <div class="card-header">
                <h3>Edit Permission</h3>
            </div>
            <div class="card-body">
                <form action="{{route('update.permition')}}" mathod="POST">
                       @csrf
                       <div class="mb-4">
                        <input type="hidden" name="user_id" value="{{$user_info->id}}">
                       </div>
                       <div class="md-4">
                        <label for="">User</label>
                        <input type="text" class="form-control" readonly value="{{$user_info->name}}">
                       </div>
                    <div class="mb-4 my-4">
                         <label for="">Role</label>
                           <select class="form-control" name="roles" id="">
                            <option value="">Select Role</option>
                             @foreach ($roles as $key=> $role)
                             <option value="{{$role->id}}">{{$role->name}}</option>
                            @endforeach
                        </select>
                        <input class="w-100 form-control my-2" readonly placeholder="Previous Role : {{$user_info->getRoleNames()}}">
                    </div>
                        <div class="mb-4">
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
@endsection

