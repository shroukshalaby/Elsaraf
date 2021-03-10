@extends('front.elsarafTemplate.layouts.app')

@push('head')

    <link rel="stylesheet" href="{{ mix('css/app.css') }}">

    <script src="{{ mix('js/app.js') }}" defer></script>

@endpush

@section('title','الصراف')

@section('content')

    {{ $slot }}
@endsection

