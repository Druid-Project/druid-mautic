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

/* @bundles/EmailBundle/EventListener/GeneratedColumnSubscriber.php */
class __TwigTemplate_ba10c4bb80261477509f9ca38b0e65d3 extends Template
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

namespace Mautic\\EmailBundle\\EventListener;

use Mautic\\CoreBundle\\CoreEvents;
use Mautic\\CoreBundle\\Doctrine\\GeneratedColumn\\GeneratedColumn;
use Mautic\\CoreBundle\\Event\\GeneratedColumnsEvent;
use Symfony\\Component\\EventDispatcher\\EventSubscriberInterface;

class GeneratedColumnSubscriber implements EventSubscriberInterface
{
    public static function getSubscribedEvents(): array
    {
        return [
            CoreEvents::ON_GENERATED_COLUMNS_BUILD => ['onGeneratedColumnsBuild', 0],
        ];
    }

    public function onGeneratedColumnsBuild(GeneratedColumnsEvent \$event): void
    {
        \$sentDate = new GeneratedColumn('email_stats', 'generated_sent_date', 'DATE', \"CONCAT(YEAR(date_sent), '-', LPAD(MONTH(date_sent), 2, '0'), '-', LPAD(DAY(date_sent), 2, '0'))\");
        \$sentDate->addIndexColumn('email_id');
        \$sentDate->setOriginalDateColumn('date_sent', 'd');

        \$event->addGeneratedColumn(\$sentDate);
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
        return "@bundles/EmailBundle/EventListener/GeneratedColumnSubscriber.php";
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
        return new Source("", "@bundles/EmailBundle/EventListener/GeneratedColumnSubscriber.php", "/app/docroot/app/bundles/EmailBundle/EventListener/GeneratedColumnSubscriber.php");
    }
}
