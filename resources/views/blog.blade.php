@extends('layout/layout')   
@section('container')
@foreach($blog as $isi_blog)
<img src="img/{{$isi_blog->img}}" alt="" id="img">
<div class="box">
<a href=""><h1>{{$isi_blog->title}}</h1></a>
<p>
   {{$isi_blog->exerp}}
</p>
</div>
<br>
@endforeach
@endsection