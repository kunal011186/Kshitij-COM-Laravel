@extends('templates.base')

@section('content-body')

@foreach($posts as $row)
<a href="http://localhost/Kshitij-COM-Laravel/public/{!!$row['post_name']!!}"> {!!$row['post_title']!!}</a>
<br><br>
@endforeach
 		
@stop
@section('sidebar')

@stop