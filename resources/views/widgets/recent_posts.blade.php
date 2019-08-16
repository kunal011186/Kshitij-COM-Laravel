<b>RECENT POSTS</b><br/>
@foreach ($posts as $post)
	<a href="{{route('show-post',['slug'=>$post->slug])}}"><b>{{$post->title}}</b></a><br/>
@endforeach
<br/>
<br/>