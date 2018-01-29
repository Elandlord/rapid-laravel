@extends('master')

@section('title')
Online werken
@endsection

@section('content')

    @include('partials.header.navbar', ['current' => ['hosting' => 'online-werken']])

    @include('partials.header.banner-domain-sale')
    
    <div class="bg-light">
        @include('partials.breadcrumbs.base', ['urlStructure' => ['Hosting' => '/', 'online werken' => '/hosting/online-werken']])
    </div>

    <div class="bg-secondary">
        <section class="container space-inside-xl">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="text-thin space-inside-down-sm"><span class="text-bold">Online werken in de cloud</span></h2>
                    <p class="text-color-accent-darken-md font-md"> Met online werken bij RAPIDE wordt samenwerken pas echt efficiënt. Vanuit de cloud beheer je eenvoudig je documenten, agenda en e-mail. </p>
                </div>
            </div>
        </section>
    </div>
@endsection