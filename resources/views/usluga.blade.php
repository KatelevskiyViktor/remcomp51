@extends('layouts.layout')

@section('title')@parent:: {{ $pages->title }} @endsection

@section('content')
    @include('layouts.headerbanner')
    @include('layouts.content')
    @include('layouts.price')
@endsection

