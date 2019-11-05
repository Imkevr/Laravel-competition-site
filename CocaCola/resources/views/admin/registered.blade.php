@extends('layouts.panel')

@section('title')
    Dashboard | Coca-Cola Image contest
@endsection

@section('content')<div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              <h4 class="card-title">Registered Roles</h4>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table">
                  <thead class=" text-primary">
                    <th>User id </th>
                    <th>Naam </th>
                    <th>Username </th>
                    <th>Email </th>
                    <th>Adres </th>
                    <th>Role </th>
                    <th>login Ip </th>
                    <th>aangemaakt op </th>
                    <th>EDIT</th>
                    <th>DELETE</th>
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
                            <td> <a href="#" class="btn btn-succes"> EDIT</a></td>
                            <td> <a href="#" class="btn btn-danger"> DELETE</a> </td>
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
