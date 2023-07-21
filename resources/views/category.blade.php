@extends('layout')
@section('content')
    <h2 class="category-heading">{{$category->name}} Category</h2>
    @foreach ($posts as $post)
        <div class="article {{$loop->even ? 'even-post':''}}">
            <h1>{{$post->title}}</h1>
{{--            <p>Author :{{$post->author}} </p>--}}
{{--            <p>Tags : @foreach ($post->tags as $tag)--}}
{{--                    {{$tag}}--}}
{{--                @endforeach;--}}
{{--            </p>--}}
            <p>{{$post->excerpt}} <a href="/posts/{{$post->slug}}">Read more ...</a></p>
        </div>
    @endforeach
@endsection
