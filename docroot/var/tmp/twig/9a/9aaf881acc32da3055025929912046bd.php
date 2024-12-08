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

/* @MauticClearbit/Clearbit/lookup.html.twig */
class __TwigTemplate_1a753470160540118143a8098f29ee08 extends Template
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
        yield "<div class=\"alert alert-info\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.plugin.clearbit.submit"), "html", null, true);
        yield "</div>
<div style=\"margin-top: 10px\">
    <ul class=\"list-group\" style=\"max-height: 400px;overflow-y: auto\">
        <li class=\"list-group-item\">";
        // line 4
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["lookupItem"]) || array_key_exists("lookupItem", $context) ? $context["lookupItem"] : (function () { throw new RuntimeError('Variable "lookupItem" does not exist.', 4, $this->source); })()), "html", null, true);
        yield "</li>
    </ul>
</div>
";
        // line 7
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 7, $this->source); })()), 'form');
        yield "
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@MauticClearbit/Clearbit/lookup.html.twig";
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
        return array (  55 => 7,  49 => 4,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticClearbit/Clearbit/lookup.html.twig", "/app/docroot/plugins/MauticClearbitBundle/Resources/views/Clearbit/lookup.html.twig");
    }
}
