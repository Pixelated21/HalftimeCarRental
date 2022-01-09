@extends('builder')
@section('page_title','Testing')

@section('nav_bar')
    @livewire('navigation.navigation')
@endsection

@push('toasts')
    @livewire('alert.dynamic-alert')
@endpush

@section('bg-range')
    @livewire('bg-changer',['hex' => '#9b97ea'])
@endsection

@section('table')
    @livewire('dynamic-table')
@endsection









@push('scripts')
    <script>
        function copyToClipboard() {
            let text = document.getElementById('todo_item1').select();
            console.log(text)
            document.execCommand('copy', true);

        }
    </script>
@endpush
