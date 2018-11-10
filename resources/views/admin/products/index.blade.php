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
                <th scope="col">Price (Sale)</th>
                <th scope="col">Created</th>
                <th scope="col"></th>
                <th scope="col"></th>
                <th scope="col"></th>
                <th scope="col">Sales</th>
                <th scope="col"></th>
              </tr>
            </thead>
            <tbody>
              @foreach ($flowers as $flower)
              <tr>
                <th scope="row">{{ $flower->name }}</th>
                @if($flower->sale == null)
                <td>${{ $flower->price_default }}</td>
                @else
                <td>${{ $flower->price_old_default }} (${{ $flower->price_new_default }})</td>
                @endif
                <td>{{ $flower->created_at }}</td>
                <td>
                  @if ($flower->stock == true)
                  <span class="badge badge-success">In Stock</span>
                  @else
                  <span class="badge badge-danger">Out of Stock</span>
                  @endif
                </td>
                <td>
                  @if ($flower->best == true)
                  <span class="badge badge-success">Best Sellers</span>
                  @else
                  <span class="badge badge-danger">Not Best Sellers</span>
                  @endif
                </td>
                <td>
                  @if ($flower->new == true)
                  <span class="badge badge-success">New</span>
                  @else
                  <span class="badge badge-danger">Not New</span>
                  @endif
                </td>
                <td>
                  @if ($flower->sale == true)
                  <span class="badge badge-success">Sale {{ $flower->sale}}% </span>
                  @else
                  <span class="badge badge-danger">Not on Sale</span>
                  @endif
                </td>
                <td class="text-right">
                  <a href="{{ route('products.show', $flower->id) }}" class="btn btn-success btn-sm">View</a>
                  <a href="/admin/products/{{ $flower->id }}/delete" class="btn btn-danger btn-sm delete">Delete</a>
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
