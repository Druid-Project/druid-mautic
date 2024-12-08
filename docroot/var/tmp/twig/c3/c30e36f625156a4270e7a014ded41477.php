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

/* @MauticLead/SubscribedEvents/Timeline/import.html.twig */
class __TwigTemplate_ac27b2acc7c8223d7cdbd3eb08b84801 extends Template
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
        // line 6
        $context["import"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 6, $this->source); })()), "extra", [], "array", false, false, false, 6);
        // line 7
        yield "<dl class=\"dl-horizontal\">
";
        // line 8
        if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["import"]) || array_key_exists("import", $context) ? $context["import"] : (function () { throw new RuntimeError('Variable "import" does not exist.', 8, $this->source); })()), "user_id", [], "array", false, false, false, 8))) {
            // line 9
            yield "    <dt>";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.createdby"), "html", null, true);
            yield "</dt>
    <dd>
        <a href=\"";
            // line 11
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_user_action", ["objectAction" => "view", "objectId" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["import"]) || array_key_exists("import", $context) ? $context["import"] : (function () { throw new RuntimeError('Variable "import" does not exist.', 11, $this->source); })()), "user_id", [], "array", false, false, false, 11)]), "html", null, true);
            yield "\" data-toggle=\"ajax\">
            ";
            // line 12
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["import"]) || array_key_exists("import", $context) ? $context["import"] : (function () { throw new RuntimeError('Variable "import" does not exist.', 12, $this->source); })()), "user_name", [], "array", false, false, false, 12), "html", null, true);
            yield "
        </a>
    </dd>
";
        }
        // line 16
        if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["import"]) || array_key_exists("import", $context) ? $context["import"] : (function () { throw new RuntimeError('Variable "import" does not exist.', 16, $this->source); })()), "properties", [], "array", false, false, false, 16), "file", [], "array", false, false, false, 16))) {
            // line 17
            yield "    <dt>";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.import.source.file"), "html", null, true);
            yield "</dt>
    <dd>";
            // line 18
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["import"]) || array_key_exists("import", $context) ? $context["import"] : (function () { throw new RuntimeError('Variable "import" does not exist.', 18, $this->source); })()), "properties", [], "array", false, false, false, 18), "file", [], "array", false, false, false, 18), "html", null, true);
            yield "</dd>
";
        }
        // line 20
        if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["import"]) || array_key_exists("import", $context) ? $context["import"] : (function () { throw new RuntimeError('Variable "import" does not exist.', 20, $this->source); })()), "properties", [], "array", false, false, false, 20), "line", [], "array", false, false, false, 20))) {
            // line 21
            yield "    <dt>";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.import.csv.line.number"), "html", null, true);
            yield "</dt>
    <dd>";
            // line 22
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["import"]) || array_key_exists("import", $context) ? $context["import"] : (function () { throw new RuntimeError('Variable "import" does not exist.', 22, $this->source); })()), "properties", [], "array", false, false, false, 22), "line", [], "array", false, false, false, 22), "html", null, true);
            yield "</dd>
";
        }
        // line 24
        yield "</dl>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@MauticLead/SubscribedEvents/Timeline/import.html.twig";
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
        return array (  90 => 24,  85 => 22,  80 => 21,  78 => 20,  73 => 18,  68 => 17,  66 => 16,  59 => 12,  55 => 11,  49 => 9,  47 => 8,  44 => 7,  42 => 6,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticLead/SubscribedEvents/Timeline/import.html.twig", "/app/docroot/app/bundles/LeadBundle/Resources/views/SubscribedEvents/Timeline/import.html.twig");
    }
}
