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
          <a href="/admin/collections" class="btn btn-info">All Collections</a>
        </div>
      </div>
    </div>
    <div class="col-md-9">
      <div class="card" style="width: 100%;">
        <h5 class="card-header">Create New Collection</h5>
        <div class="card-body">
          <form action="{{action('CollectionController@update', $collection->id)}}" method="POST" method="post">
            {{ csrf_field() }}
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="name">Name of the Collection</label>
                <input type="text" name="name" class="form-control" id="name" placeholder="Name" value="{{$collection->name}}">
              </div>
              <div class="form-group col-md-6">
                <label for="name">Slug</label>
                <input type="text" class="form-control" name="slug" id="name" placeholder="Slug" value="{{$collection->slug}}">
              </div>
            </div>

            <button type="submit" class="btn btn-success">Save Changes</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@stop
