@extends('layouts.oxygen')

@section('content')
<header class="uk-section-xlarge uk-light uk-background-cover" style="background-image:url(theme/oxygen/images/img_bg_1.jpg);">
	<div class="uk-container">
		<div class="uk-card uk-text-center animate-box" data-animate-effect="fadeIn">
			<h1 class="uk-h1">Anggota, Panitia, dan Satgas</h1>
			<h2 class="uk-h2">Kemah Kerja Geomatika ITS ke X</h2>
		</div>
	</div>
</header>

<section class="uk-section">
    <div class="uk-container">
		<div class="row animate-box">
			<div class="col-md-8 col-md-offset-2 text-center gtco-heading">
				<h2>Satuan Tugas</h2>
			</div>
		</div>
		<div class="row animate-box">
			
			<div class="gtco-tabs">
				<ul class="gtco-tab-nav">
					<li><a href="#" data-tab="1"><span class="icon visible-xs"><i class="icon-aircraft-take-off"></i></span><span class="hidden-xs">UAV</span></a></li>
					<li><a href="#" data-tab="2"><span class="icon visible-xs"><i class="icon-signal"></i></span><span class="hidden-xs">GPS</span></a></li>
					<li><a href="#" data-tab="3"><span class="icon visible-xs"><i class="icon-anchor"></i></span><span class="hidden-xs">Bathymetri</span></a></li>
					<li><a href="#" data-tab="4"><span class="icon visible-xs"><i class="icon-globe2"></i></span><span class="hidden-xs">Oceanografi</span></a></li>
					<li><a href="#" data-tab="5"><span class="icon visible-xs"><i class="icon-triangle-down"></i></span><span class="hidden-xs">JKG</span></a></li>
					<li><a href="#" data-tab="6"><span class="icon visible-xs"><i class="icon-open-book"></i></span><span class="hidden-xs">Toponimi</span></a></li>
					<li><a href="#" data-tab="7"><span class="icon visible-xs"><i class="icon-moon2"></i></span><span class="hidden-xs">Pasut</span></a></li>
					<li class="active"><a href="#" data-tab="8"><span class="icon visible-xs"><i class="icon-graduation-cap"></i></span><span class="hidden-xs">Dosen Pembimbing</span></a></li>
				</ul>					
				<!-- Tabs -->
				<div class="gtco-tab-content-wrap">
				@for($i=1;$i<=count($nama_satgas);$i++)
					<div class="gtco-tab-content tab-content" data-tab-content="{{ $i }}"> 
						<div class="col-md-6">
							<div class="icon icon-xlg">						
									@foreach($nama_satgas[$i] as $n)
									<i class="icon-{{$n->icon}}"></i>
									@endforeach
							</div>
						</div>
						<div class="col-md-6">
							@foreach($nama_satgas[$i] as $n)
							<h2>{{ $n->nama }}</h2>
							<p>{{ $n->tugas }}</p>
							@endforeach
							<div class="table-responsive">
								<table class="table table-bordered">
									<thead>
									<tr>
										<th>Nama</th>
										<th>Nrp</th>
									</tr>
									</thead>
									<tbody>										
									@foreach($satgas[$i] as $s)
									<tr>
										<td>{{ $s->nama }}</td>
										<td>{{ $s->nrp }}</td>
									</tr>
									@endforeach
									</tbody>
								</table>
							</div>
						</div>
					</div>
				@endfor
					<div class="gtco-tab-content tab-content active" data-tab-content="8"> 
						<div class="col-md-6">
							<div class="icon icon-xlg">
								<i class="icon-graduation-cap"></i>
							</div>
						</div>
						<div class="col-md-6">
							<h2>Dosen Pembimbing</h2>
							<p>Paragraph placeat quis fugiat provident veritatis quia iure a debitis adipisci dignissimos consectetur magni quas eius nobis reprehenderit soluta eligendi quo reiciendis fugit? Veritatis tenetur odio delectus quibusdam officiis est.</p>

							<div class="table-responsive">
								<table class="table table-bordered">
									<thead>
									<tr>
										<th>Nama</th>
										<th>Nrp</th>
									</tr>
									</thead>
									<tbody>				
									<tr>
										<td>a</td>
										<td>b</td>
									</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<style type="text/css">
  .uk-container svg {
    height: 5rem;
  }
  .uk-container svg line {
    stroke: #5f39dd;
    stroke-width: 3px;
    stroke-linecap: round;
    stroke-dasharray: 2px 20px;
    animation: animateline 5s linear both infinite;
  }
  h3 {
    font-size: 1.1rem;
    color: #411fb2;
  }
  @-moz-keyframes animateline {
    from {
      stroke-dashoffset: 0;
    }
    to {
      stroke-dashoffset: -5rem;
    }
  }
  @-webkit-keyframes animateline {
    from {
      stroke-dashoffset: 0;
    }
    to {
      stroke-dashoffset: -5rem;
    }
  }
  @-o-keyframes animateline {
    from {
      stroke-dashoffset: 0;
    }
    to {
      stroke-dashoffset: -5rem;
    }
  }
  @keyframes animateline {
    from {
      stroke-dashoffset: 0;
    }
    to {
      stroke-dashoffset: -5rem;
    }
  }

</style>
<section class="uk-section uk-section-muted">
  <div class="uk-container uk-text-center">
  	<div class="row animate-box">
		<div class="col-md-8 col-md-offset-2 text-center gtco-heading">
			<h2>Susunan Panitia</h2>
		</div>
	</div>
    <div class="uk-flex-center uk-child-width-1-3@s uk-margin" uk-grid>

      <div class="uk-card uk-width-2-3@s">
        <div class="uk-card-body uk-card-default">
        <h3>Bendahara</h3>
        <p>Contentful, Drupal, WordPress, etc.</p>
        </div>
      </div>

      <div class="uk-card uk-width-expand@s">
        <div class="uk-card-body uk-card-default">
        <h3>Bendahara</h3>
        <p>Contentful, Drupal, WordPress, etc.</p>
        </div>
      </div>

    </div>
    
    <svg viewbox="0 0 10 100">
      <line x1="5" x2="5" y1="0" y2="100"/>
    </svg>

    <div class="uk-flex-center" uk-grid>

      <div class="uk-card">
        <div class="uk-card-body uk-card-default">
        <h3>Bendahara</h3>
        <p>Contentful, Drupal, WordPress, etc.</p>
        </div>
      </div>

      <div class="uk-card">
        <div class="uk-card-body uk-card-default">
        <h3>Bendahara</h3>
        <p>Contentful, Drupal, WordPress, etc.</p>
        </div>
      </div>

      <div class="uk-card">
        <div class="uk-card-body uk-card-default">
        <h3>Bendahara</h3>
        <p>Contentful, Drupal, WordPress, etc.</p>
        </div>
      </div>

    </div>

    <svg viewbox="0 0 10 100">
      <line x1="5" x2="5" y1="0" y2="100"/>
    </svg>

    <div class="uk-flex-center uk-margin" uk-grid>

      <div class="uk-card">
        <div class="uk-card-body uk-card-default">
        <h3>Bendahara</h3>
        <p>Contentful, Drupal, WordPress, etc.</p>
        </div>
      </div>

    </div>
  </div>
</section>

<section class="uk-section">
	<div class="uk-container">
		<div class="row animate-box">
			<div class="col-md-8 col-md-offset-2 text-center gtco-heading">
				<h2>List Kelompok</h2>
			</div>
		</div>
		<div class="row">
			@for ($i=1; $i<=count($nama_kelompok); $i++)
			<div class="col-md-4 col-sm-4 animate-box" data-animate-effect="fadeIn">
				<div class="feature-center">
					<span class="icon">
						<i class="icon-users"></i>
					</span>
					<h3>Kelompok {{ $i }}</h3>
					@foreach($nama_kelompok[$i] as $n)
					<p>{{$n->nama}}</p>
					@endforeach
					<button type="button" class="btn btn-primary" href="#k{{ $i }}" uk-toggle>More</button>
				</div>
			</div>
			@endfor
		</div>
	</div>
</section>
<!-- Modal -->					
@for($i=1; $i<=count($kelompok); $i++)
<div class="uk-modal-full" id="k{{ $i }}" uk-modal>
	<div class="uk-modal-dialog">
		<button class="uk-modal-close-full uk-close-large" type="button" uk-close></button>
		<div class="uk-grid-collapse uk-child-width-1-2@s uk-flex-middle" uk-grid>
			<div class="uk-background-cover" style="background-image: url('/img/home.jpg');" uk-height-viewport></div>
			<div class="uk-padding-large">
				<h1>Kelompok {{ $i }}</h1>
				<table class="uk-table uk-table-striped">
					<thead>
						<tr>
							<th>Nama</th>
							<th>NRP</th>
						</tr>
					</thead>
					<tbody>
					@foreach ($kelompok[$i] as $k)
						<tr>
							<td>{{ $k->nama }}</td>
							<td>{{ $k->nrp }}</td>
						</tr>
					@endforeach
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
@endfor
@endsection