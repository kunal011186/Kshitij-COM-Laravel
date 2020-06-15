@extends('templates.base')
@section('title')
Kshitij colour of money
@stop
@section('anything-else-in-html-head')
<style type="text/css">

	.home-intro{
	font-family: 'eausans_book';
    font-size: 14px;
    color: #34495e;
    background-color: #f7f7f7;
    padding: 20px;
    width: 98%
	}
</style>
@stop

@section('content-title')
<span style="font-size: 21px;font-weight: 700;font-family: 'lubalin_graph_demiregular';">COLOUR OF MONEY</span><br>
<span style="font-size: 14px;">{{$dt->format('l, F d, Y')}}</span>
@stop
@section('content-body')
<div class="row home-intro">
	<div class="col-md-6 col-xs-12">

		<b style="font-family:'lubalin_graph_demiregular';font-size: 21px;"><a style="color: inherit;" href="https://test.kshitij.com/{!!$latestPost->post_name!!}">{!!$latestPost->post_title !!}</a></b><br>
 	<?php
 	$snippet=strip_tags($latestPost->post_content);
 	$subSnippet= substr($snippet,0,200);

 	?>
 	{!!$subSnippet!!}...
 	

	</div>

	<div class="col-md-6 col-xs-12">

		@foreach($currentPosts as $row)
 
 	<b style="font-family:'lubalin_graph_demiregular';font-size: 18px;"><a style="color: inherit;" href="https://test.kshitij.com/{!!$row->post_name!!}">{!!$row->post_title !!}</a></b><br>
 	<?php
 	$snippet=strip_tags($row->post_content);
 	$subSnippet= substr($snippet,0,50);

 	?>
 	<p style="border-bottom: 1px solid #e0e0e0;
    margin-bottom: 0px;
     padding-bottom: 10px;
    cursor: pointer;">
 	{!!$subSnippet!!}...
 	</p>
@endforeach

	</div>
	

</div>
<div class="row" style="width: 98%">
@foreach($dataSettings as $keys => $value)

<h2 style="background-color: #5c5c5c;padding: 5px;margin-top: 20px;
    margin-bottom: 10px;font-size: 24px;"><a style="color:#fff;" href="https://test.kshitij.com/category/{!!$keys!!}"><b>{!!$value !!}</b></a></h2>

@foreach($posts[$keys] as $row)
 
 	<b style="font-family: 'lubalin_graph_demiregular';font-size: 18px;"><a style="color:inherit;" href="https://test.kshitij.com/{!!$row->post_name!!}">{!!$row->post_title !!}</a></b><br>
 	<?php
 	$snippet=strip_tags($row->post_content);
 	$subSnippet= substr($snippet,0,100);

 	?>
 	{!!$subSnippet!!}...
 	
<br><br>
@endforeach
 <div style="float:right;"><a style="color: #d6613a;font-size: 15px;font-weight: 700;" href="https://test.kshitij.com/category/{!!$keys!!}">More Article...</a></div>
@endforeach
</div>
@stop
@section('sidebar')

@stop