@extends('layouts.app')

@section('content')
<div class="container">
<form action="/profile/{{ $user->id }}" enctype="multipart/form-data" method="POST">
            @csrf
            @method('PATCH')
                <div class="row">
                        <div class="col-8 offset-2">
                                <div class="row">
                                    <h1>Bewerk mijn profiel</h1>
                                </div>
                                <div class="form-group row">
                                        <label for="title" class="col-md-4 col-form-label">Profiel titel:</label>

                                        <input id="title"
                                                type="text"
                                                name="title"
                                                class="form-control @error('title') is-invalid @enderror"
                                                title="title" value="{{ old('title') ?? $user->profile->title}}"
                                                required autocomplete="title" autofocus>

                                            @error('title')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                </div>
                                <div class="form-group row">
                                        <label for="description" class="col-md-4 col-form-label">Beschrijving:</label>

                                        <input id="description"
                                                type="text"
                                                name="description"
                                                class="form-control @error('description') is-invalid @enderror"
                                                title="description" value="{{ old('description') ?? $user->profile->description }}"
                                                required autocomplete="description" autofocus>

                                            @error('description')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                </div>
                                <div class="row">
                                    <label for="image" class="col-md-4 col-form-label">Profiel foto:</label>
                                    <input type="file" class="form-control-file @error('image') is-invalid @enderror" id="image" name="image">
                                    @error('image')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                     @enderror
                                </div>
                                <div class="row pt-4">
                                    <button class="btn btn-primary">Profiel opslaan</button>
                                </div>
</div>
@endsection
