@extends('layouts.app')

@section('content')
<div class='uk-container uk-container-xsmall'>
    <div class='uk-card'> 
        <div class="uk-card-header">
            <p class="uk-card-title">Dashboard</p>
        </div>
        <div class="uk-card-body">
            @if (session('status'))
            <div class="" role="alert">
                {{ session('status') }}
            </div>
            @endif
            <span>Tambahkan data <a href="/toponimi">toponimi</a></span>
        </div>
    </div>
</div>
@endsection