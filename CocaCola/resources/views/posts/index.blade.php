@extends('layouts.app')

@section('content')
    <div class="container">
            <a href="/profile/{{$userId}}" style="color:#CF4037;"><h3>Ga naar mijn profiel</h3> </a>
        <div class="card-body">
            <!--  if user tries to acces dashboard without admin role allert error-->
            @if (session('status'))
                <div class="alert alert-warning text-dark" role="alert">
                    {{session('status')}}
                </div>
            @endif
        </div>
        <!-- Winners --->
        <h1 class="d-flex justify-content-center" >Winnaars lijst!</h1>
        <p class="pb-3 d-flex justify-content-center">4 weken lang komt er elke week een winnaar bij</p>
        @foreach ($winnersposts as $winner )
            @foreach ($posts as $post )
                @if ($winner->post_id === $post->id)
                <div class="pt-4">
                        <p class="font-weight-bold d-flex justify-content-center">
                            Proficiat ->
                                <a href="/profile/{{ $post->user->id}}"> {{ $post->user->username}}</a>
                            </p>
                        <div class="col-6 offset-3">
                        <a href="/profile/{{ $post->user->id}}">
                            <img src="/storage/{{ $post->image }}" class="w-100"/></a>
                        </div>
                    </div>
                @endif
            @endforeach
        @endforeach
<hr class="pt-2 pb-5">
            <h1 class="d-flex justify-content-center">Alle Share Happiness Posts</h1>
            <p class="pb-5 d-flex justify-content-center">Like post en krijg zoveel mogelijk likes terug om te winnen</p>
      @foreach ($posts as $post)
        <div class="pb-3 pt-3"style="border-bottom: solid 1px #636B6F;">
                <img src=" {{$post->user->profile->profileImage()}}" class="rounded-circle " style="height: 50px; margin-left:100px; "/>
                <div class="row pt-2 pb-4">


                        </div>
        <div class="row">

                <div class="col-6 offset-3">
                <a href="/profile/{{ $post->user->id}}">
                    <img src="/storage/{{ $post->image }}" class="w-100"/></a>
                </div>
            </div>
            <div class="row pt-2 pb-4">

                <div class="col-6 offset-3">
                        <span class="font-weight-bold text-dark">
                                <p class="font-weight-bold">
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
