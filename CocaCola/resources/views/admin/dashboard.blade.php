@extends('layouts.panel')

@section('title')
    Dashboard | Coca-Cola Image contest
@endsection

@section('content')
<div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              <h2 class="card-title"> Welcome op het Admin dashboard!</h2>
            </div>
            <div class="card-body">
                  <h5>Vanaf hier kan je via het menu aan de linker kant alle geregistreerde deelnemers bekijken.</h5>
                  <h5>Menu uitleg:</h5>
                  <p>Gebruikers --> kan je alle gebruikers bekijken / rol aanpassen / diskwalificeren</p>
                  <p>Gediskwalificeerden --> Hier kan je gebruikers terug kwalificeren</p>
            </div>
          </div>
        </div>
      </div>
@endsection

@section('scripts')

@endsection
