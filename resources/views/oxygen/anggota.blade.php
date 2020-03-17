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
						<li class="active"><a href="#" data-tab="1"><span class="icon visible-xs"><i class="icon-aircraft-take-off"></i></span><span class="hidden-xs">UAV</span></a></li>
						<li><a href="#" data-tab="2"><span class="icon visible-xs"><i class="icon-signal"></i></span><span class="hidden-xs">GPS</span></a></li>
						<li><a href="#" data-tab="3"><span class="icon visible-xs"><i class="icon-anchor"></i></span><span class="hidden-xs">Bathymetri</span></a></li>
						<li><a href="#" data-tab="4"><span class="icon visible-xs"><i class="icon-globe2"></i></span><span class="hidden-xs">Oceanografi</span></a></li>
						<li><a href="#" data-tab="5"><span class="icon visible-xs"><i class="icon-triangle-down"></i></span><span class="hidden-xs">JKG</span></a></li>
						<li><a href="#" data-tab="6"><span class="icon visible-xs"><i class="icon-open-book"></i></span><span class="hidden-xs">Toponimi</span></a></li>
						<li><a href="#" data-tab="7"><span class="icon visible-xs"><i class="icon-moon2"></i></span><span class="hidden-xs">Pasut</span></a></li>
						<li><a href="#" data-tab="8"><span class="icon visible-xs"><i class="icon-graduation-cap"></i></span><span class="hidden-xs">Dosen Pembimbing</span></a></li>
					</ul>
					

					<!-- Tabs -->
					<div class="gtco-tab-content-wrap">
						<div class="gtco-tab-content tab-content active" data-tab-content="1"> 
							<div class="col-md-6">
								<div class="icon icon-xlg">
									<i class="icon-aircraft-take-off"></i>
								</div>
							</div>
							<div class="col-md-6">
								<h2>UAV</h2>
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
										@foreach($s1 as $s1)
										<tr>
											<td>{{ $s1->nama }}</td>
											<td>{{ $s1->nrp }}</td>
										</tr>
										@endforeach
										</tbody>
									</table>
								</div>
							</div>
						</div>
						<div class="gtco-tab-content tab-content" data-tab-content="2"> 
							<div class="col-md-6">
								<div class="icon icon-xlg">
									<i class="icon-signal"></i>
								</div>
							</div>
							<div class="col-md-6">
								<h2>GPS</h2>
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
										@foreach($s2 as $s2)
										<tr>
											<td>{{ $s2->nama }}</td>
											<td>{{ $s2->nrp }}</td>
										</tr>
										@endforeach
										</tbody>
									</table>
								</div>
							</div>
						</div>
						<div class="gtco-tab-content tab-content" data-tab-content="3"> 
							<div class="col-md-6">
								<div class="icon icon-xlg">
									<i class="icon-anchor"></i>
								</div>
							</div>
							<div class="col-md-6">
								<h2>Bathymetri</h2>
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
										@foreach($s3 as $s3)
										<tr>
											<td>{{ $s3->nama }}</td>
											<td>{{ $s3->nrp }}</td>
										</tr>
										@endforeach
										</tbody>
									</table>
								</div>
							</div>
						</div>
						<div class="gtco-tab-content tab-content" data-tab-content="4"> 
							<div class="col-md-6">
								<div class="icon icon-xlg">
									<i class="icon-globe2"></i>
								</div>
							</div>
							<div class="col-md-6">
								<h2>Oceanografi</h2>
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
										@foreach($s4 as $s4)
										<tr>
											<td>{{ $s4->nama }}</td>
											<td>{{ $s4->nrp }}</td>
										</tr>
										@endforeach
										</tbody>
									</table>
								</div>
							</div>
						</div>
						<div class="gtco-tab-content tab-content" data-tab-content="5"> 
							<div class="col-md-6">
								<div class="icon icon-xlg">
									<i class="icon-triangle-down"></i>
								</div>
							</div>
							<div class="col-md-6">
								<h2>JKG</h2>
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
										@foreach($s5 as $s5)
										<tr>
											<td>{{ $s5->nama }}</td>
											<td>{{ $s5->nrp }}</td>
										</tr>
										@endforeach
										</tbody>
									</table>
								</div>
							</div>
						</div>
						<div class="gtco-tab-content tab-content" data-tab-content="6"> 
							<div class="col-md-6">
								<div class="icon icon-xlg">
									<i class="icon-open-book"></i>
								</div>
							</div>
							<div class="col-md-6">
								<h2>Toponimi</h2>
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
										@foreach($s6 as $s6)
										<tr>
											<td>{{ $s6->nama }}</td>
											<td>{{ $s6->nrp }}</td>
										</tr>
										@endforeach
										</tbody>
									</table>
								</div>
							</div>
						</div>
						<div class="gtco-tab-content tab-content" data-tab-content="7"> 
							<div class="col-md-6">
								<div class="icon icon-xlg">
									<i class="icon-moon2"></i>
								</div>
							</div>
							<div class="col-md-6">
								<h2>Pasut</h2>
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
										@foreach($s7 as $s7)
										<tr>
											<td>{{ $s7->nama }}</td>
											<td>{{ $s7->nrp }}</td>
										</tr>
										@endforeach
										</tbody>
									</table>
								</div>
							</div>
						</div>
						<div class="gtco-tab-content tab-content" data-tab-content="8"> 
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
				@for ($i=0; $i<count($kelompok); $i++)
				<div class="col-md-4 col-sm-4 animate-box" data-animate-effect="fadeIn">
					<div class="feature-center">
						<span class="icon">
							<i class="icon-users"></i>
						</span>
						<h3>Kelompok {{ 1+$i }}</h3>
						<p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
						<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#k{{ 1+$i }}">More</button>
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
							<h1>Test 1 2 3</h1>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>	
<!-- Modal -->					
	@for($i=0; $i<count($kelompok); $i++)
	<div class="modal fade" id="k{{ 1+$i }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="myModalLabel">Kelompok {{ 1+$i }}</h4>
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

