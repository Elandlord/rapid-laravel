@extends('master')

@section('title')
Telefonie
@endsection

@section('content')

    @include('partials.header.navbar', ['current' => ['hosting' => 'telefonie']])

    @include('partials.header.banner-domain-sale')
    
    <div class="bg-light">
        @include('partials.breadcrumbs.base', ['urlStructure' => ['Hosting' => '/', 'telefonie' => '/hosting/telefonie']])
    </div>


    <div class="bg-secondary">
        <section class="container space-inside-xl">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="text-thin space-inside-down-sm"><span class="text-bold">Bellen via het internet</span></h2>
                    <p class="text-color-accent-darken-md font-md"> Bij IP-telefonie, Voice over IP of VoIP wordt het internet of een ander IP-netwerk gebruikt om spraak te transporteren. Hierdoor wordt telefonie mogelijk op datanetwerken en ontstaat de mogelijkheid om de voorheen traditioneel gescheiden werelden van spraak en data samen te voegen. Hierdoor is nog slechts één infrastructuur nodig en kunnen bovendien nieuwe producten en diensten worden ontwikkeld. Het werken met op VoIP gebaseerde telefooncentrales is binnen bedrijven inmiddels gemeengoed geworden.</p>
                </div>
            </div>
        </section>
    </div>

    <div class="bg-light space-inside-down-md">
        <section class="container space-inside-xl">
            <div class="row">
                <div class="col-lg-4">
                    <div ></div>
                    <h3 class="text-color-accent space-outside-down-md"><i style="position: relative; top: 14px;" class="material-icons text-color-accent font-lg">perm_phone_msg</i><span class="space-inside-left-sm">Optimaal bereikbaar</span></h3>
                    <p>In ons online beheersysteem maken we jouw bedrijf optimaal bereikbaar voor jouw klanten. Met functies als belgroepen en openingstijden hoef je geen telefoontje van een potentiële klant meer te missen.</p>
                </div>

                <div class="col-lg-4">
                <h3 class="text-color-accent space-outside-down-md"><i style="position: relative; top: 14px;" class="material-icons text-color-accent font-lg">phonelink_setup</i><span class="space-inside-left-sm">Flexibel en betrouwbaar</span></h3>
                    <p>Telefonie via RAPIDE schaalt altijd mee met de grootte van je bedrijf. Onze servers zijn van de hoogste kwaliteit en worden continu gemonitord, zodat ze maximale uptime hebben.</p>
                </div>

                <div class="col-lg-4">
                <h3 class="text-color-accent space-outside-down-md"><i style="position: relative; top: 14px;" class="material-icons text-color-accent font-lg">attach_money</i><span class="space-inside-left-sm">Vriendelijk voor je portemonnee</span></h3>
                    <p>Bellen via RAPIDE is zeer voordelig. Je betaalt natuurlijk alleen voor wat je nodig hebt. Een telecomoplossing met telefoonnummer en gebruikersaccount heb je al voor € 7,- per maand.</p>
                </div>
            </div>
        </section>
    </div>  

    <div class="bg-secondary space-inside-down-md">
        <section class="container space-inside-xl">
            <div class="row all-row-centered">
                <div class="col-lg-12 space-inside-down-lg">
                    <h2 class="text-thin space-inside-down-sm space-inside-md text-left"><span class="text-bold">Wat zijn de kosten?</span></h2>

                    <p class="text-left">Je bepaalt zelf hoe uitgebreid je je telefonie maakt en betaalt alleen voor wat je gebruikt. Je zit nergens aan vast, want alle diensten zijn per dag opzegbaar.</p>

            </div>

            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 limit-width-xs max-width-xl space-outside-down-md all-col-centered">	
                <div class="shadow-xs shadow-md-hover transition-normal pointer no-overflow height-auto animated fadeIn wow">
                    
                    <div style="height: 200px; " class="image">	
                        <img style="object-fit:contain" src="/images/fixed/team1.jpg">
                    </div>

                    <div class="space-inside-sides-md space-inside-up-md">							  	
                        <h2 class="font-md text-bold space-outside-down-xs text-center">1-3 collega's</h2>
                        <p class="font-md text-center italic space-outside-down-sm"><span class="text-color-accent text-bold">&euro;</span> 7,- per collega per <strong>maand</strong></p>

                        <p style="line-height:18px;" class="inline-block text-color-accent-darken-md">
                            Wil je verzekerd zijn van de beste performance voor jouw webapplicaties? Kies dan voor een razendsnelle VPS.
                        </p>
                    </div>

                    <div class="text-center space-inside-md">
                        <button class="bg-accent bg-accent-hover-darken-xs transition-fast text-color-light space-inside-sides-lg border-curved space-inside-xs border-none">
                            Bereken je kosten
                        </button>
                    </div>

                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 limit-width-xs max-width-xl space-outside-down-md all-col-centered">	
                <div class="shadow-xs shadow-md-hover transition-normal pointer no-overflow height-auto animated fadeIn wow">
                    
                    <div style="height: 200px; " class="image">	
                        <img style="object-fit:contain" src="/images/fixed/team2.jpg">
                    </div>

                    <div class="space-inside-sides-md space-inside-up-md">							  	
                        <h2 class="font-md text-bold space-outside-down-xs text-center">4-19 collega's</h2>
                        <p class="font-md text-center italic space-outside-down-sm"><span class="text-color-accent text-bold">&euro;</span> 5,50 per collega per <strong>maand</strong></p>

                        <p style="line-height:18px;" class="inline-block text-color-accent-darken-md">
                            Wil je verzekerd zijn van de beste performance voor jouw webapplicaties? Kies dan voor een razendsnelle VPS.
                        </p>
                    </div>

                    <div class="text-center space-inside-md">
                        <button class="bg-accent bg-accent-hover-darken-xs transition-fast text-color-light space-inside-sides-lg border-curved space-inside-xs border-none">
                            Bereken je kosten
                        </button>
                    </div>

                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 limit-width-xs max-width-xl space-outside-down-md all-col-centered">	
                <div class="shadow-xs shadow-md-hover transition-normal pointer no-overflow height-auto animated fadeIn wow">
                    
                    <div style="height: 200px; " class="image">	
                        <img style="object-fit:contain" src="/images/fixed/team3.jpg">
                    </div>

                    <div class="space-inside-sides-md space-inside-up-md">							  	
                        <h2 class="font-md text-bold space-outside-down-xs text-center">20-50 collega's</h2>
                        <p class="font-md text-center italic space-outside-down-sm"><span class="text-color-accent text-bold">&euro;</span> 3,- per collega per <strong>maand</strong></p>

                        <p style="line-height:18px;" class="inline-block text-color-accent-darken-md">
                            Wil je verzekerd zijn van de beste performance voor jouw webapplicaties? Kies dan voor een razendsnelle VPS.
                        </p>
                    </div>

                    <div class="text-center space-inside-md">
                        <button class="bg-accent bg-accent-hover-darken-xs transition-fast text-color-light space-inside-sides-lg border-curved space-inside-xs border-none">
                            Bereken je kosten
                        </button>
                    </div>

                </div>
            </div>
        </section>
    </div>  

    <div class="bg-light space-inside-down-md">
        <section class="container space-inside-xl">
            <div class="row">
                <div class="col-lg-12 space-inside-down-lg">
                    <h2 class="text-thin space-inside-down-sm space-inside-md"><span class="text-bold">Referenties</span></h2>
                </div>

                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                    <a href="#">
                        <div class="image border border-secondary shadow-xs-hover transition-fast">
                            <img src="/images/fixed/rtvdrenthe.jpg" />
                        </div>
                    </a>
                </div>

                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                    <a href="#">
                        <div class="image border border-secondary shadow-xs-hover transition-fast">
                            <img src="/images/fixed/traveldeal.jpg" />
                        </div>
                    </a>
                </div>

                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                    <a href="#">
                        <div class="image border border-secondary shadow-xs-hover transition-fast">
                            <img src="/images/fixed/hanze.jpg" />
                        </div>
                    </a>
                </div>

                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                    <a href="#">
                        <div class="image border border-secondary shadow-xs-hover transition-fast">
                            <img src="/images/fixed/hackerone.jpg" />
                        </div>
                    </a>
                </div>

                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                    <a href="#">
                        <div class="image border border-secondary shadow-xs-hover transition-fast">
                            <img src="/images/fixed/duyvis-wiener.jpg" />
                        </div>
                    </a>
                </div>

                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                    <a href="#">
                        <div class="image border border-secondary shadow-xs-hover transition-fast">
                            <img src="/images/fixed/factogeo.jpg" />
                        </div>
                    </a>
                </div>
            </div>
        </section>
    </div>                
@endsection