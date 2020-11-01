@extends('layouts.layout')

@section('content')

<div class="homePage">
  <div class="container">
    <div class="homePage_contents">
    <h1 class="h3 homePage_contents_title">マスタ登録・修正・削除</h1>
    <div class="btn  homePage_contents_btn"><a class="text-white" href="{{ route('hinmeiadd') }}">　　　品名マスタ登録　　　</a></div>
    <p></p>
    <div class="btn  homePage_contents_btn"><a class="text-white" href="{{ route('tokuisakiadd') }}">　　　得意先マスタ登録　　　</a></div>
    <p></p>
    <div class="btn  homePage_contents_btn"><a class="text-white" href="{{ route('seisanshaAdd') }}">　　　生産者マスタ登録　　　</a></div>
    <p></p>
    <div class="btn  homePage_contents_btn"><a class="text-white" href="{{ route('jushoAdd') }}">　　　住所マスタ登録　　　</a></div>
    <p></p>
    <div class="btn  homePage_contents_btn"><a class="text-white" href="{{ route('taniAdd') }}">　　　単位マスタ登録　　　</a></div>
   </div>
  </div>
</div>

@endsection
