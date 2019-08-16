@extends('admin.base')

{{-- get today's date in local timezone --}}
<?php 
	//setting time zone 
	date_default_timezone_set('Asia/Kolkata');
	$todayDate = date("Y-m-d");
    $postSent = false;
    if (!empty($post))
    {
        $postSent = true;
    }
?>

@section('title-bar')
{{($postSent?'edit post':'create post')}}
@endsection

@section('content')
<div>
    <a href="{{route('media')}}" target="_blank"><b>Add Picture</b></a>
</div>
<form method="POST" action="{{route('save-post')}}">
    {{ csrf_field() }}
    @if ($postSent)
        <input type="hidden" name="id" value="{{$post->id}}">
    @endif
    Post Date: <input type='text' name='postdate' size='35' value='{{($postSent?$post->postdate:$todayDate)}}' /><br/>
    Slug: <input type='text' name='slug' size='35' value='{{($postSent?$post->slug:"")}}'/>
    <br/>
    Title: <input type='text' name='title' size='35' value='{{($postSent?$post->title:"")}}'/><br/>
    Content:<br/>
    <textarea rows="20" wrap="virtual" name="content" style="width: 100%">{{($postSent?$post->content:'')}}</textarea><br/>
    Excerpt:<br/>
    <textarea rows="3" wrap="virtual" name="excerpt" style="width: 100%">{{($postSent?$post->excerpt:'')}}</textarea><br/>
    <input type="hidden" name="published" value="{{($postSent?$post->published:0)}}" />
    <button type="submit" name="action" value="save">Save</button>&nbsp;&nbsp;&nbsp;
    @if ($postSent)
        <button type="button" onclick="window.open('{{route('show-post',['slug'=>$post->slug])}}')">Preview</button>&nbsp;&nbsp;&nbsp;
    @endif
    <button type="submit" name="action" value="publish">Publish</button>
</form>

@endsection