<div class="app-main-menu text-center">
   
    @component('components.part.nav_logo')@endcomponent

    <ul class="list-unstyled list-menu">
        <?php
        $user = auth()->user();
        $permission = \App\Constants\PermissionConst::class;
        $menus = [
            // [
            //     'route_selected' => 'web.order',
            //     'route_name' => 'web.order.list',
            //     'icon' => 'icons.menu.order',
            //     'permission' => $user->hasPermissionTo($permission::MENU_ORDER),
            // ],
            // [
            //     'route_selected' => 'web.kitchen',
            //     'route_name' => 'web.kitchen.list',
            //     'icon' => 'icons.menu.kitchen',
            //     'permission' => $user->hasPermissionTo($permission::MENU_KITCHEN),
            // ],
            // [
            //     'route_selected' => 'web.shipping',
            //     'route_name' => 'web.shipping.list',
            //     'icon' => 'icons.menu.shipping',
            //     'permission' => $user->hasPermissionTo($permission::MENU_SHIPMENT),
            // ],
            // [
            //     'route_selected' => 'web.batch',
            //     'route_name' => 'web.batch.list',
            //     'icon' => 'icons.menu.batch',
            //     'permission' => $user->hasPermissionTo($permission::MENU_BATCH),
            // ],
            // [
            //     'route_selected' => 'web.report',
            //     'route_name' => 'web.report.invoice.list',
            //     'icon' => 'icons.menu.report',
            //     'permission' => $user->hasPermissionTo($permission::MENU_REPORT),
            // ],
            // [
            //     'route_selected' => 'web.setting',
            //     'route_name' => 'web.setting.profile.list',
            //     'icon' => 'icons.menu.setting',
            //     'permission' => $user->hasPermissionTo($permission::MENU_SETTING),
            // ],
        ];
        ?>
        @foreach ($menus as $item)
            @if ($item['permission'])
                @component('components.part.nav_item', $item)@endcomponent
            @endif
        @endforeach
        
    </ul>
</div>
