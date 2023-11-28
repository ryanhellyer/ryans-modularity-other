<?php
/**
 * Plugin Name: Ryans Modularity other plugin.
 * Description: Bonus plugin to hook into.
 * Version: 1.0
 * Author: Ryan Hellyer <ryanhellyer@gmail.com>
 */

declare(strict_types=1);

namespace RyansModularityOther;

use Inpsyde\Modularity\Package;
use Inpsyde\Modularity\Properties\PluginProperties;

if (file_exists(__DIR__ . '/vendor/autoload.php')) {
    require_once __DIR__ . '/vendor/autoload.php';
}

function init(): Package
{
    $package = package();

    // Register modules here
    $package->addModule(new RyansOtherModule\RyansOtherModule());

    $package->boot();

    return $package;
}

add_action('plugins_loaded', __NAMESPACE__ . '\\init');

function package(): Package {
    static $package;

    if (!$package) {
        $properties = PluginProperties::new(__FILE__);
        $package = Package::new($properties);
    }

    return $package;
}
