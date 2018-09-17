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
          Fancy Flowers Posts
        </div>
        <div class="card-body">
          <a href="/admin/posts/create" class="btn btn-success">Create Post</a>
        </div>
      </div>
    </div>
    <div class="col-md-9">
      <div class="card" style="width: 100%;">
        <div class="table-responsive">
          <table class="table">
            <thead class="thead-light">
              <tr>
                <th scope="col">Title</th>
                <th scope="col">Slug</th>
                <th scope="col">Image</th>
                <th scope="col">Published</th>
                <th scope="col">Created date</th>
                <th scope="col"></th>
                <th scope="col"></th>
              </tr>
            </thead>
            <tbody>
              @foreach ($posts as $post)
              <tr>
                <th scope="row">{{ $post->title }}</th>
                <td >{{ $post->slug }}</td>
                <td>{{ $post->image }}</td>
                <td>{{ $post->published}}</td>
                <td>{{ $post->created_at}}</td>
                <td class="text-right">
                  <a href="{{ route('posts.show', $post->id) }}" class="btn btn-success btn-sm">View</a>
                </td>
                <td>
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
