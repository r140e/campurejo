@extends('layouts.oxygen')

@section('content')
	<header class="uk-section-xlarge uk-light uk-background-cover" style="background-image:url(theme/oxygen/images/img_bg_1.jfif);">
	<div class="uk-container">
		<div class="uk-card uk-text-center animate-box" data-animate-effect="fadeIn">
			<h1 class="uk-h1">Field Camp & Hidro</h1>
			<h2 class="uk-h2">Geomatika ITS ke X</h2>
			<p><a href="#" class="uk-button uk-button-primary">Get Started</a></p>
		</div>
	</div>
	</header>
	<section class="uk-section uk-section-muted">
    <div class="uk-container">
    <div class='uk-card uk-child-width-1-5@s uk-grid uk-grid-collapse uk-flex-middle' uk-grid=''>
        <div class='uk-card-body uk-width-3-5@s'>
            <div class="uk-grid-margin uk-grid uk-grid-stack">
                <div class="uk-width-1-1@m uk-first-column">                        
                <h2 class='uk-heading-bullet'>Tentang</h2>
                </div>
            </div>                
			<p>Campurejo adalah sebuah desa di Kecamatan Panceng, Kabupaten Gresik, provinsi Jawa Timur. Campurejo merupakan desa yang berbatasan langsung dengan Kabupaten Lamongan, bentuk geografis Campurejo seperti pistol yang mana pada bagian visornya terdapat 4 desa yaitu Paloh, Weru, Sidokumpul, Waru Lor</p>
			<p>Campurejo dipilih menjadi tempat studi kasus untuk melaksanakan kegiatan kemah kerja dan hidrografi oleh Teknik Geomatika ITS angkatan 2017</p>
        </div>
        <div class='uk-flex-last@s uk-card-media-left uk-cover-container uk-width-2-5@s'>
			<div class="gtco-video gtco-bg" style="background-image: url(img/terasering.jpg); ">
				<a href="https://www.youtube.com/watch?v=oWnwhCDzv7E" class="popup-youtube"><i class="icon-video2"></i></a>
				<div class="overlay"></div>
			</div>
        </div>               
    </div>
    </section>

	<div id="gtco-features">
		<div class="gtco-container">
		<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2 text-center gtco-heading gtco-heading-sm">
					<h2>Kegiatan</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4 col-sm-4">
					<div class="feature-center animate-box" data-animate-effect="fadeIn">
						<span class="icon">
							<i class="icon-triangle-down"></i>
						</span>
						<h3>Survey Terestris</h3>
						<p>Pengukuran dilakukan untuk mendapatkan bentuk topologi area studi kasus didarat menggunakan Waterpass, Total Station, GPS</p>
						<p><a href="#" class="btn btn-primary">Selengkapnya</a></p>
					</div>
				</div>
				<div class="col-md-4 col-sm-4">
					<div class="feature-center animate-box" data-animate-effect="fadeIn">
						<span class="icon">
							<i class="icon-anchor"></i>
						</span>
						<h3>Survey Hidrografi</h3>
						<p>Pengukuran ini dilakukan untuk mendapatkan bentuk geografis dari permukaan bawah laut yang sejajar dengan garis pantai</p>
						<p><a href="#" class="btn btn-primary">Selengkapnya</a></p>
					</div>
				</div>
				<div class="col-md-4 col-sm-4">
					<div class="feature-center animate-box" data-animate-effect="fadeIn">
						<span class="icon">
							<i class="icon-aircraft"></i>
						</span>
						<h3>Survey Eks Terestrial</h3>
						<p>Pengukuran dilakukan menggunakan wahana terbang yaitu drone untuk memetakan areanya tanpa kontak dengan area secara fisik</p>
						<p><a href="#" class="btn btn-primary">Selengkapnya</a></p>
					</div>
				</div>
			</div>
		</div>
	</div>

	<section class="uk-section uk-section-xsmall uk-background-cover" style="background-image:url(theme/oxygen/images/img_bg_2.jpg);">	
	<div class="uk-container">
		<div id="gtco-counter" class="gtco-counter">
			<div class="row">
				<div class="display-t">
					<div class="display-tc">
						<div class="col-md-3 col-sm-6 animate-box">
							<div class="feature-center">
								<span class="icon">
									<i class="icon-eye"></i>
								</span>
								<span class="counter js-counter" data-from="0" data-to="50" data-speed="5000" data-refresh-interval="50">1</span>
								<span class="counter-label">Titik Kontrol</span>
							</div>
						</div>
						<div class="col-md-3 col-sm-6 animate-box">
							<div class="feature-center">
								<span class="icon">
									<i class="icon-anchor"></i>
								</span>
								<span class="counter js-counter" data-from="0" data-to="1000" data-speed="5000" data-refresh-interval="50">1</span>
								<span class="counter-label">Titik Detail</span>
							</div>
						</div>
						<div class="col-md-3 col-sm-6 animate-box">
							<div class="feature-center">
								<span class="icon">
									<i class="icon-briefcase"></i>
								</span>
								<span class="counter js-counter" data-from="0" data-to="5000" data-speed="5000" data-refresh-interval="50">1</span>
								<span class="counter-label">Titik Kedalaman</span>
							</div>
						</div>
						<div class="col-md-3 col-sm-6 animate-box">
							<div class="feature-center">
								<span class="icon">
									<i class="icon-clock"></i>
								</span>
								<span class="counter js-counter" data-from="0" data-to="30" data-speed="5000" data-refresh-interval="50">1</span>
								<span class="counter-label">Data Toponimi</span>

							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	</section>

	<section class="uk-section uk-section-muted uk-dark">
    <div class="uk-container">
    <h2 class="uk-text-center">Blog</h2>
    <hr class="uk-divider-small uk-text-center"/>

		<div class="uk-child-width-1-2@s uk-child-width-1-3@m" uk-grid>
		@if( count($entries) > 0 )
		@php $index = 0; @endphp
		@foreach($entries as $entry) 
		<div>
			<div class="uk-card uk-card-default animate-box" data-animate-effect="fadeIn">
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