@extends('templates.base')

@section('title')
	
@stop
@section('current-breadcrumb')
@section('breadcrumbs')
        @include('templates.breadcrumbs-diff')
@overwrite

@section('content-title')

@section('content-body')
<div>
{{  $postdata }}
</div>
@stop
 
@section('sidebar')

@stop