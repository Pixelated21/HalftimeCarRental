@props([
    'title' => 'Unnamed',
    'value' => false,
])

<option {{$attributes->merge(['class' => ''])}} @if($value !== false) value="{{$value}} @endif">{{$title}}</option>
