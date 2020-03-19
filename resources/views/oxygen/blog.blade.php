@extends('layouts.oxygen')

@section('content')
	<header id="gtco-header" class="gtco-cover gtco-cover-sm" role="banner" style="background-image:url(theme/oxygen/images/img_bg_1.jpg);">

	<div class="gtco-container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2 text-center">
				<div class="display-t">
					<div class="display-tc animate-box" data-animate-effect="fadeIn">
						<h1>Blog</h1>
					</div>
				</div>
			</div>
		</div>
	</div>
	</header>
	<section>
		<div class="container">
			<div class="row">										
						@if( count($entries) > 0 )
						@php $index = 0; @endphp
						@foreach($entries as $entry)
						<div class="col-md-4">
						<div class="col-md-12">
							<div class="fh5co-blog animate-box">
								<a href="#"><img class="img-responsive" src="{{ $entry->featuredImage->getFile()->getUrl() }}" alt="{{ $entry->title }}"></a>
								<div class="blog-text">
									<span class="posted_on">{{ $entry->publishDate }}</span>
									@if( count($entry->categories) > 0 )
										@foreach( $entry->categories as $cat )
											<span class="comment">{{ $cat->name }}</span>
										@endforeach
									@else
										<span class="comment">Uncategorized</span>
									@endif
									<h3><a href="/blog/{{ $entry->slug }}">{{ $entry->title }}</a></h3>
									@php
									$output = $renderer->render($entry->content);
									echo Str::limit(strip_tags($output), 250);
									@endphp
									<p>										
								</div>
							</div>
						</div>
						</div>
						@endforeach							
						@else
						<div class="col-md-4">
						<div class="col-md-12">
							<div class="fh5co-blog animate-box">
								<a href="#"><img class="img-responsive" src="images/img-2.jpg" alt=""></a>
								<div class="blog-text">
									<span class="posted_on">Nov. 15th</span>
									<span class="comment">21</span>
									<h3><a href="#">Download Bundle Templates 2017</a></h3>
									<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
								</div> 
							</div>
						</div>							
						</div>
						@endif
				</div>
			</div>
		</div>
	</section>
@endsection