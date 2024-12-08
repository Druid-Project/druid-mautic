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

/* @MauticPoint/Event/form.html.twig */
class __TwigTemplate_191eff83bafce543faaaed26849749e4 extends Template
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
        if (array_key_exists("formTheme", $context)) {
            // line 2
            yield "  ";
            $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 2, $this->source); })()), [(isset($context["formTheme"]) || array_key_exists("formTheme", $context) ? $context["formTheme"] : (function () { throw new RuntimeError('Variable "formTheme" does not exist.', 2, $this->source); })())], true);
        }
        // line 4
        yield "<div class=\"bundle-form\">
    <div class=\"bundle-form-header\">
        <h3>";
        // line 6
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["eventHeader"]) || array_key_exists("eventHeader", $context) ? $context["eventHeader"] : (function () { throw new RuntimeError('Variable "eventHeader" does not exist.', 6, $this->source); })()), "html", null, true);
        yield "</h3>
    </div>
    ";
        // line 8
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 8, $this->source); })()), 'form');
        yield "
</div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@MauticPoint/Event/form.html.twig";
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
        return array (  57 => 8,  52 => 6,  48 => 4,  44 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticPoint/Event/form.html.twig", "/app/docroot/app/bundles/PointBundle/Resources/views/Event/form.html.twig");
    }
}
