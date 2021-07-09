@extends('layouts.app')

@section ('content')
<h1> All Blogs Data </h1>
<table boder="1">
@foreach ($posts as $post)
<tr>
    <td><img src="{{asset('images/' . $post->image_path) }}"  width="400" >
</td>
<td><h2>Title:{{$post->title}}</h2>
<h4>Details:<p>{{$post->description}}</p></h4></td>
</tr>

@endforeach
</table>
<div class ="col-sm-6">
<a href="/">go back</a>
</div>
<div class= "d-flex">
    <div class= "mx-auto">
    {{$posts->links()}}
</div>
</div>




@endsection