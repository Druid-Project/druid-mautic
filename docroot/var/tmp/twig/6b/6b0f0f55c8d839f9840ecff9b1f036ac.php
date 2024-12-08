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

/* @bundles/CoreBundle/EventListener/EnvironmentSubscriber.php */
class __TwigTemplate_98ec9af9d7489d4b42da442dd2c8186e extends Template
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

use Mautic\\CoreBundle\\Helper\\CoreParametersHelper;
use Symfony\\Component\\EventDispatcher\\EventSubscriberInterface;
use Symfony\\Component\\HttpKernel\\Event\\RequestEvent;
use Symfony\\Component\\HttpKernel\\KernelEvents;

class EnvironmentSubscriber implements EventSubscriberInterface
{
    public function __construct(
        private CoreParametersHelper \$coreParametersHelper
    ) {
    }

    public static function getSubscribedEvents(): array
    {
        return [
            KernelEvents::REQUEST => [
                // Cannot be called earlier than priority 128 or the session is not populated leading to Doctrine's UTCDateTimeType leaving
                // entity DateTime values in UTC
                ['onKernelRequestSetTimezone', 128],
                // Must be 101 to load after Symfony's default Locale listener
                ['onKernelRequestSetLocale', 101],
            ],
        ];
    }

    public function onKernelRequestSetTimezone(RequestEvent \$event): void
    {
        \$request = \$event->getRequest();
        if (!\$request->hasPreviousSession()) {
            return;
        }

        // Set date/time
        date_default_timezone_set(\$request->getSession()->get('_timezone', \$this->coreParametersHelper->get('default_timezone')));
    }

    /**
     * Set default locale.
     */
    public function onKernelRequestSetLocale(RequestEvent \$event): void
    {
        \$request = \$event->getRequest();

        if (!\$request->hasPreviousSession()) {
            return;
        }

        \$locale = \$request->getSession()->get('_locale');

        if (!\$locale) {
            \$locale = \$this->coreParametersHelper->get('locale');
        }

        \$request->setLocale(\$locale);
        \$request->getSession()->set('_locale', \$locale);
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
        return "@bundles/CoreBundle/EventListener/EnvironmentSubscriber.php";
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
        return new Source("", "@bundles/CoreBundle/EventListener/EnvironmentSubscriber.php", "/app/docroot/app/bundles/CoreBundle/EventListener/EnvironmentSubscriber.php");
    }
}
