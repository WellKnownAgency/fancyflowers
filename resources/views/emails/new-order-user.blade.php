@extends('emails.order')

@php
    $style = [
    'body' => 'margin:0;padding:0;background:#f6f6f6;',
    'logo' => 'display:block;margin: auto;',
    'a' => 'color:#348eda;',
    'p' => 'font-family: Arial;color: #666666;font-size: 12px;',
    'h' => 'font-family:Arial;color: #111111;font-weight: 200;line-height: 1.2em;margin: 40px 20px;',
    'h1' => 'font-size: 36px;',
    'h2' => 'font-size: 28px;',
    'h3' => 'font-size: 22px;',
    'h4' => 'font-size: 20px;',
    'th' => 'font-family: Arial;text-align: left;color: #111111;',
    'td' => 'font-family: Arial;text-align: left;color: #111111;',
    ];
@endphp

@section('title')
    <h3 style="{{$style['h']}}{{$style['h3']}}">You order on "{{env('APP_NAME')}}"</h3>
@endsection

@section('extra')

@endsection
