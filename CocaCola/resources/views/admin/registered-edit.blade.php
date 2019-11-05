@extends('layouts.panel')

@section('title')
    Dashboard | Coca-Cola Image contest
@endsection

@section('content')
<div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                        <div class="card-header  d-flex justify-content-center"">
                            <h1 >Bewerk gebruikers rol</h1>
                        </div>
                        <div class="card-body">
                            <div class="row d-flex justify-content-center">
                                <div class="col-md-6">
                                <form action="/role-update/{{ $user->id}}" method="POST" >
                                                @csrf
                                                {{method_field('PUT')}}
                                                <div class="form-group">
                                                    <label for="name" class="col-md-4 col-form-label text-md-left">Name: </label>
                                                     <p class="pl-3">{{$user->name}}</p>

                                                </div>
                                                <div  class="form-group">
                                                        <label for="rol" class="col-md-4 col-form-label text-md-left">Rol: </label>
                                                    <select name="usertype" class="form-control">
                                                        <option value="admin">Admin rol</option>
                                                        <option value=" ">Geen rol</option>
                                                    </select>
                                                </div>
                                                <button type="submit" class="btn btn-primary" >BEWERK ROL</button>
                                                <a href="/dashboard/register" class="pl-4" style="color:red;">ANNULEREN</a>

                                        </form>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
@endsection
