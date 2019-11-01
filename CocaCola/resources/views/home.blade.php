@extends('layouts.app')

@section('content')
<div class="container">
    <h1>{{$user -> username }}</h1>
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
