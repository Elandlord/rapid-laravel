@extends('master')

@section('title')
Domeinen
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

    <div class="bg-light space-inside-down-md">
        <section class="container space-inside-xl">
            <div class="row">
                <div class="col-lg-4">
                    <div ></div>
                    <h3 class="text-color-accent space-outside-down-md"><i style="position: relative; top: 14px;" class="material-icons text-color-accent font-lg">bug_report</i><span class="space-inside-left-sm">Spamfilter</span></h3>
                    <p>Alle klanten krijgen standaard het lite anti-spam pakket. Extra uitgebreide spamfilters zijn er al vanaf € 1,99 per maand per domeinnaam. Wij hanteren geen eenmalige kosten en alle prijzen zijn per maand en exclusief 21% BTW. </p>
                    <div class="space-inside-sm">
                        <a class="text-color-accent pointer">Lees meer</a>
                    </div>
                </div>

                <div class="col-lg-4">
                <h3 class="text-color-accent space-outside-down-md"><i style="position: relative; top: 14px;" class="material-icons text-color-accent font-lg">lock</i><span class="space-inside-left-sm">Beveiligingscheck/Pen Testing</span></h3>
                    <p>Identificeer en elimineer de zwakke plekken in uw ICT-infrastructuur met Pen Testing. Gerenommeerde en ervaren ethische hackers laten u zien waar en hoe uw bedrijfsnetwerk met succes kan worden aangevallen en adviseert u wat u daar het beste tegen kunt doen.</p>
                    <div class="space-inside-sm">
                        <a class="text-color-accent pointer">Lees meer</a>
                    </div>
                </div>

                <div class="col-lg-4">
                <h3 class="text-color-accent space-outside-down-md"><i style="position: relative; top: 14px;" class="material-icons text-color-accent font-lg">security</i><span class="space-inside-left-sm">SSL</span></h3>
                    <p>Met een SSL- certificaat verzorgt u voor uw bezoekers een veilige, betrouwbare omgeving. Nadat uw SSL certificaat geactiveerd is, koppelen wijdeze direct aan uw huidige webhostingpakket of VPS server. U kunt meteen aan de slag!</p>
                    <div class="space-inside-sm">
                        <a class="text-color-accent pointer">Lees meer</a>
                    </div>
                </div>
            </div>
        </section>
    </div>  

    <div class="bg-secondary">
        <section class="container space-inside-xl">
            <div class="row">
                <div class="col-lg-6">
                    <div class="image">
                        <img src="/images/fixed/pen-testing.png" />
                    </div>
                </div>
                <div class="col-lg-6">
                    <h3 class="text-color-accent font-md">Voordelen van Pen Testing</h3>
                    <ul class="reset-padding space-inside-md xs-space-inside-sides-md">
                        <li class="text-bold">Versterking ICT-infrastructuur</li>
                        <p>Effectief optreden tegen kwetsbaarheden van uw bedrijfsnetwerk.</p>
                        <li class="text-bold space-inside-up-sm">Veilig bedrijfsnetwerk</li>
                        <p>Door Pen Testing zijn er minder mogelijkheden voor kwaadwillenden om uw bedrijfsnetwerk binnen te dringen. Zo kunt u vertrouwen op een sterk en veilig bedrijfsnetwerk.</p>
                        <li class="text-bold space-inside-up-sm">Inzicht</li>
                        <p>Na afloop van een pen test ontvangt u heldere rapportages en praktisch advies over de zwakke plekken in uw ICT-infrastructuur.</p>
                    </ul>
                </div>
            </div>
        </section>
    </div>
@endsection