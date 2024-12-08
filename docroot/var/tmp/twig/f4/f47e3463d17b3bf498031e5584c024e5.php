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

/* @bundles/CampaignBundle/Executioner/Scheduler/Mode/Optimized.php */
class __TwigTemplate_a87ff3beb087beb7ba1854212630f2d4 extends Template
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

namespace Mautic\\CampaignBundle\\Executioner\\Scheduler\\Mode;

use Mautic\\CampaignBundle\\Entity\\Event;
use Mautic\\LeadBundle\\Entity\\Lead;
use Mautic\\LeadBundle\\Services\\PeakInteractionTimer;

class Optimized implements ScheduleModeInterface
{
    public const OPTIMIZED_TIME         = 0;
    public const OPTIMIZED_DAY_AND_TIME = 1;

    /** @var string[] */
    public const AVAILABLE_FOR_EVENTS = ['email.send', 'message.send', 'plugin.leadpush', 'campaign.sendwebhook'];

    public function __construct(
        private PeakInteractionTimer \$peakInteractionTimer
    ) {
    }

    public function getExecutionDateTime(Event \$event, \\DateTimeInterface \$now, \\DateTimeInterface \$comparedToDateTime): \\DateTimeInterface
    {
        return \$now;
    }

    public function getExecutionDateTimeForContact(Event \$event, Lead \$contact): \\DateTimeInterface
    {
        if (self::OPTIMIZED_DAY_AND_TIME === \$event->getTriggerWindow()) {
            return \$this->peakInteractionTimer->getOptimalTimeAndDay(\$contact);
        } else {
            return \$this->peakInteractionTimer->getOptimalTime(\$contact);
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
        return "@bundles/CampaignBundle/Executioner/Scheduler/Mode/Optimized.php";
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
        return new Source("", "@bundles/CampaignBundle/Executioner/Scheduler/Mode/Optimized.php", "/app/docroot/app/bundles/CampaignBundle/Executioner/Scheduler/Mode/Optimized.php");
    }
}
