@extends('layouts.app')

@section('content')
<div class="container">

    <form action="/profile/{{$user->id}}" enctype="multipart/form-data" method="post">
        @csrf
        {{ method_field('PATCH') }}
        <div class="row">
            <div class="col-sm-8 offset-2">
                <h1>Edit profile</h1><br>
                <div class="form-group row">

                    <label for="title" class="col-md-4 col-form-label">{{ __('title') }}</label>


                    <input id="title" type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title') ??  $user->profile->title}} " required autocomplete="title" autofocus>

                    @error('title')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror

                </div>
                <div class="row">
                    <label for="description" class="col-md-4 col-form-label">{{ __('description') }}</label>
                    <input id="description" type="text" class="form-control-file @error('description') is-invalid @enderror" name="description" value="{{ old('description') ?? $user->profile->description}}" required autocomplete="description">
                    @error('description')

                    <strong>{{ $message }}</strong>

                    @enderror

                </div>

                <div class="row">
                    <label for="url" class="col-md-4 col-form-label">{{ __('url') }}</label>
                    <input id="url" type="text" class="form-control-file @error('url') is-invalid @enderror" name="url" value="{{ old('url')?? $user->profile->url }}" required autocomplete="url">
                    @error('url')

                    <strong>{{ $message }}</strong>

                    @enderror

                </div>

                <div class="row">
                    <label for="image" class="col-md-4 col-form-label">{{ __('image') }}</label>
                    <input id="image" type="file" class="form-control-file @error('image') is-invalid @enderror" name="image" value="{{ old('image') }}" autocomplete="image">
                    @error('image')

                    <strong>{{ $message }}</strong>

                    @enderror

                </div>


                <div class="row pt-4">
                    <button class="btn btn-primary">Save Profile</button>
                </div>
            </div>
        </div>

    </form>
</div>
@endsection