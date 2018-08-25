@extends('voyager::master')


@section('css')
    <meta name="csrf-token" content="{{ csrf_token() }}">
@stop

@section('page_header')
    <h1 class="page-title">
        <i class=""></i>
    
    </h1>
@stop

@section('content')
    
@stop

@section('javascript')
    <script>
        $('document').ready(function () {
            $('.toggleswitch').bootstrapToggle();
        });
    </script>
@stop