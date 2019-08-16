@extends('templates.base')

@section('title')
	{{$post->title}} 
@stop

@section('content-body')
<div style="margin-top: 20px;margin-bottom: 10px;">
	<div style="font-size: 30px;float: left">{{$post->title}}</div>
	<div style="float: right">
		<?php 
	    $date=date_create($post->postdate);
		$date = date_format($date,"jS M Y");
	    ?>
	    <i>{{$date}}</i>
	</div>
	<div style="clear: both;"></div>
</div>
{!! nl2br($post->content) !!}
<hr/>
<div style="margin-top: 10px;text-align: center;">
	<div class="pull-left">
		<a href="{{route('previous',['id'=>$post->id])}}"><b>< Previous</b></a>
	</div>
	<div class="pull-right">
		Next >
	</div>
	@if (Auth::check())
		<a href="{{route('edit-post',['id'=>$post->id])}}"><b>Edit</b></a>
	@endif
</div>
@stop

@section('sidebar')

@stop