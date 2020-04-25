@extends('layouts.oxygen')

@section('content')
	<header class="uk-section-xlarge uk-light uk-background-cover" style="background-image:url(theme/oxygen/images/img_bg_1.jpg);">
	<div class="uk-container">
		<div class="uk-card uk-text-center animate-box" data-animate-effect="fadeIn">
			<h1 class="uk-h1">Hidrografi</h1>
		</div>
	</div>
	</header>
	<section class="uk-section uk-section-muted uk-dark">
    <div class="uk-container">
	@foreach ($s1 as $s1)
	<div class="uk-card uk-child-width-1-2" uk-grid>
		@if ($s1->urutanKegiatan % 2 == 0)
    	<div class="uk-flex-last@s uk-card-media-right uk-cover-container">
			<img src="{{ $s1->thumbnail->getFile()->getUrl() }}"/>
			<canvas width="" height=""></canvas>
		</div>
		@else
		<div class="uk-card-media-left uk-cover-container">
			<img src="{{ $s1->thumbnail->getFile()->getUrl() }}"/>
			<canvas width="" height=""></canvas>
		</div>
		@endif
		<div>
			<div class="uk-card-body uk-background-default">
				<h2 class="uk-card-title">{{ $s1->nama }}</h2>
				<p>{!! $renderer->render($s1->deskripsi) !!}</p>
			</div>
		</div>
	</div>
	@endforeach
	</section>
@endsection