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

/* @MauticForm/form.html.twig */
class __TwigTemplate_31b4284d623d1d89c91b2ec5ee1fd446 extends Template
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
        yield "<html>
    <head>
        <title>";
        // line 3
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new RuntimeError('Variable "name" does not exist.', 3, $this->source); })()), "html", null, true);
        yield "</title>
        ";
        // line 4
        yield (isset($context["metaRobots"]) || array_key_exists("metaRobots", $context) ? $context["metaRobots"] : (function () { throw new RuntimeError('Variable "metaRobots" does not exist.', 4, $this->source); })());
        yield "
        ";
        // line 5
        yield $this->extensions['Mautic\CoreBundle\Twig\Extension\AnalyticsExtension']->getCode();
        yield "
        ";
        // line 6
        if ((array_key_exists("stylesheets", $context) && is_iterable((isset($context["stylesheets"]) || array_key_exists("stylesheets", $context) ? $context["stylesheets"] : (function () { throw new RuntimeError('Variable "stylesheets" does not exist.', 6, $this->source); })())))) {
            // line 7
            yield "        ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["stylesheets"]) || array_key_exists("stylesheets", $context) ? $context["stylesheets"] : (function () { throw new RuntimeError('Variable "stylesheets" does not exist.', 7, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["css"]) {
                // line 8
                yield "        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["css"], "html", null, true);
                yield "\" />
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['css'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 10
            yield "        ";
        }
        // line 11
        yield "    </head>
    <body>
        ";
        // line 13
        yield (isset($context["content"]) || array_key_exists("content", $context) ? $context["content"] : (function () { throw new RuntimeError('Variable "content" does not exist.', 13, $this->source); })());
        yield "
    </body>
</html>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@MauticForm/form.html.twig";
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
        return array (  81 => 13,  77 => 11,  74 => 10,  65 => 8,  60 => 7,  58 => 6,  54 => 5,  50 => 4,  46 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticForm/form.html.twig", "/app/docroot/app/bundles/FormBundle/Resources/views/form.html.twig");
    }
}
