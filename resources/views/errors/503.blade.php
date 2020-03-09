@extends('errors::template')

@section('title', __('Service Unavailable'))
@section('code')
    <h1>5<span>0</span>3</h1>
@endsection
@section('message')
    <h2>{{ $exception->getMessage() ?: 'Service Unavailable' }}</h2>
@endsection
