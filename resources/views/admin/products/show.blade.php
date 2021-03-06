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
          <a href="/admin/products/{{ $flower->id }}/delete" class="btn btn-danger delete">Delete Product</a>
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
          {{--{{dd($flower)}}--}}
       <ul class="list-group list-group-flush">
         <li class="list-group-item">{{ $flower->slug }}</li>
         <li class="list-group-item">
             @foreach($flower->sizes as $size)
                 {{$size->display_name}}:
                @if($flower->sale)
                     ${{$size->pivot->price_old}} (${{$size->pivot->price_new}}) <br>
                @else
                     ${{$size->pivot->price}} <br>
                @endif

             @endforeach
         </li>
         <li class="list-group-item">
             @if ($flower->sale)
                 %{{ $flower->sale}}
             @else
                 no sale
             @endif
         </li>
         <li class="list-group-item"><img src="/images/product/{{ $flower->image1 }}" height="200px"/></li>
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
