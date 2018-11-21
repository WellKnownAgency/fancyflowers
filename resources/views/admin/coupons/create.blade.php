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
          Fancy Flowers Coupons
        </h5>
        <div class="card-body">
          <a href="/admin/coupons" class="btn btn-info">All Coupons</a>
        </div>
      </div>
    </div>
    <div class="col-md-9">
      <div class="card" style="width: 100%;">
        <h5 class="card-header">Create New Coupon</h5>
        <div class="card-body">
          <form action="{{route('coupons.store')}}" method="post">
            {{ csrf_field() }}
            <div class="form-row">
              <div class="form-group col-md-4">
                <label for="code">Code</label>
                <input type="text" name="code" class="form-control" id="code" placeholder="Code">
              </div>
              <div class="form-group col-md-4">
                <label for="type">Type</label>
                <select class="form-control" id="type" name="type">
                  <option value="fixed">Fixed Type</option>
                  <option value="percent">Percent Type</option>
                </select>
              </div>
              <div class="form-group col-md-4">
                <label for="value">Value</label>
                <input type="number" class="form-control" name="value" id="value" placeholder="Value">
              </div>
            </div>

            <button type="submit" class="btn btn-success">Create</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@stop
