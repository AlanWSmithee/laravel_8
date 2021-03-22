@extends('app')

@section('title', $name)
@section('style')
    @parent
    <link rel="stylesheet" href="/css/style.css">
@endsection

@section('content')
@parent

@endsection