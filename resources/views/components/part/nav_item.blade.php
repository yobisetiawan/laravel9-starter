<?php
$is_active = strpos(Route::currentRouteName(), $route_selected) === 0;
?>
<li class="{{ $is_active ? 'active' : '' }}">
    <a href="{{ route($route_name) }}">
        <div class="app-icon-menu">
            @component($icon, ['is_active' => $is_active]) @endcomponent
        </div>
    </a>
    @if ($is_active)
        <img class="slice-active" src="{{ url('images/menu-selected.png') }}" alt="">
    @endif

</li>
