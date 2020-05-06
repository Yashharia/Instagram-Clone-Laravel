@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-8">
            <img src="/storage/{{$post->image}}" class="w-100" alt="">

        </div>
        <div class="col-sm-4">

            <div class="d-flex align-items-center ">
                <div class="pr-3">
                    <img src="{{$post->user->profile->profileImage()}}" class="rounded-circle w-100" style="max-width:40px;" alt="">
                </div>
                <div>
                    <div style="font-weight: bold"><a style="color: black" href="/profile/{{$post->user->id}}">{{$post->user->username}}</a></div>
                </div>
                <div class="pl-3">
                    <a href="#">Follow</a>
                </div>
            </div>
            <hr>
            <div>
                <p>
                    <span class="pr-3" style="font-weight: bold"><a style="color: black" href="/profile/{{$post->user->id}}">{{$post->user->username}}</a></span>
                    {{$post->caption}}
                </p>
            </div>
        </div>
    </div>

</div>
@endsection