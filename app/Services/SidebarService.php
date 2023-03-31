<?php
namespace App\Services;

use Ynotz\EasyAdmin\Services\SidebarServiceInterface;

class SidebarService implements SidebarServiceInterface
{
    public function getSidebarData(): array
    {
        return [
            [
                'type' => 'menu_item',
                'title' => 'Dashboard',
                'route' => 'dashboard',
                'route_params' => [],
                'icon' => 'easyadmin::icons.users',
                'show' => true
            ],
        ];
    }

    private function showRoles()
    {
        return auth()->check();
    }
    private function showPermissions()
    {
        return auth()->check();
    }
}
?>
