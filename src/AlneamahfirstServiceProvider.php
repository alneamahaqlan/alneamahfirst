<?php
namespace Alneamahaqlan\Alneamahfirst;

use Spatie\LaravelPackageTools\PackageServiceProvider;
use Spatie\LaravelPackageTools\Package;

class AlneamahfirstServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package) : void
    {
        $package->name('alneamah-first')->hasConfigFile();
    }
}