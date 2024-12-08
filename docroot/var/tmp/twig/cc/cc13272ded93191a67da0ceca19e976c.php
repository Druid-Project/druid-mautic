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

/* @GrapesJsBuilder/Setting/fields.html.twig */
class __TwigTemplate_75ffb4e66e8a0184a1d53bef4f2cbf8b extends Template
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
        yield "<div class=\"row hide\">
    <div class=\"form-group col-xs-12 \">
        <div class=\"input-group\">
            <textarea id=\"grapesjsbuilder_customMjml\" class=\"form-control builder-mjml\" name=\"grapesjsbuilder[customMjml]\">";
        // line 4
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["customMjml"]) || array_key_exists("customMjml", $context) ? $context["customMjml"] : (function () { throw new RuntimeError('Variable "customMjml" does not exist.', 4, $this->source); })()), "html", null, true);
        yield "</textarea>
        </div>
    </div>
</div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@GrapesJsBuilder/Setting/fields.html.twig";
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
        return new Source("", "@GrapesJsBuilder/Setting/fields.html.twig", "/app/docroot/plugins/GrapesJsBuilderBundle/Resources/views/Setting/fields.html.twig");
    }
}
