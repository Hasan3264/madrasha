@extends('layouts.AdminPanal')
@section('content')

@can('watch')
<div class="u-content">
    <div class="u-body">

        <section class="es-form-area">
            <div class="card">
                <header class="card-header bg-gradient border-0 pt-5 pb-5 d-flex align-items-center">
                    <h2 class="text-white mb-0">Add Shift</h2>
                </header>
                <div class="branch_edit">
                    <form action="{{ route('store-shift') }}" method="post">
                        @csrf

                        <div class="row">

                            <div class="col-md-10 mb-3">
                                <label for="">Medium Name <span>*</span></label>
                                <select name="medium_name" id="" required>
                                    @foreach($all_medium as $item)
                                    <option value="{{ $item->medium_code }}">{{ $item->medium_name }}</option>
                                    @endforeach
                                </select>
                            </div>


                            <div class="col-md-10 mb-3">
                                <label for="">Shift Name <span>*</span></label>
                                <input type="text" placeholder=" " name="shift_name" id="" required>
                            </div>

                            <div class="col-md-10 mb-3">
                                <label for="">Start Time <span>*</span></label>
                                <input type="time" placeholder=" " name="start_time" id="" required>
                            </div>

                            <div class="col-md-10 mb-3">
                                <label for="">End Time <span>*</span></label>
                                <input type="time" placeholder=" " name="end_time" id="">
                            </div>
                            <div class="col-md-10 mb-3">
                                <label for="">Status <span>*</span></label>
                                <select name="status" id="" required>
                                    <option value="active">Active</option>
                                    <option value="inactive">Inactive</option>
                                </select>
                            </div>

                            <div class="col-md-10 mt-4 mb-3">
                                <p>
                                    <button type="submit" class="btn bg-gradient border-0 text-white">Create</button>
                                    <a href="{{route('all-shift-list')}}"
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
