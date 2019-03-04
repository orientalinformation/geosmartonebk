<ul class="nav-menu">
    @foreach($items as $menu_item)
        <li class="menu"><a href="{{ $menu_item->link() }}">{{ $menu_item->getTranslatedAttribute('title') }}</a></li>
    @endforeach

    @if(app()->getLocale() === 'fr')
        <li class="menu"><a href="{{ route('locale.change') }}"><img width="100%" src="{{ asset('frontend/img/flags/us.png') }}" alt="en"></a></li>
    @else
        <li class="menu"><a href="{{ route('locale.change') }}"><img width="100%" src="{{ asset('frontend/img/flags/fr.png') }}" alt="fr"></a></li>
    @endif
</ul>
