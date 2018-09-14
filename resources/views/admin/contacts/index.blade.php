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
          FancyFlowers Contacts
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
                <th scope="col">Name</th>
                <th scope="col">E-mail</th>
                <th scope="col">Subject</th>
                <th scope="col">Message</th>
                <th scope="col">Date</th>
                <th scope="col"></th>
              </tr>
            </thead>
            <tbody>
              @foreach ($contacts as $contact)
              <tr>
                <th scope="row">{{ $contact->name }}</th>
                <td>{{ $contact->email }}</td>
                <td>{{ $contact->subj }}</td>
                <td>{{ str_limit($contact->body, 10) }}</td>
                <td>{{ $contact->created_at }}</td>
                <td class="text-right">
                  <a href="{{route('contacts.show', $contact->id)}}" class="btn btn-success btn-sm">View</a>
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
