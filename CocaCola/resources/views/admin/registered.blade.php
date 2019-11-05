@extends('layouts.panel')

@section('title')
    Dashboard | Coca-Cola Image contest
@endsection

@section('content')
<div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              <h4 class="card-title">Geregristeerde deelnemers</h4>
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
                    <th>Aangemaakt op </th>
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
                            <td>  -{{$user->adres}} </td>
                            <td> -{{$user->usertype}} </td>
                            <td> -{{$user->last_login_ip}}</td>
                            <td> {{$user->created_at}}</td>
                            <td>

                                <a href="/dashboard/registered/edit/{{$user->id}}" class="btn btn-succes"> BEWERK ROL</a>

                            </td>
                            <td>
                                <!-- zo kan een admin zichzelf niet diskwalificeren -->
                                @if ($user->usertype != 'admin')
                                     <a href="/dashboard/registered/softdelete/{{$user->id}}" class="btn btn-danger"> DISKWALIFICEER GEBRUIKER</a>
                                @endif
                            </td>
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
