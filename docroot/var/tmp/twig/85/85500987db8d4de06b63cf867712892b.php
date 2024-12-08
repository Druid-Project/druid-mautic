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

/* @bundles/PageBundle/EventListener/TokenSubscriber.php */
class __TwigTemplate_a235e37d0138c5d5ca91435599cc74f3 extends Template
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

namespace Mautic\\PageBundle\\EventListener;

use Mautic\\PageBundle\\Event\\PageDisplayEvent;
use Mautic\\PageBundle\\PageEvents;
use Symfony\\Component\\EventDispatcher\\EventSubscriberInterface;

class TokenSubscriber implements EventSubscriberInterface
{
    public static function getSubscribedEvents(): array
    {
        return [
            PageEvents::PAGE_ON_DISPLAY => ['decodeTokens', 254],
        ];
    }

    public function decodeTokens(PageDisplayEvent \$event): void
    {
        // Find and replace encoded tokens for trackable URL conversion
        \$content = \$event->getContent();
        \$content = preg_replace('/(%7B)(.*?)(%7D)/i', '{\$2}', \$content);
        \$event->setContent(\$content);
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
        return "@bundles/PageBundle/EventListener/TokenSubscriber.php";
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
        return new Source("", "@bundles/PageBundle/EventListener/TokenSubscriber.php", "/app/docroot/app/bundles/PageBundle/EventListener/TokenSubscriber.php");
    }
}
