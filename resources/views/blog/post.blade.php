@extends('layouts.oxygen2')

@section('content')
	<header class="uk-section-large uk-light uk-background-cover uk-background-secondary uk-background-blend-multiply" style="background-image:url({{ $entry->featuredImage->getFile()->getUrl() }});">
	<div class="uk-container">
		<div class="uk-card uk-text-center animate-box" data-animate-effect="fadeIn">
			<h1 class="uk-h1">{{ $entry->title }}</h1>
			@if(count($entry->categories) > 0)
			<div class="uk-flex uk-flex-center">
				@foreach($entry->categories as $cat)
					<button class="uk-button uk-margin-right" style="color: #333" disabled>{{ $cat }}</button>
				@endforeach
			</div>
			@endif
		</div>
	</div>
	</header>
	<section class="uk-section uk-section-muted uk-dark">
    <div class="uk-container uk-container-small">	
	{!! $renderer->render($entry->content) !!}
	</div>
	</section>
@endsection