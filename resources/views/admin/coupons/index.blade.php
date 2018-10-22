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
          Fancy Flowers Coupons
        </div>
        <div class="card-body">
          <a href="/admin/coupons/create" class="btn btn-success">Create Collection</a>
        </div>
      </div>
    </div>
    <div class="col-md-9">
      <div class="card" style="width: 100%;">
        <div class="table-responsive">
          <table class="table">
            <thead class="thead-light">
              <tr>
                <th scope="col">Code</th>
                <th scope="col">Type</th>
                <th scope="col">Value</th>
                <th scope="col"></th>
                <th scope="col"></th>
              </tr>
            </thead>
            <tbody>
              @foreach ($coupons as $coupon)
              <tr>
                <th scope="row">{{ $coupon->code }}</th>
                <td>{{ $coupon->type }}</td>
                <td>{{ $coupon->value}}</td>
                <td>{{ $coupon->created_at}}</td>
                <td class="text-right">
                  <a href="/admin/coupons/{{ $coupon->id }}/delete" class="btn btn-danger btn-sm delete">Delete</a>
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
