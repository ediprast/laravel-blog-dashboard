<?php

namespace App\Providers;

use App\Filament\Resources\AdminResource;
use Illuminate\Support\ServiceProvider;
use Filament\Facades\Filament;
use Filament\Navigation\UserMenuItem;
use Filament\Navigation\NavigationGroup;

class FilamentServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        Filament::serving(function () {
            // Filament::registerNavigationGroups([
            //     NavigationGroup::make()
            //         ->label('Shop')
            //         ->icon('heroicon-s-shopping-cart'),
            //     NavigationGroup::make()
            //         ->label('Blog')
            //         ->icon('heroicon-s-pencil'),
            //     NavigationGroup::make()
            //         ->label('Settings')
            //         ->icon('heroicon-s-cog')
            //         ->collapsed(),
            // ]);
            // Filament::registerUserMenuItems([
            //     UserMenuItem::make()
            //         ->label('Admin Settings')
            //         ->url(AdminResource::getUrl())
            //         ->icon('heroicon-s-cog'),
            // ]);
        });
    }
}
