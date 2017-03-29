@extends("layouts.layout_admin")

@section("content")
    @if(isset($articles))
        @foreach ($articles as $article)
            <h1>{{$article->article_title}}</h1>
            <div>{!! $article->article_content !!}</div>
            <hr>
        @endforeach
    @endif
@endsection


