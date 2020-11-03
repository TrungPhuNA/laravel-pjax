@extends('master')
@section('title',$productsDetail->pro_name)
@section('content')
    <div>
        <div class="content-detail">
            {!! $productsDetail->pro_content !!}
        </div>
        <h4>Tất cả sản phẩm</h4>
        @include('components._inc_products')
    </div>
@stop
