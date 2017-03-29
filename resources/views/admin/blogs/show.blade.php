@extends("layouts/layout_admin")
@section("title","Video")
@section("breadcrumbs",'<ol class="breadcrumb"><li><a href="/">Trang chủ</a></li><li><a href="/blogs">Blog</a></li><li class="active">Chi tiết</li></ol>')
@section("content")
    <h2>{{$rs->blog_title}}</h2>
    <div>{!! $rs->blog_content !!}</div>
@stop

