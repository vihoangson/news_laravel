@extends("layouts/layout_admin")
@section("title","Video")
@section("breadcrumbs",'<ol class="breadcrumb"><li><a href="/">Trang chủ</a></li><li class="active">Blog</li></ol>')
@section("content")
    @foreach($rs as $key => $value)
        <p>{{$value->blog_title}}</p>
        <a href="/admin/blogs/{{$value->id}}/edit"><i class="fa fa-pencil"></i> Edit</a> | 
        <a href="/admin/blogs/{{$value->id}}/view"><i class="fa fa-street-view"></i> View</a> |
        <a href="/admin/blogs/delete/{{$value->id}}"><i class="fa fa-trash"></i> Delete</a>
        <hr>
    @endforeach
@stop

