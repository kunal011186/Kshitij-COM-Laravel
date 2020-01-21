
@extends('templates.base')

@section('title')
 
@stop
@section('current-breadcrumb')
@section('breadcrumbs')
        @include('templates.breadcrumbs-diff')
@overwrite

@section('content-title')
@section('content-body')

@foreach($objects as $row)
 {!!$row!!}
<br><br>
@endforeach


           
@stop
@section('sidebar')

@stop