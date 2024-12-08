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

/* @bundles/CampaignBundle/Executioner/Scheduler/Mode/DateTime.php */
class __TwigTemplate_ee89d68e2f89f0f19a9b571f351ffb64 extends Template
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

namespace Mautic\\CampaignBundle\\Executioner\\Scheduler\\Mode;

use Mautic\\CampaignBundle\\Entity\\Event;
use Psr\\Log\\LoggerInterface;

class DateTime implements ScheduleModeInterface
{
    public function __construct(
        private LoggerInterface \$logger
    ) {
    }

    public function getExecutionDateTime(Event \$event, \\DateTimeInterface \$compareFromDateTime, \\DateTimeInterface \$comparedToDateTime): \\DateTimeInterface
    {
        \$triggerDate = \$event->getTriggerDate();

        if (null === \$triggerDate) {
            \$this->logger->debug('CAMPAIGN: Trigger date is null');

            return \$compareFromDateTime;
        }

        if (\$compareFromDateTime >= \$triggerDate) {
            \$this->logger->debug(
                'CAMPAIGN: ('.\$event->getId().') Date to execute ('.\$triggerDate->format('Y-m-d H:i:s T').') compared to now ('
                .\$compareFromDateTime->format('Y-m-d H:i:s T').') and is thus overdue'
            );

            return \$compareFromDateTime;
        }

        return \$triggerDate;
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
        return "@bundles/CampaignBundle/Executioner/Scheduler/Mode/DateTime.php";
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
        return new Source("", "@bundles/CampaignBundle/Executioner/Scheduler/Mode/DateTime.php", "/app/docroot/app/bundles/CampaignBundle/Executioner/Scheduler/Mode/DateTime.php");
    }
}
