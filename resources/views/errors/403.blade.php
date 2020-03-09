@extends('errors::template')

@section('title', __('Forbidden'))
@section('code')
    <h1>4<span>0</span>3</h1>
@endsection
@section('message')
    <h2>{{$exception->getMessage() ?: 'Forbidden'}}</h2>
@endsection
