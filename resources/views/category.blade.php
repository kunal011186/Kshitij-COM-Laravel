
@extends('templates.base')

@section('title')
 {{$category}} Archives- Kshitij colour of money

@stop
@section('current-breadcrumb')

<a href="">{{$category}}</a>

@stop
@section('breadcrumbs')
        @include('templates.breadcrumbs-diff')
@overwrite

@section('content-title', $category)
@section('content-body')

@foreach($posts as $row)
 

 	

 	<br><a href="http://test.kshitij.com/{!!$row->post_name!!}">{!!$row->post_title !!}</a><br>
 	<?php
 	$snippet=strip_tags($row->post_content);
 	$subSnippet= substr($snippet,0,200);

 	?>
 	{!!$subSnippet!!}...
 	
<br><br>
@endforeach
 

           
@stop
@section('sidebar')

@stop