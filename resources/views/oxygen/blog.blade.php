@extends('layouts.oxygen')

@section('content')
	<header class="uk-section-xlarge uk-light uk-background-cover" style="background-image:url(theme/oxygen/images/img_bg_1.jpg);">
	<div class="uk-container">
		<div class="uk-card uk-text-center animate-box" data-animate-effect="fadeIn">
			<h1 class="uk-h1">Blog</h1>
		</div>
	</div>
	</header>
	<section class="uk-section uk-section-muted uk-dark">
    <div class="uk-container">
		<div class="uk-child-width-1-2@s uk-child-width-1-3@m" uk-grid>
		@if( count($entries) > 0 )
		@php $index = 0; @endphp
		@foreach($entries as $entry) 
		<div>
			<div class="uk-card uk-card-default">
				<div class="uk-card-media-top">
					<img src="{{ $entry->featuredImage->getFile()->getUrl() }}" alt="{{ $entry->title }}">
					<div class="uk-card-badge uk-label">
					@if( count($entry->categories) > 0 )
						@foreach( $entry->categories as $cat )
							{{ $cat->name }}
						@endforeach
					@else
						Uncategorized
					@endif
					</div>
				</div>
				<div class="uk-card-body">
					<h3 class="uk-card-title"><a href="/blog/{{ $entry->slug }}">{{ $entry->title }}</a></h3>
					<p>
					@php
					$output = $renderer->render($entry->content);						
					echo Str::limit(strip_tags($output), 150);						
					@endphp
					</p>
				</div>
			</div>
		</div>
		@endforeach
		@endif
		</div>
	</div>
	</section>
@endsection