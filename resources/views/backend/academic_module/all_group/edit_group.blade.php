@extends('layouts.AdminPanal')
@section('content')

@can('watch')
<div class="u-content">
    <div class="u-body">

        <section class="es-form-area">
            <div class="card">
                <header class="card-header bg-gradient border-0 pt-5 pb-5 d-flex align-items-center">
                    <h2 class="text-white mb-0">Update Group</h2>
                </header>

                <div class="session_view_link mt-5 ml-4 mb-2">
                    <a href="{{route('add-group')}}" class="btn btn-primary"><i class="fa-solid fa-plus"></i></a>
                    <a href="{{ route('group-view',$all_group->id) }}" class="btn btn-primary"><i
                            class="fa-solid fa-eye"></i></a>
                </div>

                <div class="branch_edit">
                    <form method="post" action="{{route('update-group')}}">
                        @csrf
                        <input type="hidden" name="group_id" value="{{ $all_group->id }}">
                        <div class="row">

                            <div class="col-md-10 mb-3">
                                <label for="">Class Name <span>*</span></label>
                                <select name="class_name" id="">
                                    @foreach($all_medium as $medium)
                                    <option value="{{ $medium->medium_code }} class=" bold_text" disabled>
                                        {{ $medium->medium_name }}</option>
                                    @foreach($all_class as $item)
                                    @if($item->medium_name == $medium->medium_code)
                                    <option value="{{$item->class_code}}"
                                        {{ $item->class_code == $all_group->class_name ?'selected':'' }}
                                        class="bold_text">{{$item->class_name}}</option>
                                    @endif
                                    @endforeach
                                    @endforeach
                                </select>
                            </div>

                            <div class="col-md-10 mb-3">
                                <label for="">Group Name <span>*</span></label>
                                <input type="text" placeholder="" name="group_name" id=""
                                    value="{{$all_group->group_name}}">
                            </div>
                            <div class="col-md-10 mt-4 mb-3">
                                <p>
                                    <button type="submit" class="btn bg-gradient border-0 text-white">Update</button>
                                    <a href="{{ route('all-group')}}"
                                        class="btn  cancel_btn border-0 text-white">Cancel</a>
                                </p>
                            </div>

                        </div>
                    </form>
                </div>
            </div>
        </section>

    </div>
</div>
@endcan

@endsection
