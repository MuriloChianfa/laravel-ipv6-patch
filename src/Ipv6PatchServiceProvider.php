<?php

declare(strict_types=1);

namespace MuriloChianfa\LaravelIpv6Patch;

use Illuminate\Foundation\AliasLoader;
use Illuminate\Support\ServiceProvider;

/**
 * Provide a basic package configuration.
 *
 * @method register
 */
final class Ipv6PatchServiceProvider extends ServiceProvider
{
    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $loader = AliasLoader::getInstance();
        $loader->alias(\Illuminate\Routing\RouteUrlGenerator::class, \MuriloChianfa\LaravelIpv6Patch\RouteUrlGenerator::class);
        $loader->alias(\Illuminate\Routing\UrlGenerator::class, \MuriloChianfa\LaravelIpv6Patch\UrlGenerator::class);
    }
}
