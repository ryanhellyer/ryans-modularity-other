<?php

namespace RyansModularityOther\RyansOtherModule;

use Inpsyde\Modularity\Module\ExecutableModule;
use Psr\Container\ContainerInterface;

class RyansOtherModule implements ExecutableModule
{
    public function id(): string
    {
        return 'ryans-other-module';
    }

    public function run(ContainerInterface $container): bool
    {
        add_filter('the_content', [$this, 'theContent'], 11);

        return true;
    }

    public function theContent($content): string
    {
        return $content . '<p>And the other plugin is operational too!</p>';
    }

    /**
     * I want to make this method usable via a connector in 
     * the "ryans-modularity-test" plugin.
     */
    public function forUseInOtherPlugin(): string
    {
        return '<p>If this is displaying, then the connector from "ryans-modularity-other" to "ryans-modularity-test" is working!</p>';
    }
}
