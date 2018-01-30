@extends('master')

@section('title')
    Hosting
@endsection

@section('content')

@include('partials.header.navbar', ['current' => ['hosting' => 'home']])

@include('partials.header.banner-domain-sale')
    
    <div class="bg-light">
        @include('partials.breadcrumbs.base', ['urlStructure' => ['Hosting' => '/', 'home' => '/']])
    </div>

    <div class="bg-secondary">
        <div class="container space-inside-sm">
            <div class="row">
                <div class="col-lg-12 space-inside-lg">                
                    <!-- <hosting-list></hosting-list> -->
                </div>
            </div>
        </div>
    </div>
@endsection