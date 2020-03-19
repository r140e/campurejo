@extends('layouts.oxygen')

@section('content')
	<header id="gtco-header" class="gtco-cover" role="banner" style="background-image:url(theme/oxygen/images/img_bg_1.jfif);">
		<div class="gtco-container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center">
					<div class="display-t">
						<div class="display-tc animate-box" data-animate-effect="fadeIn">
							<h1>Field Camp & Hidro</h1>
							<h2>Geomatika ITS ke X</h2>
							<p><a href="#" class="btn btn-default">Get Started</a></p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>

	<div id="gtco-features-2">
		<div class="gtco-container">
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2 text-center gtco-heading gtco-heading-sm">
					<h2>Tentang Campurejo</h2>
				</div>
			</div>
			<div class="row animate-box">
				<div class="col-md-6">
					<p>Campurejo adalah sebuah desa di Kecamatan Panceng, Kabupaten Gresik, provinsi Jawa Timur. Campurejo merupakan desa yang berbatasan langsung dengan Kabupaten Lamongan, bentuk geografis Campurejo seperti pistol yang mana pada bagian visornya terdapat 4 desa yaitu Paloh, Weru, Sidokumpul, Waru Lor</p>
				</div>
				<div class="col-md-6">
					<p>Campurejo dipilih menjadi tempat studi kasus untuk melaksanakan kegiatan kemah kerja dan hidrografi oleh Teknik Geomatika ITS angkatan 2017</p>
					<p><a href="/web" class="btn btn-primary">Selengkapnya</a></p>
				</div>
			</div>
		</div>
	</div>

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
						<p><a href="#" class="btn btn-primary">Learn More</a></p>
					</div>
				</div>
				<div class="col-md-4 col-sm-4">
					<div class="feature-center animate-box" data-animate-effect="fadeIn">
						<span class="icon">
							<i class="icon-anchor"></i>
						</span>
						<h3>Survey Hidrografi</h3>
						<p>Pengukuran ini dilakukan untuk mendapatkan bentuk geografis dari permukaan bawah laut yang sejajar dengan garis pantai</p>
						<p><a href="#" class="btn btn-primary">Learn More</a></p>
					</div>
				</div>
				<div class="col-md-4 col-sm-4">
					<div class="feature-center animate-box" data-animate-effect="fadeIn">
						<span class="icon">
							<i class="icon-aircraft"></i>
						</span>
						<h3>Survey Eks Terestrial</h3>
						<p>Pengukuran dilakukan menggunakan wahana terbang yaitu drone untuk memetakan areanya tanpa kontak dengan area secara fisik</p>
						<p><a href="#" class="btn btn-primary">Learn More</a></p>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div id="gtco-counter" class="gtco-bg gtco-counter" style="background-image:url(theme/oxygen/images/img_bg_2.jpg);">
		<div class="gtco-container">
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

	<div id="gtco-blog" class="gtco-section">
		<div class="gtco-container">
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2 text-center gtco-heading">
					<h2>Blog</h2>
				</div>
			</div>
			<div class="row">
				@if( count($entries) > 0 )
				@php $index = 0; @endphp
				@foreach($entries as $entry)    
				<div class="col-md-4 col-xs-6 col-1 animate-box" data-animate-effect="fadeIn">
					<div class="thumbnail">
					<img src="{{ $entry->featuredImage->getFile()->getUrl() }}" alt="{{ $entry->title }}" class="img-rounded">
					</div>
					<div class="card-body">
						@if( count($entry->categories) > 0 )
							@foreach( $entry->categories as $cat )
								<span>{{ $cat->name }}</span>
							@endforeach
						@else
								<span>Uncategorized</span>
						@endif
						<h3>{{ $entry->title }}</h3>
						<p>			
						@php
						$output = $renderer->render($entry->content);
						echo Str::limit(strip_tags($output), 150);
						@endphp
						</p>												
						<a href="/blog/{{ $entry->slug }}" class="btn btn-primary">Read More</a>
					</div>
				</div>
				@endforeach
				@else
				<div class="card text-center">
				<div class="card-body">
				<h5 class="card-title">Card title</h5>
				<p class="card-text">This card has a regular title and short paragraphy of text below it.</p>
				<p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
				</div>
				</div>
				@endif
			</div>
		</div>
	</div>
@endsection