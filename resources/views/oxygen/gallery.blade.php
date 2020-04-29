@extends('layouts.oxygen3')

@section('content')
	<section class="uk-section">
		<div class="uk-container">
			<div class="uk-margin-large">
				<h2 class="uk-text-center">Galery</h2>
				<hr class="uk-divider-small uk-text-center">
			</div>
			<div class="uk-child-width-1-4@l uk-child-width-1-3@m uk-child-width-1-2@s" uk-grid="masonry: true;">
			@if( count($gallery) > 0 )
			@php $index = 0; @endphp
			@foreach($gallery as $gallery)
			<div>
				<div class="uk-card" uk-lightbox="animation: slide" uk-grid="masonry: true;">
					<a class="uk-inline" href="{{ $gallery->foto->getFile()->getUrl() }}" data-caption='{{ $gallery->deskripsi }}'>
						<img src="{{ $gallery->foto->getFile()->getUrl() }}" alt="">
					</a>
					<div class="uk-card-badge uk-label">
						{{ $gallery->judul }}
					</div>
				</div>
			</div>
			<div>

    		</div>
			@endforeach
			@endif
			</div>
		</div>
	</section>
@endsection