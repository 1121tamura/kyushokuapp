@extends('layouts.layout')

@section('title','学校給食納品管理システム')

@section('content')

<nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top">
<div class="loginPage">
  <div class="container">
    <div class="loginPage_contents">
    <h1 class="h3 loginPage_contents_title">学校給食納品管理システム</h1>
    <div class="btn loginPage_contents_btn"><a class="text-white" href="{{ route('login') }}">　　　ログイン　　　</a></div>
    </div>
  </div>
</div>
</div>
@endsection