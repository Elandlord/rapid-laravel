<nav class="navbar navbar-inverse navbar-fixed-top bg-main border-none border-top border-accent shadow-bottom">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="/"><img src="/images/fixed/logo.png" style="height: 50px;" /></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav space-inside-sides-md">
        @foreach($current as $key => $active) 
            <li><a href="/" class="{{ $key == 'hosting' ? 'text-bold text-color-light border-sm border-bottom border-accent' : ''}} bg-main-hover-lighten-xs transition-fast border-hover-accent-bottom-sm"  href="#">Hosting</a></li>
            <li><a href="/ontwikkeling" class="{{ $key == 'ontwikkeling' ? 'text-bold text-color-light border-sm border-bottom border-accent' : ''}} bg-main-hover-lighten-xs transition-fast border-hover-accent-bottom-sm">Ontwikkeling/Development</a></li>
            <li><a href="/ondersteuning" class="{{ $key == 'ondersteuning' ? 'text-bold text-color-light border-sm border-bottom border-accent' : ''}} bg-main-hover-lighten-xs transition-fast border-hover-accent-bottom-sm">Ondersteuning</a></li>
            <li><a href="/contact" class="{{ $key == 'contact' ? 'text-bold text-color-light border-sm border-bottom border-accent' : ''}} bg-main-hover-lighten-xs transition-fast border-hover-accent-bottom-sm">Contact</a></li>
        @endforeach
      </ul>
      <form class="navbar-form navbar-right hidden-xs hidden-sm">
        <div class="form-group space-inside-up-sm">
          <search></search>
        </div>
      </form>
    </div>
  </div>
  @foreach($current as $key => $active) 
    @include("partials.header.submenu-{$key}", ['current' => $active])
  @endforeach
</nav>
