@extends('Auth.layout')
@section('page_title','Login')
@section('content')

{{--    @push('alert')--}}
{{--        @livewire('alert-control')--}}
{{--    @endpush--}}

    @livewire('auth.login')
@endsection
