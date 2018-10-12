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
          Fancy Flowers Contacts
        </div>
        <div class="card-body">
          <a href="/admin/contacts" class="btn btn-info">All Contacts</a>
          <br><br>
          <a href="/admin/contacts/{{ $contact->id }}/delete" class="btn btn-danger delete">Delete Contact</a>
        </div>
      </div>
      <br>
      <div class="card" style="width: 100%;">
        <div class="card-header">
          Date
        </div>
        <div class="card-body">
          <strong>Created:</strong> {{ $contact->created_at }}<br>
          <strong>Updated:</strong> {{ $contact->updated_at }}
        </div>
      </div>
    </div>
    <div class="col-md-9">
      <div class="card" style="width: 100%;">
        <h2 class="card-header">
         {{ $contact->name }}

       </h2>

       <ul class="list-group list-group-flush">
         <li class="list-group-item">{{ $contact->name }}</li>
         <li class="list-group-item">{{ $contact->email }}</li>
         <li class="list-group-item">{{ $contact->subj }}</li>
         <li class="list-group-item">{{ $contact->body }}</li>
       </ul>
      </div>
    </div>
  </div>
</div>
@stop
