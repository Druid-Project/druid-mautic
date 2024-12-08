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

/* @bundles/PointBundle/EventListener/GroupScoreSubscriber.php */
class __TwigTemplate_e6f70469ffc80af522a1809266e429b0 extends Template
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

declare(strict_types=1);

namespace Mautic\\PointBundle\\EventListener;

use Mautic\\PointBundle\\Event\\GroupScoreChangeEvent;
use Mautic\\PointBundle\\Model\\TriggerModel;
use Mautic\\PointBundle\\PointGroupEvents;
use Symfony\\Component\\EventDispatcher\\EventSubscriberInterface;

class GroupScoreSubscriber implements EventSubscriberInterface
{
    public function __construct(
        private TriggerModel \$triggerModel
    ) {
    }

    public static function getSubscribedEvents(): array
    {
        return [
            PointGroupEvents::SCORE_CHANGE     => ['onGroupScoreChange', 0],
        ];
    }

    public function onGroupScoreChange(GroupScoreChangeEvent \$event): void
    {
        \$this->triggerModel->triggerEvents(\$event->getContact());
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
        return "@bundles/PointBundle/EventListener/GroupScoreSubscriber.php";
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
        return new Source("", "@bundles/PointBundle/EventListener/GroupScoreSubscriber.php", "/app/docroot/app/bundles/PointBundle/EventListener/GroupScoreSubscriber.php");
    }
}
