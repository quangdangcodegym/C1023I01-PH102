@extends('blade.layout')
@section('title', 'Page Title')

@section('sidebar')
    @parent
    <p>This is appended to the master sidebar.</p>
@endsection

@section('content')
    <p>This is my body content.</p>

    @component('blade.components.alert', ['name' => 'bar', 'title' => 'Quang Dang'])
        You are not allowed to access this resource!
    @endcomponent
@endsection


{{ name }}.
