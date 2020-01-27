@extends('templates.base')

@section('title')

{!! $postTitle !!}
	
@stop

@if($category !='')
@section('current-breadcrumb')

<a href="https://colourofmoney.kshitij.com/{{$categoryLink}}">{{$category}}</a>

@stop
@endif
@section('breadcrumbs')
        @include('templates.breadcrumbs-diff')
@overwrite

@section('content-title')

{{$postTitle}}<br><span class="d-kshitij-iconcalendar"></span>{{$postTime}} <span class="d-kshitij-iconuser"></span>By {{$author}}
@stop
@section('content-body')
<div>
{!!  $postdata !!}
</div>
<div class="">
            <div class="d-widget11">
                <div class="col-sm-3 col-md-2">
                    <img class="d-userimg img-responsive" src="{{asset('images/profile-pics/'.$author.'.jpg')}}">
                </div>
                <div class="">
                    <h4 class="d-username text-muted">{{$author}}
                                                    <a target="_blank" href="http://in.linkedin.com/in/vikrammurarka"><span class="d-kshitij-iconlinkedin2 pull-right icons"></span></a>
                            <a target="_blank" href="https://twitter.com/VikramMurarka"><span class=" d-kshitij-icontwitter pull-right icons"></span></a>
                        
                    </h4>
                    <p class="text-muted">{!! $authorDesc !!}</p>
                </div>
                <div class="clearfix"></div>
            </div>
        </div> 
@stop
 
@section('sidebar')

@stop