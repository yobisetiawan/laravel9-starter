<?php
$is_active = strpos(Route::currentRouteName(), 'web.dashboard') === 0;
?>
 <div class="app-logo">
    {{-- <a href="{{ route('web.dashboard') }}">
        { @component('icons.menu.logo', ['is_active' => $is_active ]) @endcomponent  
    </a> --}}
</div>
 