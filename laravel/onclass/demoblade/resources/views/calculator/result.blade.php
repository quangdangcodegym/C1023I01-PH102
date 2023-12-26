@extends('calculator.layout')
@section('content')
    <p>Kết quả là: {{ isset($total) ? $total : '' }}</p>
@endsection
