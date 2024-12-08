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

/* @bundles/CampaignBundle/EventCollector/Builder/EventBuilder.php */
class __TwigTemplate_aa78a29d62c2ef0d26d65c4a7c9f1272 extends Template
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

namespace Mautic\\CampaignBundle\\EventCollector\\Builder;

use Mautic\\CampaignBundle\\EventCollector\\Accessor\\Event\\ActionAccessor;
use Mautic\\CampaignBundle\\EventCollector\\Accessor\\Event\\ConditionAccessor;
use Mautic\\CampaignBundle\\EventCollector\\Accessor\\Event\\DecisionAccessor;

class EventBuilder
{
    public static function buildActions(array \$actions): array
    {
        \$converted = [];
        foreach (\$actions as \$key => \$actionArray) {
            \$converted[\$key] = new ActionAccessor(\$actionArray);
        }

        return \$converted;
    }

    public static function buildConditions(array \$conditions): array
    {
        \$converted = [];
        foreach (\$conditions as \$key => \$conditionArray) {
            \$converted[\$key] = new ConditionAccessor(\$conditionArray);
        }

        return \$converted;
    }

    public static function buildDecisions(array \$decisions): array
    {
        \$converted = [];
        foreach (\$decisions as \$key => \$decisionArray) {
            \$converted[\$key] = new DecisionAccessor(\$decisionArray);
        }

        return \$converted;
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
        return "@bundles/CampaignBundle/EventCollector/Builder/EventBuilder.php";
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
        return new Source("", "@bundles/CampaignBundle/EventCollector/Builder/EventBuilder.php", "/app/docroot/app/bundles/CampaignBundle/EventCollector/Builder/EventBuilder.php");
    }
}
