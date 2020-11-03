@extends('master')
@section('title',$category->c_name)
@section('content')
    <div>
        <h1>{{ $category->c_name }}</h1>
        <form action="?" name="pjax-container">
            <input type="text" placeholder="name" name="n" value="{{  Request::get('n') }}">
            <select name="c" id="">
                <option value="">Chon Danh muc</option>
                @foreach($categoriesAll as $item)
                    <option value="{{ $item->id }}" {{ Request::get('c') == $item->id ? "selected" : "" }}>{{ $item->c_name }}</option>
                @endforeach
            </select>
            <button type="submit" class="btn btn-success">Tim kiếm</button>
        </form>
        @include('components._inc_products')
    </div>
@stop
