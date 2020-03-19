@extends('layouts.oxygen')

@section('content')
	<header id="gtco-header" class="gtco-cover gtco-cover-sm" role="banner" style="background-image:url(theme/oxygen/images/img_bg_1.jpg);">

	<div class="gtco-container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2 text-center">
				<div class="display-t">
					<div class="display-tc animate-box" data-animate-effect="fadeIn">
						<h1>Anggota dan Satgas</h1>
						<h2>Kemah Kerja Geomatika ITS ke X</h2>
					</div>
				</div>
			</div>
		</div>
	</div>
	</header>

	<div id="gtco-services">
		<div class="gtco-container">
			
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
	</div>

	<div id="gtco-features">
		<div class="gtco-container">
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
						<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#k{{ $i }}">More</button>
					</div>
				</div>
				@endfor
			</div>
		</div>
	</div>

	<div class="gtco-cover gtco-cover-sm" style="background-image:url(theme/oxygen/images/img_bg_3.jpg);">
		<div class="overlay"></div>
		<div class="gtco-container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center">
					<div class="display-t">
						<div class="display-tc animate-box" data-animate-effect="fadeIn">
							<h1>...</h1>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>	
<!-- Modal -->					
	@for($i=1; $i<=count($kelompok); $i++)
	<div class="modal fade" id="k{{ $i }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="myModalLabel">Kelompok {{ $i }}</h4>
			</div>
			<div class="modal-body">
			<div class="table-responsive">
				<table class="table table-bordered">
					<thead>
					<tr>
						<th>Nama</th>
						<th>Nrp</th>
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
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			</div>
			</div>
		</div>
	</div>
	@endfor
@endsection