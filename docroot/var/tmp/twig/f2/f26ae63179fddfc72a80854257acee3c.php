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

/* @GrapesJsBuilder/Builder/template.html.twig */
class __TwigTemplate_4a263881edc6f7923c106ed54fa4a659 extends Template
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
        yield "    ";
        $context["templateObject"] = ["templateHtml" =>         // line 2
(isset($context["templateHtml"]) || array_key_exists("templateHtml", $context) ? $context["templateHtml"] : (function () { throw new RuntimeError('Variable "templateHtml" does not exist.', 2, $this->source); })()), "templateMjml" =>         // line 3
(isset($context["templateMjml"]) || array_key_exists("templateMjml", $context) ? $context["templateMjml"] : (function () { throw new RuntimeError('Variable "templateMjml" does not exist.', 3, $this->source); })())];
        // line 5
        yield "    ";
        yield json_encode((isset($context["templateObject"]) || array_key_exists("templateObject", $context) ? $context["templateObject"] : (function () { throw new RuntimeError('Variable "templateObject" does not exist.', 5, $this->source); })()));
        yield "
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@GrapesJsBuilder/Builder/template.html.twig";
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
        return array (  47 => 5,  45 => 3,  44 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@GrapesJsBuilder/Builder/template.html.twig", "/app/docroot/plugins/GrapesJsBuilderBundle/Resources/views/Builder/template.html.twig");
    }
}
