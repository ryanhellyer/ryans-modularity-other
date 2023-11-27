<?php

namespace RyansModularityOther\RyansOtherModule;

use Inpsyde\Modularity\Module\ExecutableModule;
use Inpsyde\Modularity\Module\ServiceModule;
use Psr\Container\ContainerInterface;

class RyansOtherModule implements ExecutableModule, ServiceModule
{
    public function id(): string
    {
        return 'ryans-other-module';
    }

    public function services(): array
    {
        return [
            'ryan.shared.service' => fn() => new ContentModifier(),
        ];
    }

    public function run(ContainerInterface $container): bool
    {
        //add_filter('the_content', [$this, 'theContent'], 11);

        return true;
    }

    /*
    public function theContent($content): string
    {
        return $content . '<p>And the other plugin is operational too!</p>';
    }
    */
}
