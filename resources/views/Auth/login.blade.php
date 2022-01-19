@extends('layout.authentication')
@section('page_title','Login')
@section('wallpaper',asset('storage/evgeny-tchebotarev-aiwuLjLPFnU-unsplash.jpg'))
@section('content')

{{--    @push('alert')--}}
{{--        @livewire('alert-control')--}}
{{--    @endpush--}}

    @livewire('auth.login')
@endsection
