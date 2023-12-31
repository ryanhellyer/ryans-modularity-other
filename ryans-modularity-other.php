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

function init()
{
    $properties = PluginProperties::new(__FILE__);
    $package = Package::new($properties);

    // Register modules here
    $package->addModule(new RyansOtherModule\RyansOtherModule());

    $package->boot();
}

add_action('plugins_loaded', __NAMESPACE__ . '\\init');
