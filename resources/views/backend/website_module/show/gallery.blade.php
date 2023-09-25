@extends('layouts.AdminPanal')
@section('content')
<div class="u-body">

<section class="es-form-area">
    <div class="card">
        <header class="card-header bg-gradient border-0 pt-5 pb-5 d-flex align-items-center">
            <h2 class="text-white mb-0">
                Gallery View
            </h2>
        </header>

        <div class="card-body table-responsive" id="institue">
            <form action="" class="es-form es-add-form">
                <div class="session_view_link mt-2 mb-5">
                    <a href="{{route('add_gallery')}}" class="btn btn-primary"><i class="fa-solid fa-plus"></i></a>
                    <a href="{{route('gallery.edit', $findId->id)}}" class="btn btn-primary"><i class="fa-solid fa-pencil"></i></a>
                </div>
                <!---- Session View table  ----->
                    <table class="table table-bordered table-striped mt-3 branch_view_table">
                        <tbody>
                            <tr>
                                <th>Album Title</th>
                                <td>{{$findId->title}}</td>
                            </tr>
                            <tr>
                                <th>Photo</th>
                                <td>
                                    @if ($findId->albtype == 'Photo')
                                        <img class="w-100 img-fluid"
                                            src="{{ asset('uploads/website/gallerymanage') }}/{{ $findId->file }}"
                                            alt="">
                                        @elseif ($findId->albtype == 'Video')
                                        @php
                                        $extension = pathinfo($findId->file, PATHINFO_EXTENSION);
                                        @endphp
                                        <video width="200" height="100" autoplay>
                                            <source
                                                src="{{ asset('uploads/website/gallerymanage') }}/{{ $findId->file }}"
                                                type="video/{{$extension}}">
                                        </video>
                                        @else
                                          {{'null'}}
                                        @endif
                                </td>
                            </tr>
                            <tr>
                                <th>Caption</th>
                                <td>{{$findId->caption}}</td>
                            </tr>
                            <tr>
                                <th>Status</th>
                                <td>{{$findId->status}}</td>
                            </tr>
                            <tr>
                                <th>Create At</th>
                                <td>{{$findId->created_at}}</td>
                            </tr>
                        </tbody>
                    </table>

                <!---- /session View table ----->
            </form>
        </div>

    </div>
</section>

    </div>
@endsection
