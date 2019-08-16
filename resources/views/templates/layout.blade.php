@extends('templates.base')

@section('body')
	<div class="container" style="background-color: white">
		<div style="border-bottom: 1px solid #992255">
			@if (Request::url() == URL::to('/'))
				<span style="font-size: 36px">{{ config('app.name') }}</span>
			@else
				<a href="{{URL::to('/')}}"><span style="font-size: 36px">{{ config('app.name') }}</span></a>
			@endif
			writings and artwork by Vani Murarka
			<!-- Begin MailChimp Signup Form -->
			<link href="//cdn-images.mailchimp.com/embedcode/horizontal-slim-10_7.css" rel="stylesheet" type="text/css">
			<style type="text/css">
				#mc_embed_signup{background:#fff; clear:left; font:14px Helvetica,Arial,sans-serif; width:100%;}
				/* Add your own MailChimp form style overrides in your site stylesheet or in this style block.
				   We recommend moving this block and the preceding CSS link to the HEAD of your HTML file. */
			</style>
			<div id="mc_embed_signup">
			<form action="//manaskriti.us9.list-manage.com/subscribe/post?u=f53b5fba3ea0926823889199d&amp;id=b948f39f1b" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
			    <div id="mc_embed_signup_scroll" style="text-align: left">
				<b>Every Saturday and Tuesday. SUBSCRIBE FOR UPDATES</b>
				<input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="email address" required>
			    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
			    <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_f53b5fba3ea0926823889199d_b948f39f1b" tabindex="-1" value=""></div>
			    <div class="clear"><input type="submit" value="SUBMIT" name="subscribe" id="mc-embedded-subscribe" class="button" style="background-color: gold;color:#990000"></div>
			    </div>
			</form>
			</div>

			<!--End mc_embed_signup-->
		</div>
		<div class="row">
			<div class="col-md-9">
				@yield('content')
			</div>
			<div class="col-md-3" style="padding-top: 20px">
				@yield('sidebar')
			</div>
		</div>
	</div>
@endsection