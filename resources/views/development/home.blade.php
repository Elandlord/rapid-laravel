@extends('master')

@section('title')
    Development
@endsection

@section('content')

@include('partials.header.navbar', ['current' => ['ontwikkeling' => 'ontwikkeling']])

@include('partials.header.banner-domain-sale')
    
    <div class="bg-light">
        @include('partials.breadcrumbs.base', ['urlStructure' => ['Ontwikkeling' => '/ontwikkeling', 'applicaties' => '/ontwikkeling']])
    </div>

    <div class="bg-secondary">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 space-inside-lg">                
                    Ontwikkeling
                </div>
            </div>
        </div>
    </div>
@endsection