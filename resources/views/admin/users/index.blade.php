@section('title', '')
@section('dscr', '')
@section('keywords', '')

@extends('admin.main')

@section('content')
<div class="container-fluid">
  <div class="row">
    <div class="col-md-3">
      <div class="card" style="width: 100%;">
        <div class="card-header">
          FancyFlowers Users
        </div>
        <div class="card-body">

          <br>
        </div>
      </div>
    </div>
    <div class="col-md-9">
      <div class="card" style="width: 100%;">
        <div class="table-responsive">
          <table class="table">
            <thead class="thead-light">
              <tr>
                <th scope="col">First name</th>
                <th scope="col">Last name</th>
                <th scope="col">E-mail</th>
                <th scope="col">Number</th>
                <th scope="col">Registration date</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($users as $user)
              <tr>
                <td scope="row"><b>{{ $user->firstname }}</b> </td>
                <th>{{ $user->lastname }}</th>
                <th>{{ $user->email }}</th>
                <td>{{ $user->phonenumber }}</td>
                <td>{{ $user->created_at }}</td>
                <td class="text-right">
                  <a href="#" class="btn btn-danger btn-sm">Delete</a>
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
@stop
