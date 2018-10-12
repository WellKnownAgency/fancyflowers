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
          Fancy Flowers Collections
        </div>
        <div class="card-body">
          <a href="/admin/collections/create" class="btn btn-success">Create Collection</a>
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
                <th scope="col">Slug</th>
                <th scope="col"></th>
                <th scope="col"></th>
              </tr>
            </thead>
            <tbody>
              @foreach ($collections as $collection)
              <tr>
                <th scope="row">{{ $collection->name }}</th>
                <td>{{ $collection->slug }}</td>
                <td>{{ $collection->created_at}}</td>
                <td class="text-right">
                  <a href="/admin/collections/{{ $collection->id }}/edit" class="btn btn-warning btn-sm">Edit</a>
                  <a href="/admin/collections/{{ $collection->id }}/delete" class="btn btn-danger btn-sm delete">Delete</a>
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
