@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img src="/storage/{{ $user->profile->image}}" class="rounded-circle w-100">
        </div>
        <div class="col-9 pt-5">
            <div class="d-flex justify-content-between align-items-baseline">
                <h1>{{$user->username }}</h1>
                <!-- will authorize if viewer can see add image link -->
                @can('update', $user->profile)
                    <a href="/post/create">Voeg afbeedling toe</a>
                @endcan
            </div>
            <!-- will authorize if viewer can see edit link -->
            @can('update', $user->profile)
                <a href="/profile/{{ $user->id }}/edit">Bewerk profiel</a>
            @endcan
            <div class="d-flex">
            <div class="pr-h"><strong>{{ $user->posts->count() }}</strong> Afbeeldingen</div>
            </div>
            <div class="pt-4 font-weight-bold">{{ $user->profile->title}}</div>
            <div>{{$user->profile->description}}</div>
        </div>
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
