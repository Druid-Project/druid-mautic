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

/* @bundles/StatsBundle/Aggregate/Collection/DAO/StatDAO.php */
class __TwigTemplate_e7290cf003796f72f583bce2470fbda3 extends Template
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

namespace Mautic\\StatsBundle\\Aggregate\\Collection\\DAO;

class StatDAO
{
    private array \$stats = [];

    /**
     * @return \$this
     */
    public function addStat(\$key, \$value)
    {
        if (!isset(\$this->stats[\$key])) {
            \$this->stats[\$key] = 0;
        }

        \$this->stats[\$key] += \$value;

        return \$this;
    }

    /**
     * @return mixed
     */
    public function getStat(\$key)
    {
        if (!isset(\$this->stats[\$key])) {
            throw new \\InvalidArgumentException(\$key.' does not exist');
        }

        return \$this->stats[\$key];
    }

    /**
     * @return array
     */
    public function getStats()
    {
        return \$this->stats;
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
        return "@bundles/StatsBundle/Aggregate/Collection/DAO/StatDAO.php";
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
        return new Source("", "@bundles/StatsBundle/Aggregate/Collection/DAO/StatDAO.php", "/app/docroot/app/bundles/StatsBundle/Aggregate/Collection/DAO/StatDAO.php");
    }
}
