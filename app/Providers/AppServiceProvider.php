<?php

namespace App\Providers;

use App\Filament\Resources\DeviceResource;
use App\Models\Brand;
use App\Models\Device;
use App\Models\DevicePort;
use App\Models\Room;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Room::unguard();
        Device::unguard();
        DevicePort::unguard();
        Brand::unguard();
    }
}
