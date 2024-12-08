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

/* @bundles/CampaignBundle/Translations/en_US/validators.ini */
class __TwigTemplate_2171c5775c895cce1093f1725138723f extends Template
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
        yield "mautic.campaign.form.events.notempty=\"At least one event is required. Use the Launch Campaign Builder button to add one.\"
mautic.campaign.form.sources.notempty=\"At least one contact source is required. Use the Launch Campaign Builder button to add one.\"
mautic.campaign.infiniteloop.immediate=\"Campaign cannot restart itself without a delay. Please add at least 30 minute delay.\"
mautic.campaign.infiniteloop.interval=\"Your delay is only %count% minutes. It must be at least 30 minutes.\"
mautic.config.peak_interaction_timer.best_default_hour.validation.range='The hour end must be after the hour start.'
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@bundles/CampaignBundle/Translations/en_US/validators.ini";
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
        return new Source("", "@bundles/CampaignBundle/Translations/en_US/validators.ini", "/app/docroot/app/bundles/CampaignBundle/Translations/en_US/validators.ini");
    }
}
