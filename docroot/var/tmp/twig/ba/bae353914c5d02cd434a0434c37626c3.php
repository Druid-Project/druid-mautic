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

/* @bundles/StatsBundle/Aggregate/Collection/Stats/WeekStat.php */
class __TwigTemplate_5cb0c8e73004da0728ca1da3e74c096d extends Template
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

namespace Mautic\\StatsBundle\\Aggregate\\Collection\\Stats;

class WeekStat
{
    private int \$count = 0;

    public function getCount(): int
    {
        return \$this->count;
    }

    /**
     * @param int \$count
     */
    public function setCount(\$count): void
    {
        \$this->count = (int) \$count;
    }

    /**
     * @param int \$count
     */
    public function addToCount(\$count): void
    {
        \$this->count += \$count;
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
        return "@bundles/StatsBundle/Aggregate/Collection/Stats/WeekStat.php";
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
        return new Source("", "@bundles/StatsBundle/Aggregate/Collection/Stats/WeekStat.php", "/app/docroot/app/bundles/StatsBundle/Aggregate/Collection/Stats/WeekStat.php");
    }
}
