@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card-body">
            <!--  if user tries to acces dashboard without admin role allert error-->
            @if (session('status'))
                <div class="alert alert-warning text-dark" role="alert">
                    {{session('status')}}
                </div>
            @endif
        </div>
        @foreach ($winnersposts as $winner )
            @foreach ($posts as $post )
                @if ($winner->post_id === $post->id)
                <div class="row">
                        <div class="col-6 offset-3">
                            <h1>Winner</h1>
                        <a href="/profile/{{ $post->user->id}}">
                            <img src="/storage/{{ $post->image }}" class="w-100"/></a>
                        </div>
                    </div>
                @endif
            @endforeach
        @endforeach
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
