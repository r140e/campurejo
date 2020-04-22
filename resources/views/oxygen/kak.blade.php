@extends('layouts.oxygen')

@section('content')
	<header class="uk-section-xlarge uk-light uk-background-cover" style="background-image:url(theme/oxygen/images/img_bg_1.jpg);">
	<div class="uk-container">
		<div class="uk-card uk-text-center animate-box" data-animate-effect="fadeIn">
			<h1 class="uk-h1">Kerangka Acuan Kerja</h1>
		</div>
	</div>
	</header>
	<section class="uk-section uk-section-muted uk-dark">
    <div class="uk-container uk-container-small">	
	<div>
		<!-- Nav tabs -->
		<ul class="nav nav-tabs" role="tablist">
			<li role="presentation" style="width: 50%; text-align: center;" class="active"><a href="#pengukuran" aria-controls="pengukuran" role="tab" data-toggle="tab">Pengukuran dan Pengolahan Data</a></li>
			<li role="presentation" style="width: 50%; text-align: center;"><a href="#penyajian" aria-controls="penyajian" role="tab" data-toggle="tab">Pengolahan dan Penyajian Data</a></li>
		</ul>
		<!-- Tab panes -->
		<div class="tab-content uk-margin">
			<div role="tabpanel" class="tab-pane active" id="pengukuran">{!! $renderer->render($p1->content) !!}</div>
			<div role="tabpanel" class="tab-pane" id="penyajian">{!! $renderer->render($p2->content) !!}</div>
		</div>
	</div>
	</section>
@endsection