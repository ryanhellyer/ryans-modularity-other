<?php

namespace RyansModularityOther\RyansOtherModule;

use Inpsyde\Modularity\Module\ExecutableModule;
use Inpsyde\Modularity\Module\ServiceModule;
use Psr\Container\ContainerInterface;
use Inpsyde\Modularity\Module\ModuleClassNameIdTrait;

class RyansOtherModule implements ExecutableModule, ServiceModule
{
    use ModuleClassNameIdTrait;

    /*
    THIS IS NOT NEEDED SINCE WE'RE USING ModuleClassNameIdTrait which provides this method automatically based on the class name.
    public function id(): string
    {
        return 'ryans-other-module';
    }
    */

    public function services(): array
    {
        return [
            'ryan.shared.service' => fn() => new ContentModifier(),
        ];
    }

    public function run(ContainerInterface $container): bool
    {
        add_action('wp_footer',function() {echo 'Just confirming that the run() method in the RyansOtherModule class is firing!';});

        return true;
    }
}
