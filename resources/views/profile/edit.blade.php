@extends('layouts.AdminPanal')
@section('content')
<div class="u-body">
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Profile') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.update-profile-information-form')
                </div>
            </div>

            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.update-password-form')
                </div>
            </div>

            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                <div class="max-w-xl">
                   <h3>Update Profile Photo</h3>
                   <form action="{{route('input.profile')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                       <x-text-input name="profile" type="file" class="mt-1 mb-2 block w-100" required />
                       <input name="auth_id" type="hidden" value="{{ Auth::user()->id }}" class="mt-1 mb-2 block w-100" required />
                       <button class="btn mt-2 bg-slate-900" type="submit">Update</button>
                   </form>
                </div>
            </div>

        </div>
    </div>
          </div>
@endsection
