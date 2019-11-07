@extends('layouts.panel')

@section('title')
    Dashboard | Coca-Cola Image contest
@endsection

@section('content')
<div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              <h4 class="card-title">Gediskwalificeerde gebruikers</h4>
            </div>
            <div class="card-body">
                    <!--  updated with succes -->
                    @if (session('status'))
                        <div class="alert alert-success text-dark" role="alert">
                            {{session('status')}}
                        </div>
                    @endif
                </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table">
                  <thead class=" text-primary">
                    <th>User# </th>
                    <th>Naam </th>
                    <th>Username </th>
                    <th>Email </th>
                    <th>Adres </th>
                    <th>Rol </th>
                    <th>Login Ip </th>
                    <th>Gediskwalificeerd op</th>
                    <th></th>
                    <th></th>
                  </thead>
                  <tbody>
                      @foreach ($users as $user)
                      <tr>
                            <td> {{$user->id}} </td>
                            <td> {{$user->name}} </td>
                            <td>  {{$user->username}}  </td>
                            <td>  {{$user->email}} </td>
                            <td>  {{$user->adres}} </td>
                            <td> -{{$user->usertype}} </td>
                            <td> -{{$user->last_login_ip}}</td>
                            <td> {{$user->deleted_at}}</td>
                            <td> <a href="/dashboard/registered/softdelete/restore/{{$user->id}}" class="btn btn-success"> KWALIFICEER GEBRUIKER OPNIEUW</a></td>
                          </tr>
                      @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
@endsection
