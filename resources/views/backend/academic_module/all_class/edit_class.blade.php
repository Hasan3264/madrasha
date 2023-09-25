@extends('layouts.AdminPanal')
@section('content')

    <div class="u-content">
        <div class="u-body">

<section class="es-form-area">
    <div class="card">
        <header class="card-header bg-gradient border-0 pt-5 pb-5 d-flex align-items-center">
            <h2 class="text-white mb-0">Update Class</h2>
        </header>
        <div class="session_view_link mt-5 ml-4 mb-2">
            <a href="{{ route('add-class') }}" class="btn btn-primary"><i class="fa-solid fa-plus"></i></a>
            <a href="{{ route('class-view',$class_data->id) }}" class="btn btn-primary"><i class="fa-solid fa-eye"></i></a>
        </div>
        <div class="branch_edit class_edit">

            <form method="post" action="{{ route('update-class') }}" >
                @csrf
             <input type="hidden" name="class_id" value="{{ $class_data->id}}">
                <div class="row">

                <div class="col-md-10 mb-3">
                    <label for="">Medium Name <span>*</span></label>
                     <select name="medium_name" id="" >
                         @foreach($all_medium as $item)
                         <option value="{{ $item->medium_code }}" {{ $item->medium_code == $class_data->medium_name ? 'selected' : '' }}>{{$item->medium_name}}</option>
                         @endforeach
                     </select>
                 </div>

                <div class="col-md-10 mb-3">
                    <label for="">Class Name <span>*</span></label>
                    <input type="text" placeholder=" "  name="class_name" id="" value="{{ $class_data->class_name }}">
                </div>
                <div class="col-md-10 mb-3">
                    <label for="">Class Code <span>*</span></label>
                    <input type="text" placeholder=" "  name="class_code" id="" value="{{ $class_data->class_code }}"><br>
                    <span style="color: red;padding-left: 102px;" class="mt-2 d-block">Class code must be 2 digit. For examples : Class Nine - 09</span>
                </div>
                
                <div class="col-md-10 mt-4 mb-3">
                    <p>
                     <button type="submit" class="btn bg-gradient border-0 text-white">Update</button>
                     <a href="{{ route('all-class-list') }}" class="btn  cancel_btn border-0 text-white">Cancel</a>
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
