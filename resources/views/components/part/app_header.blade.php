<div class="page-header d-flex justify-content-between align-items-center">
    {{ $slot }}
    <div class="d-flex  align-items-center">

        <?php
        $today_date = \Carbon\Carbon::now()->timezone(Config::get('app.local_timezone'));
        ?>
        <div class="text-end me-3 date-header text-muted">
            <div>{{ $today_date->format('l') }}</div>
            <div> {{ $today_date->format('F d, Y') }}</div>
        </div> 

        <div> 

            <a href="{{ route('logout') }}" onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">
                @component('icons.menu.exit')
                @endcomponent
            </a>


            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </div>
    </div>
</div>
