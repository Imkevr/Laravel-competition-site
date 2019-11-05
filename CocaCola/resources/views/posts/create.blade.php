@extends('layouts.app')

@section('content')
<div class="container">
    <form action="/post" enctype="multipart/form-data" method="POST">
        @csrf
            <div class="row">
                    <div class="col-8 offset-2">
                            <div class="row">
                                <h1>Nieuwe afbeelding toevoegen</h1>
                            </div>
                            <div class="form-group row">
                                    <label for="caption" class="col-md-4 col-form-label">Korte beschrijving :</label>

                                    <input id="caption"
                                            type="text"
                                            name="caption"
                                            class="form-control @error('caption') is-invalid @enderror"
                                            caption="caption" value="{{ old('caption') }}"
                                            required autocomplete="caption" autofocus>

                                        @error('caption')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                            </div>
                            <div class="row">
                                <label for="image" class="col-md-4 col-form-label">Laad afbeelding in:</label>
                                <input type="file" class="form-control-file @error('title') is-invalid @enderror" id="image" name="image">
                                @error('image')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                 @enderror
                            </div>
                            <div class="row pt-4">
                                <button class="btn btn-primary">Voeg nieuwe afbeelding toe</button>
                            </div>

                    </div>
                </div>

    </form>
</div>
@endsection
