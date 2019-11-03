@extends('layouts.app')

@section('content')
<div class="container">
    <div class="col-9 pt-5">
        <div class="d-flex justify-content-between align-items-baseline">
            <h1>{{$user->username }}</h1>
            <a href="/post/create">Voeg afbeedling toe</a>
        </div>
        <a href="#">Bewerk profiel</a>
        <div class="d-flex">
        <div class="pr-h"><strong>{{ $user->posts->count() }}</strong> Afbeeldingen</div>
        </div>
        <div class="pt-4 font-weight-bold">{{ $user->profile->title}}</div>
        <div>{{$user->profile->description}}</div>
    </div>
    <div class="row pt-5">
            @foreach ( $user->posts as $post )
                <div class="col-4 pb-4">
                    <a href="/post/{{ $post->id }}">
                        <img src="/storage/{{ $post->image }}" class="w-100" >
                    </a>
                </div>
            @endforeach
    </div>
</div>
@endsection
