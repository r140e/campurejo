{{-- Blog Page --}}
@extends('blog.layout')

@section('body')
<h1 class="page-title">Our Latest Posts</h1>
<div class="row row-cols-1 row-cols-md-3">
    @if( count($entries) > 0 )
    @php $index = 0; @endphp
    @foreach($entries as $entry)    
    <div class="card">
        <img src="{{ $entry->featuredImage->getFile()->getUrl() }}"
        alt="{{ $entry->title }}" class="card-img-top">
        <div class="card-body">
            <div class="card-text">                        
            </div>
            <h3 class="card-title">{{ $entry->title }}</h3>
            <div class="card-text">
            @php
            $output = $renderer->render($entry->content);
            echo Str::limit(strip_tags($output), 250);
            @endphp
            <p>
            @if( count($entry->categories) > 0 )
                @foreach( $entry->categories as $cat )
                    <span class="card__category">{{ $cat->name }}</span>
                @endforeach
            @else
                <span class="card__category">Uncategorized</span>
            @endif
            </p>
            </div>
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
@endsection