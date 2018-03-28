@extends('layouts.app')

{{--{{ dd($data) }}--}}

@section('content')
    <p>Title = {{ $data['title'] }}</p>
    <p>Body = {{ $data['body'] }}</p>
@stop

@section('js')
@stop