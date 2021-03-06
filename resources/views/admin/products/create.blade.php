@section('title', 'Create New Product')
@section('dscr', '')
@section('keywords', '')

@extends('admin.main')

@section('content')
<div class="container-fluid">
  <div class="row">
    <div class="col-md-3">
      <div class="card" style="width: 100%;">
        <h5 class="card-header">
          Fancy Flowers Products
        </h5>
        <div class="card-body">
          <a href="/admin/products" class="btn btn-info">All Products</a>
        </div>
      </div>
    </div>
    <div class="col-md-9">
      <div class="card" style="width: 100%;">
        <h5 class="card-header">Create New Product</h5>
        <div class="card-body">
          <form action="{{route('products.store')}}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="name">Name of the Product</label>
                <input type="text" name="name" class="form-control" id="name" placeholder="Name">
              </div>
              <div class="form-group col-md-6">
                <label for="stock">Availability</label>
                <select class="form-control" id="stock" name="stock">
                  <option value="1">In Stock</option>
                  <option value="0">Out of Stock</option>
                </select>
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="best">Best Sellers</label>
                <select class="form-control" id="best" name="best">
                  <option value="1">Yes</option>
                  <option value="0">No</option>
                </select>
              </div>
              <div class="form-group col-md-6">
                <label for="new">New Item</label>
                <select class="form-control" id="new" name="new">
                  <option value="1">Yes</option>
                  <option value="0">No</option>
                </select>
              </div>
            </div>
              <h5>Prices</h5>
            <div class="form-group">
                @foreach($sizes as $size)
                    <div class="form-group row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">Size {{$size->display_name}}</label>
                        <div class="col-sm-10">
                            <input type="number" name="prices[{{$size->name}}]" class="form-control" id="price_{{$size->name}}" placeholder="0.00" min="0.01" step=".01" pattern="^\d+(?:\.\d{1,2})?$" required>
                        </div>
                    </div>
                @endforeach
            </div>

              <div class="form-row">
                  <div class="form-group col-md-6">
                      <label for="sale">Sale %</label>
                      <input type="number" name="sale" class="form-control" id="sale" placeholder="0">
                  </div>
              </div>


            <div class="form-group">
              <label for="description">Quick Product Description</label>
              <textarea class="form-control" name="dscr" id="description" rows="3"></textarea>
            </div>
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="name">Slug</label>
                <input type="text" class="form-control" name="slug" id="name" placeholder="Slug">
              </div>
              <div class="col-md-6">
              @foreach ($collections as $collection)
                <div class="form-check form-check-inline" >
                  <input class="form-check-input" type="checkbox" id="collections" value="{{$collection->id}}" name="collections[]">
                  <label class="form-check-label" for="collections">{{ $collection->name }}</label>
                </div>
              @endforeach
                </div>
            </div>
            <div class="form-group">
              <label for="image1">Uplaod Image 1 (600x800)</label>
              <input type="file" class="form-control-file" name="image1" id="image1">
            </div>
            <hr>
            <button type="submit" class="btn btn-success">Create</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@stop
