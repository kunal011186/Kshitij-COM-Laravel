@extends('admin.base')

@section('title-bar','media manager')

@section('content')
<form method="post" action="{{route('file-upload',['folder'=>'post-pictures','keepFileName'=>1])}}" enctype="multipart/form-data">
	{{csrf_field()}}
	<input type="file" name="myfile" />
	<button type="submit" />Upload</button>
</form>
@endsection