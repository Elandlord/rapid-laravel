<div class="container">
    <div class="row">
        <div class="col-lg-12 space-inside-sm">
            <div class="right">
                <p class="inline-block text-color-tertiary">
                    U bent hier:
                </p>
                @foreach($urlStructure as $key => $url)
                    <a href="{{ $url }}"><p class="text-bold text-color-tertiary inline-block space-inside-sides-xs">{{ $key }}</p></a>
                    @if(!$loop->last)
                        <span class="text-color-tertiary">></span>
                    @endif
                @endforeach
            </div>
        </div>
    </div>
</div>