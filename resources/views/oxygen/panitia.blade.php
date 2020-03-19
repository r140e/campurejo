@extends('layouts.oxygen')

@section('content')
<header id="gtco-header" class="gtco-cover gtco-cover-sm" role="banner" style="background-image:url(theme/oxygen/images/img_bg_1.jpg);">
<div class="gtco-container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2 text-center">
            <div class="display-t">
                <div class="display-tc animate-box" data-animate-effect="fadeIn">
                    <h1>Susunan Panitia</h1>
                    <h2>Kemah Kerja Geomatika ITS ke X</h2>
                </div>
            </div>
        </div>
    </div>
</div>
</header>
<style type="text/css">
@import url("https://fonts.googleapis.com/css?family=Mukta:300,400,700");
.tooltip,
.container__sources:before,
.container__build:before,
.container__deploy:before {
  position: absolute;
  right: 0;
  bottom: 100%;
  color: #fff;
  background: #ffb238;
  text-transform: uppercase;
  font-size: 0.9rem;
  padding: 0.25rem 0.75rem;
  border-radius: 2.5px;
}
.card,
.container__sources div,
.container__build div {
  line-height: 2;
  background: #fff;
  padding: 1.2rem 1rem;
  border-radius: 4px;
  box-shadow: 0 2px 10px #e6e6e6;
}
* {
  box-sizing: border-box;
  margin: 0;
  padding: 0;
}
body {
  min-height: 100vh;
  width: 100%;
  font-family: 'Mukta', sans-serif;
  color: #5f39dd;
  background: #5f39dd;
}
.container {
  margin: 5vh 2.5vw;
  padding: 15vh 0;
  background: #fff;
  border-radius: 5px;
  display: flex;
  flex-direction: column;
  align-items: center;
  text-align: center;
}
.container svg {
  height: 5rem;
}
.container svg line {
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
p {
  font-size: 0.95rem;
  font-weight: 300;
}
.container__sources {
  display: flex;
  border-radius: 8px;
  padding: 1.5rem;
  background: #f9f9f9;
  position: relative;
}
.container__sources:before {
  content: 'data sources';
}
.container__sources div {
  text-align: left;
  margin: 0 1rem;
}
.container__build {
  padding: 10vh 10vw;
  border-radius: 8px;
  background: #f9f9f9;
  position: relative;
}
.container__build:before {
  content: 'build';
}
.container__build div {
  margin: 2rem 0;
}
.container__build div svg {
  width: 4rem;
  height: auto;
  fill: #5f39dd;
}
.container__deploy {
  background: #f9f9f9;
  padding: 1.5rem;
  border-radius: 8px;
  position: relative;
}
.container__deploy:before {
  content: 'deploy';
}
@media (max-width: 700px) {
  .container__sources {
    flex-direction: column;
  }
  .container__sources div {
    margin: 1rem 0;
  }
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
<!-- in a wrapping section include different containers for each step of the flow: data sources, build, deploy -->
<section class="container">

  <!-- in the build container show two cards, atop of one another and the first of one showing an SVG icon -->
  <div class="container__build">

    <div class="build--powered">
      <svg viewbox="0 0 100 100">
        <circle cx="50" cy="50" r="50"/>
      </svg>
      <p>powered by</p>
      <h3>GraphQL</h3>
    </div>

    <div class="build--stack">
        HTML · CSS · React
    </div>

  </div>
  
  <!-- include a simple line to divide the container, and animate it to show a connection between the different containers  -->
  <svg viewbox="0 0 10 100">
    <line x1="5" x2="5" y1="0" y2="100"/>
  </svg>

  <!-- in the sources container show three cards, side by side, or one atop the other on smaller viewports -->
  <div class="container__sources">

    <div class="sources--cms">
      <h3>CMSs</h3>
      <p>Contentful, Drupal, WordPress, etc.</p>
    </div>

    <div class="sources--markdown">
      <h3>Markdown</h3>
      <p>Documentation, Posts, etc.</p>
    </div>

    <div class="sources--data">
      <h3>Data</h3>
      <p>APIs, Databases, YAML, JSON, CSV, etc.</p>
    </div>

  </div>

  <!-- repeat the svg line to connect the second and third containers as well -->
  <svg viewbox="0 0 10 100">
    <line x1="5" x2="5" y1="0" y2="100"/>
  </svg>

  <!-- in the deploy container show simply text, without a wrapping card -->
  <div class="container__deploy">
    <h3>Static Web Host</h3>
    <p>Amazon S3, Netlify, GitHub Pages, Surge.sh, Aerobatic, Now.sh, & many more.</p>
  </div>

</section>
@endsection