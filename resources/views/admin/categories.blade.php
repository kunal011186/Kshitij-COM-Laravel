@extends('admin.base')

@section('sub-menu')
    <!-- a href="{{route('create-post')}}">create post</a -->
@endsection

@section('title-bar','categories')

@section('content')
<form method="POST" action="{{route('save-post')}}">
    {{ csrf_field() }}
    Name: <input type='text' name='slug'/><br/>
    Slug: <input type='text' name='slug'/><br/>
    <button type="submit" name="action" value="publish">Add New</button>
</form>
@foreach($categories as $category)
    {{$post->name}} 
    {{$post->name}} 
    <br/>
@endforeach
@endsection