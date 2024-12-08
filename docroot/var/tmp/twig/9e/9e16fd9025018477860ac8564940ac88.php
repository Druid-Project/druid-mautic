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

/* @bundles/EmailBundle/Tests/Helper/EventListener/EmailValidationSubscriber.php */
class __TwigTemplate_95e795686892bb242516fd380e761c49 extends Template
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

namespace Mautic\\EmailBundle\\Tests\\Helper\\EventListener;

use Mautic\\EmailBundle\\EmailEvents;
use Mautic\\EmailBundle\\Event\\EmailValidationEvent;
use Symfony\\Component\\EventDispatcher\\EventSubscriberInterface;

class EmailValidationSubscriber implements EventSubscriberInterface
{
    public static function getSubscribedEvents(): array
    {
        return [
            EmailEvents::ON_EMAIL_VALIDATION => ['onEmailValidation', 0],
        ];
    }

    public function onEmailValidation(EmailValidationEvent \$event): void
    {
        if ('bad@gmail.com' === \$event->getAddress()) {
            \$event->setInvalid('bad email');
        } // defaults to valid
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
        return "@bundles/EmailBundle/Tests/Helper/EventListener/EmailValidationSubscriber.php";
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
        return new Source("", "@bundles/EmailBundle/Tests/Helper/EventListener/EmailValidationSubscriber.php", "/app/docroot/app/bundles/EmailBundle/Tests/Helper/EventListener/EmailValidationSubscriber.php");
    }
}
