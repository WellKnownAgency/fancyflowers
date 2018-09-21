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
          FancyFlowers Comments
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
                <th scope="col">Body</th>
                <th scope="col">User ID</th>
                <th scope="col">Post ID</th>
                <th scope="col">Date</th>
                <th scope="col"></th>
              </tr>
            </thead>
            <tbody>
              @foreach ($comments as $comment)
              <tr>
                <th scope="row">{{ $comment->body }}</th>
                <td>{{ $comment->user_id }}</td>
                <td>{{ $comment->post_id }}</td>
                <td>{{ $comment->created_at }}</td>
                <td class="text-right">
                  <a href="{{route('comments.show', $comment->id)}}" class="btn btn-success btn-sm">View</a>
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
