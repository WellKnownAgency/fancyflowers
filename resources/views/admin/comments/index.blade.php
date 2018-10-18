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
                <th scope="col">User Name</th>
                <th scope="col">Comment</th>
                <th scope="col">Post</th>
                <th scope="col">Date</th>
                <th scope="col"></th>
              </tr>
            </thead>
            <tbody>
              @foreach ($comments as $comment)
              <tr>
                <td scope="row">{{ $comment->user->firstname }} {{ $comment->user->lastname }}</td>
                <th>{{ $comment->body }}</th>
                <td>{{ $comment->post->title }}</td>
                <td>{{ $comment->created_at }}</td>
                <td class="text-right">
                  <a href="{{route('comments.show', $comment->id)}}" class="btn btn-success btn-sm">View</a>
                  <a href="/admin/comments/{{ $comment->id }}/delete" class="btn btn-danger btn-sm delete">Delete</a>
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
