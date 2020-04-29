@extends('layouts.oxygen')

@section('content')
	<header class="uk-section-xlarge uk-light uk-background-cover" style="background-image:url(theme/oxygen/images/img_bg_1.jpg);">
	<div class="uk-container">
		<div class="uk-card uk-text-center animate-box" data-animate-effect="fadeIn">
			<h1 class="uk-h1">Hidrografi</h1>
			<p>Pengukuran ini dilakukan untuk mendapatkan bentuk geografis dari permukaan bawah laut yang sejajar dengan garis pantai</p>
		</div>
	</div>
	</header>
	<section class="uk-section uk-section-muted uk-dark">

    <div class="uk-container">
	<h2 class="uk-margin">Tahapan</h2>
	<hr class="uk-divider-small">
	@foreach ($s1 as $s1)
	<div class="uk-grid-margin uk-grid" uk-grid="">
	@if ($s1->urutanKegiatan % 2 == 0)
		<div class="uk-grid-item-match uk-flex-middle uk-flex-auto uk-width-1-3@m">                        
			<div class="uk-panel uk-width-1-1">                
				<h2 class="uk-heading-small">
					<span class="uk-text-background">{{ $s1->nama }}</span>
				</h2>
				<p class="uk-text-lead">{!! $renderer->render($s1->deskripsi) !!}</p>
			</div>
		</div>
		<div class="uk-grid-item-match uk-flex-middle uk-flex-auto uk-width-2-3@m">
			<div class="uk-panel uk-width-1-1">
				<div class="uk-margin">
					<img class="uk-box-shadow-xlarge" alt="" src="{{ $s1->thumbnail->getFile()->getUrl() }}" uk-img=""/>
				</div>
			</div>                        
		</div>
	@else
		<div class="uk-grid-item-match uk-flex-middle uk-flex-auto uk-width-2-3@m">
			<div class="uk-panel uk-width-1-1">
				<div class="uk-margin">
					<img class="uk-box-shadow-xlarge" alt="" src="{{ $s1->thumbnail->getFile()->getUrl() }}" uk-img=""/>
				</div>
			</div>                        
		</div>
		<div class="uk-grid-item-match uk-flex-middle uk-flex-auto uk-width-1-3@m">                        
			<div class="uk-panel uk-width-1-1">                
				<h2 class="uk-heading-small">
					<span class="uk-text-background">{{ $s1->nama }}</span>
				</h2>
				<p class="uk-text-lead">{!! $renderer->render($s1->deskripsi) !!}</p>
			</div>                 
		</div>
	@endif
	</div>
	@endforeach
	<h2 class="uk-margin">Hasil</h2>
	<hr class="uk-divider-small">
	<div class="uk-child-width-1-2@s uk-child-width-1-3@m uk-flex-center uk-text-center" uk-grid>
		<div>
			<div class="uk-card uk-card-default">
				<div class="uk-card-media-top">
					<img src="/img/terasering.jpg" alt="">
				</div>
				<div class="uk-card-body">
					<h3 class="uk-card-title"><a href="#">asd</a></h3>
				</div>
			</div>
		</div>
		<div>
			<div class="uk-card uk-card-default">
				<div class="uk-card-media-top">
					<img src="/img/terasering.jpg" alt="">
				</div>
				<div class="uk-card-body">
					<h3 class="uk-card-title"><a href="#">asd</a></h3>
				</div>
			</div>
		</div>
		<div>
			<div class="uk-card uk-card-default">
				<div class="uk-card-media-top">
					<img src="/img/terasering.jpg" alt="">
				</div>
				<div class="uk-card-body">
					<h3 class="uk-card-title"><a href="#">asd</a></h3>
				</div>
			</div>
		</div>
	</div>
	</section>
@endsection