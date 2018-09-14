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
          <a href="/admin/products" class="btn btn-info">All Products</a>
          <br><br>
          <a href="/admin/products/" class="btn btn-danger">Delete Product</a>
        </div>
      </div>
      <br>
      <div class="card" style="width: 100%;">
        <div class="card-header">
          Date
        </div>
        <div class="card-body">
          <strong>Created:</strong> {{ $flower->created_at }}<br>
          <strong>Updated:</strong> {{ $flower->updated_at }}
        </div>
      </div>
    </div>
    <div class="col-md-9">
      <div class="card" style="width: 100%;">
        <h2 class="card-header">
         {{ $flower->name }}

         <span style="float:right;"><a href="/admin/products/{{ $flower->id }}/edit" class="btn btn-warning">Edit Product</a></span>
       </h2>

       <ul class="list-group list-group-flush">
         <li class="list-group-item">{{ $flower->slug }}</li>
         <li class="list-group-item">{{ $flower->price1name }} - ${{ $flower->price1}}</li>
         <li class="list-group-item">{{ $flower->price2name }} - ${{ $flower->price2}}</li>
         <li class="list-group-item">{{ $flower->price3name }} - ${{ $flower->price3}}</li>
         <li class="list-group-item"><img src="/images/product/{{ $flower->image1 }}" height="200px"/>
           <img src="/images/product/{{ $flower->image2 }}" height="200px"/>
           <img src="/images/product/{{ $flower->image3 }}" height="200px"/>
           <img src="/images/product/{{ $flower->image4 }}" height="200px"/>
           <img src="/images/product/{{ $flower->image5 }}" height="200px"/></li>
         <li class="list-group-item">{{ $flower->dscr }}</li>
         <li class="list-group-item">
           @if ($flower->stock == true)
           <span class="badge badge-success">In Stock</span>
           @else
           <span class="badge badge-danger">Out of Stock</span>
           @endif
         </li>
         <li class="list-group-item">
           @if ($flower->best == true)
           <span class="badge badge-success">Best Sellers</span>
           @else
           <span class="badge badge-danger">Not Best Sellers</span>
           @endif
         </li>
         <li class="list-group-item">
           @if ($flower->new == true)
           <span class="badge badge-success">New</span>
           @else
           <span class="badge badge-danger">Not New</span>
           @endif
         </li>
         <li class="list-group-item">
           @foreach ($flower->collections as $collection)
           <h4>  <span class="badge badge-secondary">{{ $collection->name }}</span></h4>
           @endforeach
         </li>
       </ul>
      </div>
    </div>
  </div>
</div>
@stop
