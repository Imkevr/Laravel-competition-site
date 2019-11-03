@extends('layouts.app')

@section('content')
    <div class="container">
      @foreach ($posts as $post)
        <div class="row">
                <div class="col-6 offset-3">
                <a href="/profile/{{ $post->user->id}}">
                    <img src="/storage/{{ $post->image }}" class="w-100"/></a>
                </div>
            </div>
            <div class="row pt-2 pb-4">
                <div class="col-6 offset-3">
                    <p class="font-weight-bold">
                        <span class="font-weight-bold text-dark">
                            <a href="/profile/{{ $post->user->id}}">{{ $post->user->username}}</a>
                        </span> {{{ $post->caption}}}</p>
                    </div>
                </div>
            </div>
      @endforeach
      <div class="row">
          <div class="col-12 d-flex justify-content-center">
              {{ $posts->links() }} <!-- pagination link -->
          </div>
      </div>
    </div>
@endsection
