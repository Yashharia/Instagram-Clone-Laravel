@extends('layouts.app')

@section('content')
<div class="container">
    @foreach($posts as $post)
    <div class="row">
        <div class="col-sm-6 offset-3">
            <a href="/profile/{{$post->user->id}}"></a>
            <img src="/storage/{{$post->image}}" class="w-100" alt="">
        </div>
    </div>
    <div class="row pt-2 pb-4">
        <div class="col-sm-6 offset-3">
            <p>
                <span class="pr-3" style="font-weight: bold">
                    <a style="color: black" href="/profile/{{$post->user->id}}">{{$post->user->username}}</a>
                </span>
                {{$post->caption}}
            </p>
        </div>
    </div>
    @endforeach
    <div class="row">
        <div class="col-12 d-flex justify-content-center">
            {{$posts->links()}}
        </div>
    </div>
</div>
@endsection