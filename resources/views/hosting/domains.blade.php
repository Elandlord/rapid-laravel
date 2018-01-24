@extends('master')

@section('title')
Hosting
@endsection

@section('content')

    @include('partials.header.navbar', ['current' => ['hosting' => 'domeinen']])

    @include('partials.header.banner-domain-sale')
    
    <div class="bg-light">
        @include('partials.breadcrumbs.base', ['urlStructure' => ['Hosting' => '/', 'domeinen' => '/hosting/domeinen']])
    </div>

    <div class="bg-secondary">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 space-inside-lg">
                    <domain-list></domain-list>
                </div>
            </div>
        </div>
    </div>
@endsection