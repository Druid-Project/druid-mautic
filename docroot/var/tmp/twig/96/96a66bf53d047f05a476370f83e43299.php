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

/* @bundles/ApiBundle/EventListener/RateLimitGenerateKeySubscriber.php */
class __TwigTemplate_9e976bdc6249221c9a629887d72a1cc1 extends Template
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

namespace Mautic\\ApiBundle\\EventListener;

use Mautic\\CoreBundle\\Helper\\CoreParametersHelper;
use Noxlogic\\RateLimitBundle\\Events\\GenerateKeyEvent;
use Noxlogic\\RateLimitBundle\\Events\\RateLimitEvents;
use Symfony\\Component\\EventDispatcher\\EventSubscriberInterface;

class RateLimitGenerateKeySubscriber implements EventSubscriberInterface
{
    public function __construct(
        private CoreParametersHelper \$coreParametersHelper
    ) {
    }

    public static function getSubscribedEvents(): array
    {
        return [
            RateLimitEvents::GENERATE_KEY => ['onGenerateKey', 0],
        ];
    }

    public function onGenerateKey(GenerateKeyEvent \$event): void
    {
        \$suffix = rawurlencode(\$this->coreParametersHelper->get('site_url'));
        \$event->addToKey(\$suffix);
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
        return "@bundles/ApiBundle/EventListener/RateLimitGenerateKeySubscriber.php";
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
        return new Source("", "@bundles/ApiBundle/EventListener/RateLimitGenerateKeySubscriber.php", "/app/docroot/app/bundles/ApiBundle/EventListener/RateLimitGenerateKeySubscriber.php");
    }
}
