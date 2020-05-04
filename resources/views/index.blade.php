@extends('templates.base')
@section('title')
Kshitij colour of money
@stop

@section('content-title')
COLOUR OF MONEY<br>
{{$dt->format('l, F d, Y')}}
@stop
@section('content-body')
<div class="row">
	<div class="col-md-6 col-xs-12">

		<a href="http://test.kshitij.com/{!!$latestPost->post_name!!}">{!!$latestPost->post_title !!}</a><br>
 	<?php
 	$snippet=strip_tags($latestPost->post_content);
 	$subSnippet= substr($snippet,0,200);

 	?>
 	{!!$subSnippet!!}...
 	

	</div>

	<div class="col-md-6 col-xs-12">

		@foreach($currentPosts as $row)
 
 	<a href="http://test.kshitij.com/{!!$row->post_name!!}">{!!$row->post_title !!}</a><br>
 	<?php
 	$snippet=strip_tags($row->post_content);
 	$subSnippet= substr($snippet,0,50);

 	?>
 	{!!$subSnippet!!}...
 	
<br><br>
@endforeach

	</div>
	

</div>

@foreach($dataSettings as $keys => $value)

<a href="http://test.kshitij.com/{!!$keys!!}"><b>{!!$value !!}</b></a><br><br>

@foreach($posts[$keys] as $row)
 
 	<a href="http://test.kshitij.com/{!!$row->post_name!!}">{!!$row->post_title !!}</a><br>
 	<?php
 	$snippet=strip_tags($row->post_content);
 	$subSnippet= substr($snippet,0,100);

 	?>
 	{!!$subSnippet!!}...
 	
<br><br>
@endforeach
 <div style="float:right;"><a href="http://test.kshitij.com/{!!$keys!!}">More Article...</a></div>
@endforeach
 		
@stop
@section('sidebar')

@stop