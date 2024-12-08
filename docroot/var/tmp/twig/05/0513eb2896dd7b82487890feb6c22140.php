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

/* @bundles/CoreBundle/Tests/Twig/Fixtures/functions/get_class.test */
class __TwigTemplate_bffc72d846f71a0ddd5664da2b49b3fd extends Template
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
        yield "--TEST--
get_class function
--TEMPLATE--
";
        // line 4
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('get_class')->getCallable()("Mautic\\CoreBundle\\Form\\Type\\TelType"), "html", null, true);
        yield "
--DATA--
return []
--EXPECT--
TelType
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@bundles/CoreBundle/Tests/Twig/Fixtures/functions/get_class.test";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  47 => 4,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@bundles/CoreBundle/Tests/Twig/Fixtures/functions/get_class.test", "/app/docroot/app/bundles/CoreBundle/Tests/Twig/Fixtures/functions/get_class.test");
    }
}
