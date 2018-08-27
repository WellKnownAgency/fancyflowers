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
          Fancy Flowers Products
        </div>
        <div class="card-body">
          <a href="/admin/products/create" class="btn btn-success">Create Product</a>
          <br>
            {{ $flowers->sum() }}
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
                <th scope="col">Price 1</th>
                <th scope="col">Price 2</th>
                <th scope="col">Price 3</th>
                <th scope="col">Created</th>
                <th scope="col">Category</th>
                <th scope="col"></th>
                <th scope="col"></th>
              </tr>
            </thead>
            <tbody>
              @foreach ($flowers as $flower)
              <tr>
                <th scope="row">{{ $flower->name }}</th>
                <td>${{ $flower->price1 }}</td>
                <td>${{ $flower->price2 }}</td>
                <td>${{ $flower->price3 }}</td>
                <td>{{ $flower->created_at }}</td>
                <td>Loose Flowers</td>
                <td>
                  @if ($flower->stock == true)
                  <span class="badge badge-success">In Stock</span>
                  @else
                  <span class="badge badge-danger">Out of Stock</span>
                  @endif
                </td>
                <td class="text-right">
                  <a href="{{ route('products.show', $flower->id) }}" class="btn btn-success btn-sm">View</a>
                  <a href="#" class="btn btn-warning btn-sm">Edit</a>
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
