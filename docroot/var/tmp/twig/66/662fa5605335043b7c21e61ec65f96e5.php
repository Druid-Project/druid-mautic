<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* @bundles/CoreBundle/EventListener/AssetsSubscriber.php */
class __TwigTemplate_d6f072009030d8fb1b4ac52db5ac137e extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield "<?php

namespace Mautic\\CoreBundle\\EventListener;

use Mautic\\CoreBundle\\CoreEvents;
use Mautic\\CoreBundle\\Event\\CustomAssetsEvent;
use Mautic\\CoreBundle\\Twig\\Helper\\AssetsHelper;
use Symfony\\Component\\EventDispatcher\\EventDispatcherInterface;
use Symfony\\Component\\EventDispatcher\\EventSubscriberInterface;
use Symfony\\Component\\HttpKernel\\Event\\RequestEvent;
use Symfony\\Component\\HttpKernel\\KernelEvents;

class AssetsSubscriber implements EventSubscriberInterface
{
    public function __construct(
        private AssetsHelper \$assetsHelper,
        private EventDispatcherInterface \$dispatcher
    ) {
    }

    public static function getSubscribedEvents(): array
    {
        return [
            KernelEvents::REQUEST => ['fetchCustomAssets', 0],
        ];
    }

    public function fetchCustomAssets(RequestEvent \$event): void
    {
        if (\$event->isMainRequest() && \$this->dispatcher->hasListeners(CoreEvents::VIEW_INJECT_CUSTOM_ASSETS)) {
            \$this->dispatcher->dispatch(
                new CustomAssetsEvent(\$this->assetsHelper),
                CoreEvents::VIEW_INJECT_CUSTOM_ASSETS
            );
        }
    }
}
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@bundles/CoreBundle/EventListener/AssetsSubscriber.php";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@bundles/CoreBundle/EventListener/AssetsSubscriber.php", "/app/docroot/app/bundles/CoreBundle/EventListener/AssetsSubscriber.php");
    }
}
