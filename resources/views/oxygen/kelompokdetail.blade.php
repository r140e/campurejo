@extends('layouts.oxygen3')

@section('content')
	<header class="uk-section-large uk-light uk-background-secondary">
	<div class="uk-container">
		<div class="uk-card uk-text-center animate-box" data-animate-effect="fadeIn">
			<p class="uk-h1">Kelompok {{ $entry->slug }}</p>
			<h2 class="uk-h1">({{ $entry->nama }})</h2>
		</div>
	</div>
	</header>
	<section class="uk-section uk-section-muted uk-margin">
		<div class="uk-container uk-margin">
			<div class="uk-child-width-1-3@s" uk-grid>
				<div class="uk-width-expand@m" uk-grid>
					<div class="uk-card uk-width-medium@s uk-width-1-2">
						<div class="uk-card-media-top">
							<img src="{{ $entry->logo->getFile()->getUrl() }}?w=300&" alt=""/>
						</div>
						<div class="uk-card-body uk-padding-remove-horizontal">
							{{ $entry->deskripsiNamaKelompok }}
						</div>
					</div>
					<div class="uk-width-expand">
						<h4>Pengerjaan</h4>
						<p>{{ $entry->deskripsiKelompok }}</p>
						@foreach ($entry->alat as $a)
							<button class="uk-button uk-button-small uk-button-default">{{ $a }}</button>
						@endforeach
					</div>
				</div>
				<div class="uk-width-1-3@m uk-card uk-card-default uk-card-body">
					<ul class="uk-list">
					<h3>Anggota</h3>
					@foreach ($entry->anggota as $a)
						<li>{{ $a }}</li>
					@endforeach
					</ul>
				</div>					
			</div>
		</div>
		<div class="uk-container uk-margin">
			<h2>Keterangan</h2>
			<hr class="uk-divider-small">
			<div class="uk-background-default uk-padding-remove">
				<div class="uk-padding">
					<div class="uk-child-width-1-3@s" uk-grid>
						<div class="uk-width-2-3@s">
							{!! $renderer->render($entry->keterangan) !!}
						</div>
						<div class="uk-width-1-3@s">
							<h3>Hasil</h3>
							{!! $renderer->render($entry->hasil) !!}
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="uk-container uk-margin">
			<h2>Lokasi Pengukuran</h2>
			<hr class="uk-divider-small">
			<div id="map" class="uk-height-large"></div>
		</div>
		<script type="text/javascript">
			var map = L.map('map').setView([-6.877413889,112.4486361], 17);
			L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png').addTo(map);
			var kelompok7 = <?php echo json_encode($entry->lokasi); ?>;
			L.geoJSON(kelompok7).addTo(map);
		</script>
		<div class="uk-container uk-margin">
			<h2>Dokumentasi</h2>
			<hr class="uk-divider-small">
			<div class="uk-child-width-1-3@m uk-child-width-1-2@s uk-grid-collapse uk-flex-center uk-margin" uk-grid="masonry: true;">
				@foreach ($entry->dokumentasi as $d)
					<div uk-lightbox>
						<a href="{{ $d->getFile()->getUrl() }}"><img src="{{ $d->getFile()->getUrl() }}"/></a>
					</div>
				@endforeach
			</div>
		</div>
		<div class="uk-container uk-margin">
			<h2>Kelompok Lainnya</h2>
			<hr class="uk-divider-small">
			<div class="uk-child-width-1-4@m uk-child-width-1-3@s uk-child-width-1-2 uk-margin" uk-grid>
			@if( count($entries) > 0 )
			@php $index = 0; @endphp
			@foreach($entries as $entry)
			<div>
				<div class="uk-card uk-card-body uk-card-primary uk-flex uk-flex-center uk-flex-middle uk-text-center">
					<h3 class="uk-card-title"><a href="/kelompok/{{ $entry->slug }}">Kelompok {{ $entry->slug }}</a></h3>
				</div>
			</div>
			@endforeach
			@endif
			</div>
		</div>
	</section>
@endsection