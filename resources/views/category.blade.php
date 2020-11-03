@extends('master')
@section('title',$category->c_name)
@section('content')
    <div>
        <h1>{{ $category->c_name }}</h1>
        @include('components._inc_products')
    </div>
@stop
