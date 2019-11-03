@extends('layouts.app')

@section('content')
<div class="container">
    <div class="col-9 pt-5">
        <div class="d-flex justify-content-between aling-items-baseline">
            <h1>{{$user->username }}</h1>
            <a href="#">Add new contest image</a>
        </div>
        <div class="pt-4 font-weight-bold">{{ $user->profile->title}}</div>
        <div>{{$user->profile->description}}</div>
    </div>
    <div class="row pt-5">
        <div class="col-4">
            <img src="/jpg/people1.jpg" class="w-100 " alt="image peopple 1">
        </div>
        <div class="col-4">
            <img src="/jpg/people2.jpg" class="w-100" alt="image peopple 1">
        </div>
        <div class="col-4">
            <img src="/jpg/people3.jpg" class="w-100" alt="image peopple 1">
        </div>
    </div>
</div>
@endsection
