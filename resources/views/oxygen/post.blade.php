@extends('layouts.oxygen2')

@section('content')
	<header class="uk-section-large uk-light uk-background-cover" style="background-image:url({{ $entry->featuredImage->getFile()->getUrl() }});">
	<div class="uk-container">
		<div class="uk-card uk-text-center animate-box" data-animate-effect="fadeIn">
			<h1 class="uk-h1">{{ $entry->title }}</h1>
		</div>
	</div>
	</header>
	<section class="uk-section uk-section-muted uk-dark">
    <div class="uk-container uk-container-small">
	@if(count($entry->categories) > 0)
	<ul class="single__categories">
		@foreach($entry->categories as $cat)
			<li class="single__categories__item">{{ $cat->name }}</li>
		@endforeach
	</ul>
	@endif
	{!! $renderer->render($entry->content) !!}
	</div>
	</section>
@endsection