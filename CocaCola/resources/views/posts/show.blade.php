@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-8">
                <img src="/storage/{{ $post->image }}" class="w-100"/>
            </div>
            <div class="col-4">
                <div>
                    <div class="d-flex align-items-center">
                        <div class="pr-3">
                            <img src="{{ $post->user->profile->profileImage()}}" class="rounded-circle w-100" style="max-width: 70px;">
                        </div>
                        <div>
                            <h5 class="font-weight-bold">
                                    <a href="/profile/{{ $post->user->id}}">{{ $post->user->username}}</a>
                            </h5>
                        </div>
                    </div>
                    <hr>
                <p class="font-weight-bold">
                    <span class="font-weight-bold text-dark">
                        <a href="/profile/{{ $post->user->id}}">{{ $post->user->username}}</a>
                    </span> {{{ $post->caption}}}</p>
                    <a href="/post/vote/{{ $post->id }}">Vote</a>
                </div>
            </div>
         </div>
    </div>
@endsection
