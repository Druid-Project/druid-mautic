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

/* @bundles/EmailBundle/Stats/Helper/StatHelperInterface.php */
class __TwigTemplate_5de64b9e3dce1143e14c404aa9c659ea extends Template
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

namespace Mautic\\EmailBundle\\Stats\\Helper;

use Mautic\\EmailBundle\\Stats\\FetchOptions\\EmailStatOptions;
use Mautic\\StatsBundle\\Aggregate\\Collection\\StatCollection;

interface StatHelperInterface
{
    /**
     * @return string
     */
    public function getName();

    public function fetchStats(\\DateTime \$fromDateTime, \\DateTime \$toDateTime, EmailStatOptions \$options);

    public function generateStats(\\DateTime \$fromDateTime, \\DateTime \$toDateTime, EmailStatOptions \$options, StatCollection \$statCollection);
}
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@bundles/EmailBundle/Stats/Helper/StatHelperInterface.php";
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
        return new Source("", "@bundles/EmailBundle/Stats/Helper/StatHelperInterface.php", "/app/docroot/app/bundles/EmailBundle/Stats/Helper/StatHelperInterface.php");
    }
}
