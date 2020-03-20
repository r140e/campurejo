@extends('layouts.oxygen')

@section('content')
<header class="uk-section-xlarge uk-light uk-background-cover" style="background-image:url(theme/oxygen/images/img_bg_1.jpg);">
	<div class="uk-container">
		<div class="uk-card uk-text-center animate-box" data-animate-effect="fadeIn">
      <h1 class="uk-h1">Susunan Panitia</h1>
      <h2 class="uk-h2">Kemah Kerja Geomatika ITS ke X</h2>
		</div>
	</div>
</header>
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
@endsection